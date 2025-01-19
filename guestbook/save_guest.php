<?php
if ($_SERVER['REQUEST METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);
    if (!empty($name) && !empty($message)) {
        file_put_contents('guests.txt', $name . '|' . $message . PHP_EOL, FILE_APPEND);
    }
}
header('Location: index.php');
exit;
?>