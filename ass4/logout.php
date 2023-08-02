<?php
// Start the session
session_start();

// Destroy all session data
session_destroy();

// Send a response indicating successful logout
http_response_code(200);
?>
