<?php

/**
 * header Block Template.
 *
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True during AJAX preview.
 * @param    (int|string) $post_id    The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockheader-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockheader';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title           = get_field('title') ?: 'title';
$description             = get_field('description') ?: 'description';
$background            = get_field('background') ?: 295;
$link_text_color            = get_field('link_text_color') ?: '#000000';
$link_background_color            = get_field('link_background_color') ?: '#000000';
$link = get_field('link') ?: 'link';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="blockheader-blockquote">
        <div>
            <span class="blockheader_title"><?php echo $title; ?></span>
        </div>
        <div>
            <span class="blockheader_description"><?php echo $description; ?></span>
        </div>
        <div>
            <a style='color: <?php "$link_text_color" ?>; background_color:<?php "$link_background_color" ?>' href="<?php echo $link['url'] ?>" target="<?php $link['target'] ?: '_blank' ?>"><span class="blockheader_link"><?php echo $link['title']; ?></span></a>
        </div>
    </blockquote>
    <div class="blockheader-image">
        <img src="<?php echo $background?>" alt="">
        <!-- <?php echo wp_get_attachment_image($background, 'full'); ?> -->
    </div>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
    </style>
</div>