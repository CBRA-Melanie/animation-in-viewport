<?php
/*
 * TEMPLATE: Newsticker-Slider
*/

$class_name = 'cb-contact-teaser';

// IMPORT SETTINGS FROM GUTENBERG EDITOR
$class_name .= !empty($block['className']) ? ' ' . $block['className'] : false;
$id = !empty($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false;

// MARGINS
$margins = get_field('cb_block_margins');
$wrapper_style = 'style="';
$wrapper_style .= 'margin-top: ' . (!empty($margins['top']) ? $margins['top'] : '0') . 'px; margin-bottom: ' . (!empty($margins['bottom']) ? $margins['bottom'] : '0') . 'px;';
$wrapper_style .= '"';


// OUTPUT
?>
<section <?= $id ?> class="cb-block-wrapper cb-background--black cb-block--fullwidth <?= $class_name ?>" <?= $wrapper_style ?> >
	<div class="cb-block__inner">
		<h2><?= get_field('cb_block_title')?></h2>
		<div class="cb-contact-teaser__content">
			 <div class="cb-contact-teaser__text">
				 <?= get_field('cb_block_text')?>
			 </div>
			 <div class="cb-arrow__wrapper">
				 <svg id="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223.43 112">
					<path id="line" class="draw-arrow" stroke-linecap="round" stroke-linejoin="round" d="M0,112C28,37.33,65,0,111,0c46,0,82.33,20.33,109,61"/>
					<line id="path-right" class="draw-arrow tail-1" x1="220.2" y1="61.24" x2="223.43" y2="39.16"/>
					<line id="path-left" class="draw-arrow tail-2" x1="220.2" y1="61.24" x2="198.1" y2="58.1"/>
				</svg>
			</div>
			<?= cb_get_button(get_field('cb_block_button'));?>
		</div>
	</div>
</section>
<?php
	wp_enqueue_script('cb-contact-teaser', get_stylesheet_directory_uri() . '/cb-blocks/contact-teaser/contact-teaser.js');
 ?>
