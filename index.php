<?php
session_start();
$_SESSION['auth']= isset($_SESSION['auth']) ? $_SESSION['auth'] : '';
require_once 'functions.php';
require_once 'Response.php';
require_once 'router.php';







// connect to the database, execute a query



//$id = $_GET['id'];
//
//$query = "select * from notes where user_id = :id";

//$notes = $db->query($query, [':id' => $id])->fetchAll(PDO::FETCH_ASSOC);

//
//
//
//foreach ($notes as $note) {
//    echo '<li>' . $note['body'] . '</li';
//}



