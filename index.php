<?php

require_once ('e/config/config.php');
#require_once ('e/modules/mysql/mysql.php');

$msg=false;
$err=false;
$log=false;

$pages_dir = './e/pages/';

$_SERVER['REQUEST_URI_PATH'] = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);
$segments = array_slice (explode('/', trim($_SERVER['REQUEST_URI_PATH'], '/')), URI_IGNORE);
$page['name'] = !empty( $segments[0] ) ? $segments[0] : 'home';
$page['file'] = $pages_dir . $page['name'] . '.php';


if( !file_exists($page['file']) ):
  header('Location: /hiba/404');
  exit;
endif;


?>
<!doctype html>
<html class="no-js" lang="hu">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/styles/vendor/normalize/normalize.css">
    <link rel="stylesheet" href="/styles/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/vendor/reset/reset.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/styles/master.css?<?php echo date('U'); ?>">
    <link rel="stylesheet" href="/styles/<?php echo $page['name']; ?>.css?<?php echo date('U'); ?>">

    <title><?php echo $title; ?></title>
    <meta name="description" content="Weboldal">

  </head>

  <body>
      <main class="main-center rounded-main">
        <?php
          if($allow) {
            include $page['file'];
          }
        ?>
      </main>
      <aside>
        <nav>
          <ul>
            <li><a href="/">Főoldal</li>
            <li><a href="/kepek">Képek</li>
            <li><a href="/foglalas">Szállás foglalás</li>
            <li><a href="/terkep">Térkép</li>
          </ul>
        </nav>
      </aside>
      <footer>
      </footer>

    <!-- Scriptek -->  
      <script src="scripts/vendor/jquery/jquery-3.5.1.min.js"></script>
      <script src="scripts/vendor/bootstrap/bootstrap.min.js"></script>
      <script src="scripts/vendor/modernizr/modernizr-custom.js"></script>

      <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Scriptek (vége) -->

  </body>
</html>
<?php

?>