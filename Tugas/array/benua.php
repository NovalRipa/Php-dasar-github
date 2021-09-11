<?php
echo "<b><u> Negara - Negara </b></u>";

$negara = array (
  array('Benua Asia' , 'Indonesia' , 'Jepang' , 'Korea Selatan'),
  array('Benua Afrika' , 'Nigeria' , 'Kenya' ,'Maroko'),
  array('Benua Australia' , 'Australia' , 'Tasmania' , 'Victoria'),
  array('Benua Eropa' , 'Jerman' , 'Italia' , 'Swiss' ),
);

$kota1 = array (
  array('Indoesia' , 'Bandung' , 'jakarta' , 'Solo' , 'Kediri' , 'Semarang'),
  array('Jepang' , 'Kyoto' , ' Tokyo' , ' Osaka', 'Nagasaki' , 'Hirosima'),
  array('Korea Selatan' , 'Soul' , ' Busan' , ' Daegu,', 'Daejon' , 'Gwangju'),
);

$kota2 = array (
  array('Nigeria','Lagos' ,'Abuja' , 'Ibadan', 'Kaduna' , 'Jos'),
  array('Kenya', 'Kisumu' , 'Garisa' , 'Nyeri' , 'Kisumu' , 'Lamu'),
  array('Maroko', 'Fez' , 'Rabat' ,'Tangier' , ' Meknes','Oujda'),
);

$kota3 = array (
  array('Australia','Cairns','Darwin','Canberra','Sydney','Perth'),
  array('Tasmania','Taroona','Hagley','Hobart','Burnie','Canberra'),
  array('Victoria','Ballarat','Bendigo','Geelong','Kinglake'),
);

$kota4 = array (
  array('Jerman','Koln','Hamburng','Berlin','Bonn','Keil'),
  array('Italia',' Roma','Milan','Napoli','Verona','Bologna'),
  array('Swiss','Bern','Basel','Jenewa','Chur','Thun'),
);

?>

<ul>
  <?php foreach ($negara as $key => $value): ?>
    <li><? $value[0] ?> : <?= $value[1].
    ', ' .$value[2]. ', ' .$value[3] ?></li>
    <?php endforeach ?>
</ul>

<br>

<ul>
  <?php echo "<br> Benua Asia</br>";?>
  <li><? 'Kota di ' $value[0] ?> : <?= $value[1].
    ', ' .$value[2]. ', ' .$value[3]. ', ' .$value[4]. ', ' .$value[5]?></li>
    <?php endforeach ?>
</ul>

<br>

<ul>
  <?php echo "<br> Benua Afrika</br>";?>
  <li><? 'Kota di ' $value[0] ?> : <?= $value[1].
    ', ' .$value[2]. ', ' .$value[3]. ', ' .$value[4]. ', ' .$value[5]?></li>
    <?php endforeach ?>
</ul>

<br>

<ul>
  <?php echo "<br> Benua Australia</br>";?>
  <li><? 'Kota di ' $value[0] ?> : <?= $value[1].
    ', ' .$value[2]. ', ' .$value[3]. ', ' .$value[4]. ', ' .$value[5]?></li>
    <?php endforeach ?>
</ul>

<br>

<ul>
  <?php echo "<br> Benua Eropa</br>";?>
  <li><? 'Kota di ' $value[0] ?> : <?= $value[1].
    ', ' .$value[2]. ', ' .$value[3] ', ' .$value[4]', ' .$value[5]?></li>
    <?php endforeach ?>
</ul>