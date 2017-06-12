<?php include('header.php');?>
<?php
$json= file_get_contents('nada.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>

 <?php
 $csv = array_map("str_getcsv", file('proyectos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
<div class="container">
      <div class="row">
        <?php for($a = 0; $a < $total = count($csv); $a++){?>
            <div class="col-md-6">
                <img src="<?php echo($csv[$a]["image"]);?>" class="img-thumbnail" alt="Cinque Terre" height="236">
                <h3><?php echo($csv[$a]["titulo"]);?></h3>
                <p><?php echo ($csv[$a]['texto']);?></p>
                <a class="btn btn-default read-more" href="<?php echo $csv[$a]['vinculo'];?>">Ir a la página<span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
            </div>
            <?php };?>
      </div>
</div>
<?php include('footer.php');?>
