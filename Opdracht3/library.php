<?php
$books=[["author"=>"J.K. Rowling", "title"=>"Harry Potter", "ISBN"=>"9789076174082", "publisher"=>"Bloomsbury", "date"=>"26-6-1997", "pages"=>"223"],
        ["author"=>"Stephen King", "title"=>"the Shining", "ISBN"=>"9780307743657", "publisher"=>"Doubleday", "date"=>"28-1-1977", "pages"=>"505"],
        ["author"=>"Dan Brown", "title"=>"Inferno", "ISBN"=>"9789021020884", "publisher"=>"Doubleday", "date"=>"14-5-2013", "pages"=>"642"]];
$authors=["J.K. Rowling", "Stephen King", "Dan Brown"];

var_dump($books);
function addBook(){
    global $authors, $books;
    print_r("Authors:\r\n");
    foreach ($authors as $author){
        print_r($author."\r\n");
    }
    while(true){
    $author = readline("Select the author you wish to add a book to:");
        if (in_array($author, $authors)){
            $book = readline("Please name the book you would like to add:");
            $ISBN = readline("Please enter the ISBN of the book:");
            $publisher = readline("Please enter the publisher of the book:");
            $date = readline("Please enter the publish date of the book:");
            $ISBN = readline("Please enter the ISBN of the book:");
            $pages = readline("Please enter the number of pages of the book:");
            //TODO: add data to list
            break;
        }
        else{
            print_r("Please select an author from the list \r\n");
        }
    }
}

function removeBook(){
    global $books;

}



// addbook();



