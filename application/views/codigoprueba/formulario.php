<?= 
form_open("/codigoprueba/recibirdatos");
 ?>
<?php
$nombre = array(
    'name' => 'nombre',
    'placeholder' => 'Escribe tu nombre'
);
$videos = array(
    'name' => 'videos',
    'placeholder' => 'Cantidad videos del curso'
);
$comentarios = array(
    'name' => 'comentarios',
    'placeholder' => 'observacion '
);

?>
<?= form_label('Nombre: ', 'nombre');?>
<?= form_input($nombre);?>

<br/><br/>

<?= form_label('Videos: ', 'videos');?>
<?= form_input($videos);?>

<br/><br/>

<?= form_label('Comentarios: ', 'comentarios');?>
<?= form_input($comentarios);?>

<br/><br/>

<?= 

form_submit('', 'Subir curso');

form_close();
?>
</body>
</html>