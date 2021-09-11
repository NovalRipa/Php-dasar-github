<?php
$negara = array(
    array('Jawa Barat', 'Bandung', 'Garut', 'Tasikmalaya'),
    array('Jawa Timur', 'Kediri', 'Blitar', 'Malang'),
    array('Jawa Tengah', 'Semarang', 'Tegal', 'Solo' , )
  );

  
?>

<ul>
  <?php foreach ($negara as $key => $value); ?>
  <li>kota - kota di <?= $value[0] ?> adalah <?= $value [1]. 
  ', ' .$value[2]. ', ' .$value[3] ?></li>

</ul>