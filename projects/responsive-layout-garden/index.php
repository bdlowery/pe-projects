<?php 
include('functions.php');
showErrors();



include('header.php');

$json = file_get_contents('home.json');
$page = json_decode($json, true);
$count = 0;

foreach($page['sections'] as $section) { 
  $id = $section['type'] . '-' . $count;
  $name = $section['name'];
?>

  <section class="<?=$name?>" id="<?=$id?>">
    <div class="inner-column">

      <?php include("templates/modules/$section[type].php"); ?>

    </div>
  </section>
  
<?php $count++ ?>

<?php } ?>



<?php 

// include('templates/modules/module-2.php');
// include('templates/modules/module-3.php');




include('footer.php');