<h1>Pagina destinos</h1>
<?php
   $country = get_term(['taxonomy' => 'country']);
   var_dump($country);
   exit('xxxx');

?>
<form action="" method="post">
<select name="destinos">
    <option value="">Seleciont</option>
    <?php
        $country = get_term(['taxonomy' => 'country']);
    var_dump($country);
    exit;
        foreach($country as $c):
    ?>
    <option value="<?php echo $c->name; ?>"><?php echo $c->name; ?></option>
    <?php endforeach; ?>
</select>
<button>Enviar</button>
</form>
<?php
$countrySelected = [
    ['taxonomy' => 'country', 'field' => 'name', 'terms' => $_GET['destinos']],
];
$args = ['post_type' => 'destiny_post_type', 'tax_query' => $countrySelected];
$query = new WP_Query($args);
if ($query->have_posts()) {
    while($query->have_posts()) {
        $query->the_post();
        the_post_thumbnail();
        the_title();
        the_content();
    }
}
?>