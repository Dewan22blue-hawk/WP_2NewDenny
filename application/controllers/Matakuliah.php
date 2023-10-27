<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );

        $this->form_validation->set_rules(
            'sks',
            'Sks',
            'required|numeric',
            [
                'required' => 'Opsi Harus dipilih',
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-mahasiswa');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}
