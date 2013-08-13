<?php


$user_title = $_POST['newtitle'];//store the title that the user typed in the form
$user_id = $_POST['newid'];//store the id 
$user_date = $_POST['newdate'];//store the date that the user typed in the form
$user_breed = $_POST['newbreed'];//store the breed that the user typed in the form
$user_bod = $_POST['newbod'];//store the bod that the user typed in the form
$user_pub =$_POST['newpub'];//store the pub that the user typed in the form



$fileDir = "xml/";//make a var that refers to the path to the xml

$doc = new DOMdocument();//create a  blank document

$root = $doc -> createElement ('article');//create the 'article' root element that goes in the xml doc.

$doc  -> appendChild ($root);//attach the article tag as the root of the XML doc




$title = $doc -> createElement('title');//to add a child element for title, that  goes in the xml doc

$root -> appendChild($title);//attach that element as a child of the title tag

$ttext = $doc -> createTextNode($user_title);//create a text node to contain what the user typed as their title

$title -> appendChild($ttext);//attach that text node as a child of the title tag









$bod = $doc -> createElement('bod');//to add a child element for bod, that  goes in the xml doc

$root -> appendChild($bod);//attach that element as a child of the bod tag

$btext = $doc -> createTextNode($user_bod);//create a text node to contain what the user typed as their body


$bod -> appendChild($btext);//attach that text node as a child of the bod tag




$pub = $doc -> createElement('pub');//to add a child element for pub, that  goes in the xml doc

$root -> appendChild($pub);//attach that element as a child of the pub tag

$ptext = $doc -> createTextNode($user_pub);//create a text node to contain what the user typed as their pub


$pub -> appendChild($ptext);//attach that text node as a child of the pub tag







$date = $doc -> createElement('date');//to add a child element for date, that  goes in the xml doc

$root -> appendChild($date);//attach that element as a child of the date tag

$dtext = $doc -> createTextNode($user_date);//create a text node to contain what the user typed as their date


$date -> appendChild($dtext);//attach that text node as a child of the date tag




$breed = $doc -> createElement('breed');//to add a child element for breed, that  goes in the xml doc

$root -> appendChild($breed);//attach that element as a child of the breed tag

$bbtext = $doc -> createTextNode($user_breed);//create a text node to contain what the user typed as their breed


$breed -> appendChild($bbtext);//attach that text node as a child of the breed tag





$id = date('YmdHis');//when user submits it puts a time stamp on the name of the file

$root -> setAttribute ('id',$id);//use the time stamp as the id attribute of the article tag

$filename = $fileDir.'article'.$id.'.xml';//contains a filename for the doc






$doc->save($filename);//save the doc right in the xml folder

header("location:view_articles.php");//redirects the user to the view_articles page

?>