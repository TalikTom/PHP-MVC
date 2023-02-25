<nav class="nav_container">
    <div><button class="toggle" onclick="toggle()">Open/close></button></div>
    <ul class="nav_bar" id="nav">
        <li><a href="/">Spiral matrix</a></li>
        <li><a href="/index/oib">OIB Generator</a></li>
        <li><a href="/index/love">Love Calculator</a></li>
        <li><a href="/index/chart">Chart</a></li>
        <li><?= $_SESSION['auth'] ? '<a href="/index/logout">Logout</a>' : '<a href="/index/login">Login</a>' ?>
        <li><?= $_SESSION['auth'] ? '<a href="/index/protected">Protected</a>' : '' ?>
    </ul>
</nav>