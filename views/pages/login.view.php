<?php
    use App\Application\Views\View;
    use App\Application\Config\Config;
    dd(\App\Application\Auth\Auth::user());
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
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>