<?php
if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}
else {
    require('model\login.php');
}  
    require('.\view\profil.php');
}
?>
