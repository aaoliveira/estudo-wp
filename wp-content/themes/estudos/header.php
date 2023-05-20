<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head();  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/' . $estiloPagina; ?>">
</head>
<body <?php body_class(); ?>>

<?php
the_custom_logo(); 
wp_nav_menu([
    'menu' => 'menu-navegacao',
    'menu-id' => 'menu-principal'
]); 
?>
