<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>
    <main class="center-grid margin-top">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Protected</title>
        </head>
        <body>
        <p>
            <?= $message ?>
        </p>
        <a href="/logout">Logout</a>
        </body>
        </html>
    </main>
<?php include 'partials/footer.php'; ?>