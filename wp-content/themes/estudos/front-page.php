<h1>Pagina da home</h1>

<?php
// lib js typed.js
$args = [
    'post_type' => 'banners',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'ID desc'
];
$query = new WP_Query($args);
if ($query->have_posts()) {
    $query->the_post();
}

?>