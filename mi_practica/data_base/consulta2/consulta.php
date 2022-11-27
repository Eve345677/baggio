<?php 
echo"SELECT `Name`,`Population` FROM `city` WHERE `Population`> 1000000 && `Population`< 4000000 ORDER BY `Name`DESC;";
?>
<?php  
echo"SELECT COUNT(`Name`),`Population` FROM `city` WHERE `Population`> 1000000 && `Population`< 4000000 ORDER BY `Name`DESC;";
?>
<?php 
echo"UPDATE `city` SET `Name`='Ciudad de Lima' WHERE `Name`='Lima';";
?>
<?php 
echo"SELECT `Name`,`Population` FROM `city` WHERE `Name` LIKE '%city%';";
?>
<?php 
echo"SELECT COUNT(`ID`), `Name`, `CountryCode`, `District`, `Population` FROM `city` WHERE `CountryCode`='ARG';";
?>
<?php 
echo"INSERT INTO `city`(`ID`, `Name`, `CountryCode`, `District`, `Population`) VALUES ('','nombre','ARG','qwe','123456');";//esto pero repitilo cinco veces
?>
<?php 
echo"UPDATE `city` SET `Population`='500000' WHERE `Name`='CABA';";
?>
