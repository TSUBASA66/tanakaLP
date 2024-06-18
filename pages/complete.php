<?php /* Template Name: Complete */
get_header();
?>

<div class="top__contact top__contact--confirm">
  <div class="top__contact-container">
    <div class="top__section-title">
      <h2 class="top__title-en top__title-en--peach">CONTACT</h2>
      <h2 class="top__title-jp">お問い合わせ</h2>
    </div>
    <?php echo do_shortcode('[mwform_formkey key="9"]'); ?>
    <div class="top__complete-message">
      <h4>お問い合わせありがとうございました。</h4>
      <div class="top__button-container">
        <a class="top__button top__button--black" href="<?php echo get_home_url() ?>/">トップに戻る</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>