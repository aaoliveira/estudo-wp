<?php
$estiloPagina = 'sobre.css';
require_once('header.php');

if (have_posts()) { 
    while (have_posts()) {
        the_post();
        the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
        the_title('<h2>', '</h2>');
        the_content();
    }
}

require_once('footer.php'); 
?>