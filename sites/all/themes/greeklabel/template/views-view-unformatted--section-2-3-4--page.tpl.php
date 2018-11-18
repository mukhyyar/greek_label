<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row):?>

<section id="sec-<?php echo $id+2;?>" class="fullheight fullheight--bg--grey">
    <?php print $row; ?>
</section>
<?php endforeach; ?>
