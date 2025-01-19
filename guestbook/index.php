<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class"container>
    <h1>Guestbook</h1>
    <form action="save_guest.php" method="POST>
    <input type="text" name="name" placeholder="Your name" required>
    <textarea name="message" placeholder="Your message" required></textarea>
    <button type="submit">Submit</button>
</form>
<h2>Message:</h2>
<div class="message">
    <?php
    $guest = file_exists("guest.txt") ? file("guest.txt") : [];
    if (!empty($guests)) {
        foreach ($guest as $guest) {
            list($name, $message) = explode("|", $guest);
            echo "<p?><strong>" . htmlspecialchars($name) . ":</strong> " . htmlspecialchars($message) . "</p>";
        }
    } else {
        echo "<p>No message yet.</p>";
    }
    ?>
    </div>
</div>
    
</body>
</html>