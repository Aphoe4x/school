<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: pages-login.php");
  exit();
}
?>


<?php include 'inc/header.php'; ?>
<?php include 'inc/footer.php'; ?>