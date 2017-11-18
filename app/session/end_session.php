<?php
session_start();

if ($_SESSION['id'])
{
    session_destroy();
    echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "../modules/login.php"
	</script>';
}
?>