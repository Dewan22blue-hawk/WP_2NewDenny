<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/header') ?>
</head>

<body>
    <main class="main">
        <?php $this->load->view('admin/_partials/side_nav') ?>

        <div class="content">
            <h1>Article is Empty</h1>
            <p>No Article to show. Please create new article.</p>

            <div>
                <a href="<?= site_url('admin/post/new') ?>" class="button button-primary">+ Create New Article</a>
            </div>

            <?php $this->load->view('admin/_partials/footer') ?>
        </div>
    </main>
</body>

</html>