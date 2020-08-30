<?php
  session_start();

  $row = 1;
  if (($handle = fopen("test.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $num = count($data);
          echo "<p> $num fields in line $row: <br /></p>\n";
          $row++;
          for ($c=0; $c < $num; $c++) {
              echo $data[$c] . "<br />\n";
          }
      }
      fclose($handle);
  }

$letterObject = [
  'Action' => [
    'title' => 'Avengers: Endgame',
    'rating' => 'MA',
    'description' => '<p>With the help of remaining allies ... ',
    'screenings' => [
      'WED' => '9pm',
      'THU' => '9pm',
      ...
    ]
  ],
  'RomCom' => [ ... ],
  'Animate' => [ ... ],
  'ArtHouse' => [ ... ],
];


$fp = fopen('http://titan.csit.rmit.edu.au/~e54061/wp/letters-home.txt','r');
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
    while ( $cells = fgetcsv($fp, 0, "\t") ) {
      for ($x=1; $x<count($cells); $x++)
        $pumps[$cells[0]][$headings[$x]]=$cells[$x];
    }
  }
  fclose($fp);



  <?
  function TestHtml() { 
  # PUT HERE YOU PHP CODE
  ?>
  <body>
  <header id="nav" class="sticky-nav">
     <nav class="container">
        <ul role="list" class="nav-grid-2 w-list-unstyled">
           <li id="home-nav"><a href="#" class="nav-logo-link w-inline-block"><img src='../a2/media/nav-logo.png'  sizes="(max-width: 479px) 100vw, (max-width: 767px) 37vw, 282.640625px" alt="" class="nav-logo"></a></li>
           <li><a href="postcards.php" class="nav-link">Letters & Postcards</a></li>
           <li><a href="descriptions.php" class="nav-link">Description</a></li>
           <li><a href="index.php" class="nav-link">Home</a></li>
           <li id="main-nav" class="nav-link"></li>
        </ul>
     </nav>
  </header>
  
  <? } ?>

  









?>