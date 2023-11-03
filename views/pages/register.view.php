<?php
    use App\Application\Views\View;
    use App\Application\Config\Config;
    use App\Application\Alerts\Error;
?>
<!DOCTYPE html>
<html lang="<?= Config::get('app.lang')?>">
<head>
    <?php View::component('head'); ?>
    <title><?=$title ?></title>
</head>
<body>
    <main>
    <?php View::component('nav'); ?>
        <div class="container">
            <div class="row mt-3">
                <h3>Register</h3>
            </div>
            <div class="row mt-3">
                <form action="\register" class="form" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control <?= Error::has('email') ? 'is-invalid' : '' ?>" id="email" placeholder="name@example.com">
                        <div class="invalid-feedback">
                            <?= Error::get('email')?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control <?= Error::has('name') ? 'is-invalid' : '' ?>" id="name">
                        <div class="invalid-feedback">
                            <?= Error::get('name')?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?= Error::has('password') ? 'is-invalid' : '' ?>" id="password">
                        <div class="invalid-feedback">
                            <?= Error::get('password')?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirm" class="form-label">Password confirmation</label>
                        <input type="password" name="password_confirm" class="form-control <?= Error::has('name') ? 'is-invalid' : '' ?>" id="password_confirm">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>