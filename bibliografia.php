<?php include('header.php');?>
<?php
$json= file_get_contents('biblio.json');
$datos = json_decode($json,true);
$todos = count ($datos);
?>
    <!-- Main Content -->
<div class="container">
<div class="row">
<!--<pre><?php print_r($datos);?></pre> -->
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
  <h1 class="page-header">
Bibliografía
    </h1>
    <ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active"><a href="#apa" aria-controls="apa" role="tab" data-toggle="tab">APA</a></li>
       <li role="presentation"><a href="#mla" aria-controls="mla" role="tab" data-toggle="tab">MLA</a></li>
       <li role="presentation"><a href="#iso" aria-controls="iso" role="tab" data-toggle="tab">ISO</a></li>
     </ul>

     <div class="tab-content">
   <div role="tabpanel" class="tab-pane active" id="apa">
          <?php for($n = 0; $n < $todos; $n++){?>
     <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["title"]);?>. <?php echo($datos[$n]["pais"]);?>. <?php echo($datos[$n]["ed"]);?></p>
 <?php }; ?>
   </div>
   <div role="tabpanel" class="tab-pane" id="mla">
          <?php for($n = 0; $n < $todos; $n++){?>
     <p><?php echo($datos[$n]["autor"]);?>. <i><?php echo($datos[$n]["title"]);?>.</i> <?php echo($datos[$n]["pais"]);?>: <?php echo($datos[$n]["ed"]);?>, <?php echo($datos[$n]["year"]);?>. </p>
<?php }; ?>
   </div>
   <div role="tabpanel" class="tab-pane" id="iso">
          <?php for($n = 0; $n < $todos; $n++){?>
     <p> <font style="text-transform: uppercase;"><?php echo($datos[$n]["autor"]);?>.</font> <?php echo($datos[$n]["year"]);?>. <i><?php echo($datos[$n]["title"]);?>.</i> <?php echo($datos[$n]["pais"]);?>: <?php echo($datos[$n]["ed"]);?></p>
 <?php }; ?>
   </div>
</div>
</div>
</div>
</div>

<hr>


    <?php include('footer.php');?>
