<?php 
echo "INSERT INTO `usuarios`(`usu_id`, `usu_login`, `usu_clave`, `usu_nombre`, `usu_email`) VALUES ('2','usu','123','usu','usu@gmail.com');";
echo "INSERT INTO `usuarios`(`usu_id`, `usu_login`, `usu_clave`, `usu_nombre`, `usu_email`) VALUES ('2','usu2','qwe','usu2','usu2@gmail.com');";
echo "INSERT INTO `usuarios`(`usu_id`, `usu_login`, `usu_clave`, `usu_nombre`, `usu_email`) VALUES ('2','usu3','bmn','usu3','usu3@gmail.com');";
?>
<?php
echo"SELECT * FROM `productos` WHERE `prd_precio`>1000 && `prd_precio`<3000; ";
?>
<?php
echo"UPDATE `productos` SET `prd_precio` = '100' WHERE `productos`.`prd_id` = 12;";
?>
<?php
echo"DELETE FROM `usuarios` WHERE usu_id=3;";
?>