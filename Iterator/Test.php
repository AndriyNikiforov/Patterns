<?php

include "Book.php";
include "BookList.php";
include "BookListIterator.php";
include "BookListReverseIterator.php";

writeln('BEGIN TESTING ITERATOR PATTERN');
writeln('');

$firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
$secondBook = new Book('PHP Bible', 'Converse and Park');
$thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

$books = new BookList();
$books->addBook($firstBook);
$books->addBook($secondBook);
$books->addBook($thirdBook);

writeln('Testing the Iterator');

$booksIterator = new BookListIterator($books);

while ($booksIterator->hasNextBook()) {
    $book = $booksIterator->getNextBook();
    writeln('getting next book with iterator :');
    writeln($book->getAuthorAndTitle());
    writeln('');
}

$book = $booksIterator->getCurrentBook();
writeln('getting current book with iterator :');
writeln($book->getAuthorAndTitle());
writeln('');

writeln('Testing the Reverse Iterator');

$booksReverseIterator = new BookListReverseIterator($books);

while ($booksReverseIterator->hasNextBook()) {
    $book = $booksReverseIterator->getNextBook();
    writeln('getting next book with reverse iterator :');
    writeln($book->getAuthorAndTitle());
    writeln('');
}

$book = $booksReverseIterator->getCurrentBook();
writeln('getting current book with reverse iterator :');
writeln($book->getAuthorAndTitle());
writeln('');

writeln('END TESTING ITERATOR PATTERN');

function writeln($line_in) {
    echo $line_in.PHP_EOL;
}
