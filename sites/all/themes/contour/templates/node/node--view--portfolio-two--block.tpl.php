<?php
/**
 * @file node--view--portfolio-two--block.tpl.php
 * Contour's node template for the Portfolio block (second style).
 */
?>

<!-- PORTFOLIO ITEM for portfolio two we use class basic-->
<div class="four columns basic">
	<!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">
	<!-- project info -->
	<div class="basictitle">
		<h6 class="text-color dosis bold caps"><a href="<?php print $node_url;?>" title="Click to view project"><?php print $title; ?></a></h6>
		<h6 class="greytext smallfont caps"><?php print render($content['field_portfolio_category']); ?></h6>
	</div>
	
	<!-- prettyphoto link -->
	<div class="basicicon">
		<a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>"><i class="icon-zoom-in text-color-inverse"></i></a>
	</div>
</div>