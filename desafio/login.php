<?php include("header.php");?>

<?php
$email = $_POST["email"];
$password = $_POST["password"];
?>

<div class="result">
	<p>E-MAIL:<?php echo " $email"; ?></p>
	<p>PASSWORD:<?php echo " $password"; ?></p>
</div>

<?php include("footer.php");?>
