<?php
session_start();
session_destroy();
header("Location: login.php"); // Redireciona o usuário para a página de login após o logoff
exit();
?>
