<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/header'); ?>
</head>

<body>
    <?php $this->load->view('_partials/navbar'); ?>

    <h1>List Artikel</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <a style="text-decoration: none;" href="<?= site_url('article/' . $article->slug) ?>">
                    <?= $article->title ? html_escape($article->title) : "No Title" ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

    <?php $this->load->view('_partials/footer'); ?>
</body>

</html>