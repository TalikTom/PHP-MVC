<?php require_once 'controllers/login.php' ?>

    <main class="center-grid margin-top">
        <form action="/index/authorization" method="post">
            <label for="email">Email</label>
            <input type="text" name="email"
                   value="<?= $email ?>"
                   placeholder="email" id="">
            <label for="password">Password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Login">
        </form>
    </main>

