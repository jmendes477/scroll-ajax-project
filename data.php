<?php
include 'conn.php';

$sql = "SELECT name FROM users LIMIT 5"; 
$result = mysqli_query($link, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box'>" . htmlspecialchars($row['name']) . "</div>";
    }
} else {
    echo "No data found.";
}

mysqli_close($link);
?>
