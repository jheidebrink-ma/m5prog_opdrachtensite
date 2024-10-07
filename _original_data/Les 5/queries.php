<?php

$page_id  = ( int ) $_GET['id'];

// MySQLi
$conn     = new mysqli($servername, $username, $password, $dbname);
$sql      = 'SELECT * FROM products WHERE id=' . $page_id;
$result   = $conn->query($sql);
$item     = $result->fetch_assoc();


// PDO
$dsn      = "mysql:host=$servername;dbname=$dbname;charset=$charset;port=$port";
$conn     = new \PDO($dsn, $username, $password);
$sql      = 'SELECT * FROM products WHERE id=' . $page_id;
$result   = $conn->query($sql);
$item     = $result->fetch();



// voorbeeld met het ophalen van alle data en dan de titel weer te geven
$conn     = new mysqli($servername, $username, $password, $dbname);
$sql      = 'SELECT * FROM products ORDER BY title';
$result   = $conn->query($sql);
while( $item = $result->fetch_assoc() ) {
    echo '<h2>'.$item['title'].'</h2>';
}


// voorbeeld van één element:
$id = ( int ) $_GET['id'];

/* create a statement */
$sql = 'SELECT * 
        FROM sdg 
        WHERE id=?
        ORDER BY title';

/* create a prepared statement */
$stmt = $mysqli->prepare($sql);

/* Bind the slug */
$stmt->bind_param('i', $id);

/* execute query */
$stmt->execute();

/* bind result variables */
$result = $stmt->get_result();

/* Nu wil ik mijn data in een array plaatsen */
$sdgItem = mysqli_fetch_assoc($result);



