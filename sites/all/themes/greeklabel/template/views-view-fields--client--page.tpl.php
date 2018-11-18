<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */



 ?>

			
		
<?php
    $node = node_load($row->nid);
    $field_name = "field_img_client";
	
    $field = field_get_items('node', $node, $field_name);
	
    $output = field_view_value('node', $node, $field_name, $field);
	
	// print_r ($output['#item']);
	$count_img = count($output['#item']);
	
	

	// echo ($output['#item'][1]['uri'])
?>


<section id="sec-6" class="fullheight fullheight--bg--grey text-center">
	<div class="container ">
		<div class="row">
			<div class="heading_top">
				<h1>Client</h1>
			</div>
			<div class="clients-logo col-md-offsaet-1">
			<?php for($x=0; $x < $count_img; $x++){ ?>
				<div class="col-md-2 logo">
					<img src="<?php echo file_create_url($output['#item'][$x]['uri']);?>" class="img-responsive"/>
				</div>
			<?php }?>
			</div>
			
			
			<a class="nxtbtn bg--pink nxtbtn--border-white nxtbtn--shadow" href="#sec-7"><i class="fas fa-angle-down"></i></a>
			
		</div>
	</div>
</section>


