<?php
require_once "config.php";
$sql="SELECT COUNT(*) as c FROM categorias";
$query=mysqli_query($con,$sql);
if (!$query){
    die("Error de consulta: ". mysqli_errno($con)."<br>");
}
$cant= mysqli_fetch_assoc($query);
if(isset($_GET['pag'])){
    $pag=intval($_GET['pag']);
    if($pag <= ceil(intval($cant["c"]) / 2)){        $in=($pag*2)-2;
        $sql="SELECT * FROM categorias LIMIT $in,2";
        $query=mysqli_query($con, $sql);
        if(!$query){
            echo "Error de consulta: ". mysqli_errno($con);
        }
        $cats=mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
}else{
    $sql="SELECT * FROM categorias LIMIT 0,2";
    $query=mysqli_query($con,$sql);
    if(!$query){
        echo "Error de consulta: ". mysqli_errno($con);
    }
    $cats=mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>
<h1>Listado de categorias</h1>
<br>
<a href="crear.php"><button>Nueva categorias</button></a>
<br>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Accion</td>
    </tr>
    <?php foreach($cats as $cat ){?>
            <tr>
                <td><?php echo $cat['cat_id'];?></td>
                <td><?php echo $cat['cat_nombre'];?></td>
                <td><a href="eliminar.php?id=<?php echo $cat['cat_id'];?>">Eliminar</a></td>
            </tr>
    <?php }?>
</table>
<p>
    <?php for($i=1; $i <= ceil(intval($cant["c"])/2); $i++){?>
        <a href="lista.php?pag=<?php echo $i; ?>"><button><?php echo $i;?></button></a>
    <?php }?>
</p>

