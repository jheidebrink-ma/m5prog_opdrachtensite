<?php

$page_id  = $_GET['id'];

// MySQLi
$conn     = new mysqli($servername, $username, $password, $dbname);
$sql      = 'SELECT * FROM products WHERE id=' . $page_id;
$result   = $conn->query($sql);
$item     = $result->fetch_assoc();


// PDO
$dsn      = "mysql:host=$servername;dbname=$dbname;charset=$charset;port=$port";
$pdo      = new \PDO($dsn, $username, $password);
$sql      = 'SELECT * FROM products WHERE id=' . $page_id;
$result   = $pdo->query($sql);
$item     = $result->fetch();


// mysql injection
https://localhost/page.php?id=';DROP DATABASE voorbeeld_db;#'
$page_id  = $_GET['id'];
$page_id  = ';DROP DATABASE voorbeeld_db;#'
'SELECT * FROM products WHERE id=' . $page_id;
SELECT * FROM products WHERE id='';DROP DATABASE voorbeeld_db;#';


// prepare and bind
$pre_sql   = $conn->prepare('SELECT * FROM products WHERE id=?');
$pre_sql->bind_param('i', $page_id);

// i - integer
// d - double
// s - string
// b - BLOB







