<?php

$standaardString = 'hello world';

$naam = 'Mario';
$opmaakText = "Welkom op je account pagina $mario";

$emailAliassen = ['hello@world.nl', 'luigi@world.nl', 'mario@world.nl'];

for ($i=0; $i < sizeof($emailAliassen); $i++) { 
    # code...
    $valueAtI = $emailAliassen[$i];
}

class BookDataBase
{

}
class Book {
    public int $id;
    public string $title;
    public string $author;

}

class BookViewModel {
    public string $title;
    public string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }
}

require_once 'Book.php';
require_once 'BookViewModel.php';

class BookController {
    public function showBook() {
        // Create the data model
        $db = new BookDatabase();
        $book = db->GetBookById(1);

        // Pass only relevant data to the ViewModel
        $viewModel = new BookViewModel($book->title, $book->author);


        // Render the view
        include 'BookView.php';
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Detail</title>
</head>
<body>
    <h1>Book Detail</h1>
    <h4><?= $viewModel->title ?></h4>
    <p><?= $viewModel->author ?></p>
</body>
</html>