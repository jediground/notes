<?php

   $doc = new DOMDocument();
   $doc->load( 'index.XML' );

 $root = $doc -> documentElement;

 $books = $doc->getElementsByTagName( "php100" );

 foreach( $books as $book ){
	 if($book->getAttribute('id')==2){
  echo $book->getAttribute('id')."-";
  echo $book->getElementsByTagName( "index" )->item(0)->nodeValue='test test';
  echo "<br>";
	 }

  if($book->getAttribute('id')==1){
	 $root->removeChild($book);
    }
  }

  $doc->save('index.XML');

?>
