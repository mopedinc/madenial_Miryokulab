<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="<?php echo get_template_directory_uri(); echo '/assets/css/style.css?' . filemtime( get_stylesheet_directory() . '/assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body class="body">
<?php wp_body_open(); ?>