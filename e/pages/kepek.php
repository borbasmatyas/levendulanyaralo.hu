<article>
  
  <h1>Képek</h1>

<?php
$i=1;
$max=18;

while($i <= $max) {
  echo <<<HTML
    <img src="/images/kep_{$i}.jpg" width="70%" style="margin:25px auto 25px auto;">;
  HTML;
  $i++;
}
  ?>

</article>