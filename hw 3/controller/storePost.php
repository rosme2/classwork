<?php

session_start();

$title = $_REQUEST ['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];

$errors = [];

if( empty($title) ){
   $errors['titel_error'] = "Please enter your post title!";
}

if( empty($detail) ){
    $errors['detail_error'] = "Please enter your details!";
}
else if( strlen($detail) < 5 && strlen($detail) > 20){
    $errors['detail_error']="please shorter your details!";
} 
if( empty($author) ){
    $errors ['author_error'] ="Please enter author Name!";
}

echo"<pre>";
print_r( count($errors) ) ;
echo"</pre>";

if( count($errors) > 0){
    //*REDIRECTION
    $_SESSION['old'] = $_REQUEST;
    $_SESSION['errors'] = $errors;
     header ("Location: ../index.php ");

}else{
    //*PROCEED
}