<?php
  $classe = [
    [
      'Nome' => 'Pippo',
      'Cognome' => 'Blu',
      'voti' => [
        6, 7, 9, 8
      ]
    ],
    [
      'Nome' => 'Pluto',
      'Cognome' => 'Rosso',
      'voti' => [
        5, 7, 4, 8
      ]
    ],
    [
      'Nome' => 'Paperino',
      'Cognome' => 'Verde',
      'voti' => [
        10, 9, 9, 8
      ]
    ]
  ];
  var_dump($classe);

  for ($i=0; $i < count($classe) ; $i++) {
    // var_dump(count($classe[$i]['voti']));
    ?>
    <div class="">
      <?php echo $classe[$i]['Nome']; ?>
      <?php echo $classe[$i]['Cognome']; ?>
      <?php echo array_sum($classe[$i]['voti'])/count($classe[$i]['voti']); ?>
    </div>

  <?php
  }
 ?>
