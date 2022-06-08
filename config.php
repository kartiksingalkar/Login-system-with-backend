<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("246358757971-79f025g5qk1agsig74tg7c35ss0g36ap.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Login");
$gClient->setRedirectUri("https://datastudio.google.com/reporting/48b6f676-a1b8-41bc-8771-7b1e1b38bfae");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>