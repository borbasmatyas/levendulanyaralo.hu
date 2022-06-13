<article>
  
  <h1>Képek</h1>

<?php
$i=1;
$max=18;

while($i <= $max) {
  echo <<<HTML
    <img src="/images/kep_{$i}.jpg" width="100%">>;
  HTML;
  $i++;
}
  ?>

</article>