<?php /* Template Name: Works Category */
get_header();
?>

<div class="page-banner">
  <img class="page-banner__image" src="<?php echo get_template_directory_uri();?>/src/img/banner-work.jpg" alt="banner image" />
  <div class="page-banner__content">
    <h1>WORKS</h1>
    <!-- <img src="<?php echo get_template_directory_uri();?>/src/img/tanaka-logo.png" alt="logo image" /> -->
  </div>
</div>

<div class="breadcrumbs breadcrumbs--work">
  <a class="breadcrumbs__text" href="<?php echo get_home_url() ?>/">ホーム</a>
  <span class="breadcrumbs__text breadcrumbs__text--arrow"></span>
  <span class="breadcrumbs__text">実績</span>
</div>

<div class="works">
  <div class="works__container">
    <div class="works__category-list" data-aos="fade-up">
      <a class="active works__category-link" href="<?php echo get_home_url() ?>/works">ALL</a>
      <?php
        $cat_all = get_terms("works_cat", "field=all&get=all");
        foreach($cat_all as $value):
      ?>
      <a class="works__category-link" href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name; ?></a>
      <?php endforeach; ?>
    </div>
    <ul class="works__list">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="works__item">
            <?php if(has_post_thumbnail()): ?>
              <div class="works__image" data-aos="fade-up">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php esc_html(get_the_post_thumbnail_caption()) ?>" />
              </div>
            <?php endif ?>
            <div class="works__content">
              <div class="margin works-detail__label-list" data-aos="fade-up">
                <div class="works-detail__label-item">
                  <span>concept</span>
                  <h4><?php the_field('concept'); ?></h4>
                </div>
                <?php
                  $cats = get_the_terms(get_the_ID(),'works_cat');
                  if(!empty($cats)):
                ?>
                  <div class="works-detail__label-item">
                    <span>category</span>
                    <?php foreach($cats as $cat): ?>
                    <h4><?php echo $cat->name ?></h4>
                    <?php endforeach ?>
                  </div>
                <?php endif ?>
              </div>
              <div class="works__detail-list" data-aos="fade-up">
                <div class="works__detail-item">
                  <label>金額</label>
                  <span><?php the_field('amount'); ?></span>
                </div>
                <div class="works__detail-item">
                  <label>業種</label>
                  <span><?php the_field('industry'); ?></span>
                </div>
              </div>
              <a class="works__button" href="<?php the_permalink(); ?>" data-aos="fade-up">MORE</a>
            </div>
          </li>
        <?php endwhile; ?>
      <?php else : echo "<p class='empty-post__message'>" . __( '投稿はありません。' ) . "</p>"; ?>
      <?php endif; ?>
    </ul>
    <div class="works__pagination" data-aos="fade-up">
      <?php wp_pagenavi(); ?>
    </div>
    <a class="works__button works__button--big" href="<?php echo get_home_url() ?>/#contact" data-aos="fade-up">お問い合わせはこちら</a>
  </div>
</div>

<?php get_footer();?>