<?

  foreach($model as $data):

?>


  <div> <?=$data->username. " == ".$data->email ?> </div>


<?
  endforeach;
?>