<h3><?=$header ?></h3>

<?

  foreach($model as $data):

?>


  <div> <?=$data->username. " == ".$data->email ?> </div>


<?
  endforeach;
?>