<?php
// ini_set('display_errors', 0);
// CSS
$sCss = '';
$i = 0;
foreach (glob('assets/css/*') as $filename) {
  // echo '<div>'.$filename.'</div>';
  if (strpos($filename, 'app.css')) {
    echo 'skip' . $filename;
    continue;
  }
  // echo '<div>'.$filename.'</div>';
  $sCss = $sCss . trim(file_get_contents($filename));
  // echo '<div>'.$sCss .'</div>';
  $i++;
  echo $i;
}

//echo $sData;
// file_put_contents(__DIR__.'/css/app.css', '');
file_put_contents('assets/css/app.css', $sCss);

exit();
