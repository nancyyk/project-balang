<?php
// Clear session/cookies
session_start();
session_destroy();

// Redirect to landing page
header("Location: index.php?page=landing");
exit();
?>
