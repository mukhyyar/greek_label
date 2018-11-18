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
    $field_name = "field_image_services";
	
    $field = field_get_items('node', $node, $field_name);
	
    $output = field_view_value('node', $node, $field_name, $field);
	
	// print_r ($output['#item']);
	// echo count($output['#item']);
	
	

	// echo ($output['#item'][1]['uri'])
?>
			
<section id="sec-5" class="fullheight fullheight--bg--white text-center">
	<div class="container v_align">
		<div class="row">
			<div class="heading_top">
				<h1><?php echo $row->_field_data['nid']['entity']->title;?></h1>
			</div>
			<div class="circlecontainer col-md-2 col-md-offset-1">
				<div class="bg--pink circlecontainer--circle">
					<img src="<?php echo file_create_url($output['#item'][0]['uri']);?>" class="img-responsive"/>
				</div>
				<p><?php echo $output['#item'][0]['title']; ?></p>
			</div>
			<div class="col-md-2 circlecontainer">
				<div class="bg--pink circlecontainer--circle">
					<img src="<?php echo file_create_url($output['#item'][1]['uri']);?>" class="img-responsive"/>
				</div>
				<p><?php echo $output['#item'][1]['title']; ?></p>
			</div>
			<div class="col-md-2 circlecontainer">
				<div class="bg--pink circlecontainer--circle">
					<img src="<?php echo file_create_url($output['#item'][2]['uri']);?>" class="img-responsive"/>
				</div>
				<p><?php echo $output['#item'][2]['title']; ?></p>
			</div>
			<div class="col-md-2 circlecontainer">
				<div class="bg--pink circlecontainer--circle">
					<img src="<?php echo file_create_url($output['#item'][3]['uri']);?>" class="img-responsive"/>
				</div>
				<p><?php echo $output['#item'][3]['title']; ?></p>
			</div>
			
			<a class="nxtbtn nxtbtn--border-black" href="#sec-6"><i class="fas fa-angle-down"></i></a>
			
		</div>
	</div>
</section>
