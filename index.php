<?php
if(isset($_SESSION['login'])){
	?><script>location.href='main.php';</script><?php
}else{
	?><script>location.href='login.php';</script><?php
}	
?>