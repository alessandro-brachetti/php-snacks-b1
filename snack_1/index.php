<?php
  $giornata = [
    [
      'squadra_casa' => 'Olimpia Milano',
      'punti_casa' => 55,
      'squadra_ospiti' => 'Cantu',
      'punti_ospiti' => 66,
    ],
    [
      'squadra_casa' => 'Siena',
      'punti_casa' => 44,
      'squadra_ospiti' => 'Bologna',
      'punti_ospiti' => 77,
    ],
    [
      'squadra_casa' => 'Pesaro',
      'punti_casa' => 88,
      'squadra_ospiti' => 'Roma',
      'punti_ospiti' => 87,
    ],
  ];

  var_dump($giornata);

  for ($i=0; $i < count($giornata); $i++) {
    ?>

    <div class="">
      <?php echo $giornata[$i]['squadra_casa']; ?> -
      <?php echo $giornata[$i]['squadra_ospiti']; ?> |
      <?php echo $giornata[$i]['punti_casa']; ?> -
      <?php echo $giornata[$i]['punti_ospiti']; ?> 
    </div>

  <?php
  }
 ?>
