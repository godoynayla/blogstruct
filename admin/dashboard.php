<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include '../includes/header.php'; ?>
<main>
    <h2>Admin Dashboard</h2>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <a href="create_post.php">Create New Post</a>
    <a href="logout.php">Logout</a>
</main>
<?php include '../includes/footer.php'; ?>