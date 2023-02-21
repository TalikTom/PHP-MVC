<nav class="nav_container">
    <div><button class="toggle" onclick="toggle()">Open/close></button></div>
    <ul class="nav_bar" id="nav">
        <li><a href="/">Spiral matrix</a></li>
        <li><a href="/oib-generator">OIB Generator</a></li>
        <li><a href="/love-calculator">Love Calculator</a></li>
        <li><a href="/chart">Chart</a></li>
        <li><?= $_SESSION['auth'] ? '<a href="/logout">Logout</a>' : '<a href="/login">Login</a>' ?>
        <li><?= $_SESSION['auth'] ? '<a href="/protected">Protected</a>' : '' ?>
    </ul>
</nav>