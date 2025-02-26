<?php
try {
    $db = new PDO("sqlite:database.db");
    echo "SQLite connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
