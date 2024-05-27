<?php
define("BASE_URL","/portafolio/view/");
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"]))
?>
<?php
{else {
    header("Location:".conectar::ruta()."view/404.php");
}}
?>