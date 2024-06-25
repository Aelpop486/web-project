<?php
session_start();
require_once('../../classes.php');
$user = unserialize($_SESSION["user"]);

$errors = [];
if (empty($_REQUEST['title'])) $errors['title'] = 'The title is required';
if (empty($_REQUEST['content'])) $errors['content'] = 'content  is required';




$titel = htmlspecialchars(trim($_REQUEST['title']));
$content = htmlspecialchars(trim($_REQUEST['content']));

if (empty($errors)) {

  if ($_FILES["image"]["name"]) {
        $imageName =  "../../images/posts/" . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $imageName);
    } else {
        $imageName = null;
    }

    $user->postes($titel, $content, $imageStor, $user->id);

    header('location:../../success_page.php?msg=done');
} else {
    header('location:../../error_page.php?msg=required_fields');
    $_SESSION['errors'] = $errors;
}
?>