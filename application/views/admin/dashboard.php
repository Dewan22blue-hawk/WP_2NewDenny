<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/header') ?>
</head>

<body>
    <main class="main">
        <?php $this->load->view('admin/_partials/side_nav') ?>

        <div class="content">
            <h1>Overview</h1>

            <div style="display:flex; gap: 1em">
                <div class="card text-center" style="width: 100px;">
                    <h2>
                        <?= $article_count ?>
                    </h2>
                    <p><a href="<?= site_url('admin/post') ?>" style="text-decoration:none;">Artikel</a></p>
                </div>
                <div class="card text-center" style="width: 100px;">
                    <h2>
                        <?= $feedback_count ?>
                    </h2>
                    <p><a href="<?= site_url('admin/feedback') ?>" style="text-decoration:none;">Feedback</a></p>
                </div>
            </div>

            <?php $this->load->view('admin/_partials/footer') ?>
        </div>
    </main>
</body>

</html>