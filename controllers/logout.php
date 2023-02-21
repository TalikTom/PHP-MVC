<?php

session_start();
unset($_SESSION['auth']);
unset($_SESSION['counter']);

session_destroy();
header('location: /');