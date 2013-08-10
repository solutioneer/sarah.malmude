<?php
/**
 * @file node--view--portfolio-three--block.tpl.php
 * Contour's node template for the Portfolio block (third style).
 */
?>
<!-- PORTFOLIO ITEM for portfolio 3 uses class item -->
<div class="three columns item">
	<!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">
	<!-- prettyphoto link -->
	<a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>">
	<div class="item-icon">
		<i class="icon-zoom-in"></i>
	</div>
	</a>
	<!-- item info -->
	<div class="item-info">
		<h6 class="text-color bold caps"><a href="<?php print $node_url;?>" title="Click to view project"><?php print $title; ?></a></h6>
		<h6 class="greytext smallfont caps"><?php print render($content['field_portfolio_category']); ?></h6>
	</div>
</div>