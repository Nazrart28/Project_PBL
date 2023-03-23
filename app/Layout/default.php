<!DOCTYPE html>
<html>

<head>
    <title><?= $this->renderSection('title') ?></title>
</head>

<body>
    <div>
        <?php if (session()->has('error')) : ?>
            <div class="text-danger"><?= session('error') ?></div>
        <?php endif ?>

        <?= $this->renderSection('content') ?>
    </div>

    <?php if (service('auth')->check()) : ?>
        <div>
            Logged in as <?= service('auth')->getUser()->email ?>
            <a href="<?= site_url('logout') ?>">Log out</a>
        </div>
    <?php endif ?>
</body>

</html>