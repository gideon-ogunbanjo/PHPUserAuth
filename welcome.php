<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<button>
<a href="logout.php">Logout</a>
</button>