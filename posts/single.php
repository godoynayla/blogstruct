<?php include '../includes/header.php'; ?>
<?php
include '../db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['content'] . "</p>";
} else {
    echo "Post not found.";
}
?>
<?php include '../includes/footer.php'; ?>