
<h2>Lista de Cursos</h2>

<ul class = col-6>
    <?php $cont = 0; foreach($cursos->result() as $curso) { $cont++; ?>
        <li><?= $curso->nombreCurso; ?></li>
        <li><?= $curso->videosCurso; ?></li>
      
    <?php } ?>
</ul>

</body>
</html>