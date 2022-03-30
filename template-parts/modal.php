<?php

/**
 * Template part for displaying modal window
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

$form = get_field('form_shortcode', 'options');
?>

<div class="modal__window" aria-hidden="true" data-modal-window="#hero-button">
    <div class="modal__overlay"></div>
    <div class="modal__box" role="dialog">
        <button type="button" class="button__modal-close">
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4691 12.0549L25.524 0L26.9382 1.41421L14.8833 13.4691L26.9382 25.524L25.524 26.9382L13.4691 14.8833L1.41421 26.9382L0 25.524L12.0549 13.4691L0 1.41421L1.41421 0L13.4691 12.0549Z" fill="black" />
            </svg>
        </button>

        <div class="inner">
            <?php echo do_shortcode($form); ?>
        </div>
    </div>
</div>