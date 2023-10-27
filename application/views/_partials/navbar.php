<nav class="navbar">
    <a href="<?= site_url() ?>">Home</a>
    <a href="<?= site_url('article') ?>">Article</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('contact') ?>">Contact</a>
    <a href="<?= site_url('auth/login') ?>" style="margin-left:auto">Login</a>
</nav>
<style>
    .navbar {
        display: flex;
        gap: 1em;
        background-color: teal;
    }

    .navbar a {
        font-family: sans-serif;
        font-weight: 500;
        color: white;
        text-decoration: none;
        padding: 1rem;
    }

    .navbar a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 25%;

    }

    .footer {
        font-family: sans-serif;
        background-color: whitesmoke;
        padding: 1em;
        text-align: center;
        border-top: 1px solid lightgray;
    }
</style>