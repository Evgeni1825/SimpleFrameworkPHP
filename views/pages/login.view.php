<?php
    use App\Application\Views\View;
    use App\Application\Config\Config;
    use App\Application\Alerts\Error;
    use App\Application\Alerts\Alert;
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
                <h3>Login</h3>
            </div>
            <div class="row mt-3">
                <form action="\login" class="form" method="post">
                    <?php
                    if (Alert::success()){
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?= Alert::success(true) ?>
                        </div>
                    <?php
                    }
                    if (Alert::danger()){

                        ?>
                    <div class="alert alert-danger" role="alert">
                        <?= Alert::danger(true) ?>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control <?= Error::has('email') ? 'is-invalid' : '' ?>" id="email" placeholder="name@example.com">
                        <div class="invalid-feedback">
                            <?= Error::get('email')?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?= Error::has('password') ? 'is-invalid' : '' ?>" id="password">
                        <div class="invalid-feedback">
                            <?= Error::get('password')?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>