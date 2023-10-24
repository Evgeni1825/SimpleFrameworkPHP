<?php
    use App\Application\Views\View;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php View::component('head'); ?>
    <title>Contacts page</title>
</head>
<body>
    <main>
    <?php View::component('nav'); ?>
        <div class="container">
            <div class="row mt-3">
                <h2>Welcome to <span class="badge bg-secondary">Contacts</span></h2>
            </div>
        </div>
    </main>
</body>
</html>