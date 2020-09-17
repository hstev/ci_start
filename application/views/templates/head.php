<!doctype html>
<html lang="es">
  <head>
    <base href="<?= base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!--Social media-->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="node_modules/jquery-confirm/dist/jquery-confirm.min.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"/>
    <link rel="stylesheet" href="node_modules/glightbox/dist/css/glightbox.css">
    <link rel="stylesheet" href="assets/css/main/main.css?no_cache=<?= rand(1,10); ?>">
    <?php
      if(isset($styles) && count($styles) > 0)
      {
        foreach ($styles as $style)
        {
          echo '<link rel="stylesheet" type="text/css" href="'.$style.'?no_cache='.rand(1,10).'">';
        }
      }
    ?>
    <link rel="shortcut icon" href="assets/img/main/favicon.png">
    <title><?= APP_NAME; ?> <?= (isset($tab_name))? "| ".$tab_name : ""; ?></title>
  </head>
  <body>