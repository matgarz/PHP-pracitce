<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name List App</title>
</head>
<body>
    <h1>Name List Application</h1>
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="Enter a name" required>
        <button type="submit" name="submit">Add Name</button>
    </form>

    <?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Check if the session array exists
        if (!isset($_SESSION['names'])) {
            session_start();
            $_SESSION['names'] = [];
        }

        // Append the new name to the session array
        array_push($_SESSION['names'], $_POST['name']);

        // Display the names
        echo "<h2>Names List:</h2>";
        echo "<ul>";
        foreach ($_SESSION['names'] as $name) {
            echo "<li>" . htmlspecialchars($name) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
