<?php include 'partials/header.php'; ?>
<?php include 'partials/nav.php'; ?>

    <main class="center-grid margin-top">
        <form action="/authorization" method="post">
            <label for="email">Email</label>
            <input type="text" name="email"
                   value="<?= $email ?>"
                   placeholder="email" id="">
            <label for="password">Password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Login">
        </form>
    </main>

<?php include 'partials/footer.php'; ?>