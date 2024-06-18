<?php /* Template Name: Confirm */
get_header();
?>

<div class="top__contact top__contact--confirm">
  <div class="top__contact-container">
    <div class="top__section-title">
      <h2 class="top__title-en top__title-en--peach">CONTACT</h2>
      <h2 class="top__title-jp">お問い合わせ</h2>
    </div>
    <?php echo do_shortcode('[mwform_formkey key="9"]'); ?>
  </div>
</div>

<?php get_footer();?>