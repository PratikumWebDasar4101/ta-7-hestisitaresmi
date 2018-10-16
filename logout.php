<?php
 session_start();

 unset($_SESSION['nim']);

 header("Location:form.php");


?>