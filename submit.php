<?php
$name = htmlspecialchars($_POST['name'] ?? 'Anonymous');
$email = htmlspecialchars($_POST['email'] ?? 'Not provided');
$message = htmlspecialchars($_POST['message']);

$entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";

file_put_contents("feedback.txt", $entry, FILE_APPEND);
header("Location: index.html");
exit;
?>
