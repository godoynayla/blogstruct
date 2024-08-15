<?php include 'includes/header.php'; ?>
<main>
    <h2>Latest Posts</h2>
    <?php
    include 'db.php';
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3><a href='posts/single.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h3>";
            echo "<p>" . substr($row['content'], 0, 150) . "...</p>";
            echo "<a href='posts/single.php?id=" . $row['id'] . "'>Read More</a>";
            echo "</div>";
        }
    } else {
        echo "No posts found.";
    }
    ?>
</main>
<?php include 'includes/footer.php'; ?>