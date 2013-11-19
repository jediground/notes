<?php

 /*   $doc = new DOMDocument();
            $doc->load( 'books.XML' );


 $books = $doc->getElementsByTagName( "php100" );
 foreach( $books as $book ){
  echo $book->getElementsByTagName( "publisher" )->item(0)->nodeValue;
  }

$title=$doc->getElementsByTagName("php100");

foreach ($title as $note)
{
echo $note->nodeValue;
echo "<br />";
}

*/


   $doc= new DOMDocument();
   $doc->load( 'books.XML' );
   $title=$doc->getElementsByTagName( "php100" );
   foreach ($title as $note)
{
    $au[]=$note->nodeValue;
}


  print_r($au)
?>
