<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_POST["name"];
    header("Location: index.html?name=" . urlencode($name));
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
