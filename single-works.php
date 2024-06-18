<?php /* Template Name: Works Detail */
get_header();
?>
<div class="page-banner page-banner--work-detail">
  <div class="page-banner page-banner--title">
    <div class="page-banner__content page-banner__content--styled">
      <h1>WORKS</h1>
    </div>
  </div>
</div>

<div class="breadcrumbs breadcrumbs--work-detail">
  <a class="breadcrumbs__text" href="<?php echo get_home_url() ?>/">ホーム</a>
  <span class="breadcrumbs__text breadcrumbs__text--arrow"></span>
  <a class="breadcrumbs__text" href="<?php echo get_home_url() ?>/works">実績</a>
  <span class="breadcrumbs__text breadcrumbs__text--arrow"></span>
  <span class="breadcrumbs__text">詳細ページタイトル</span>
</div>

<div class="works-detail">
  <div class="page-banner__content page-banner__content--styled"></div>
  <div class="works-detail__wrapper">
    <div class="works-detail__content">
    <!--- <div class="works-detail__heading" data-aos="fade-up">
        <h3>
          <?php
             /* if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
            endwhile;
            endif; */
          ?>
        </h3>
      </div> ---> 
      <?php 
        $images = get_field('slider');
        if( $images ): ?>
        <div class="works-detail__gallery" data-aos="fade-up">
          <div class="works-detail__label-list works-detail__label-list--fix" data-aos="fade-up">
            <div class="works-detail__label-item works-detail__label-item--sm">
              <span>concept</span>
              <h4><?php the_field('concept'); ?></h4>
            </div>
            <?php
              $cats = get_the_terms(get_the_ID(),'works_cat');
              if(!empty($cats)):
            ?>
              <div class="works-detail__label-item works-detail__label-item--sm">
                <span>category</span>
                <?php foreach($cats as $cat): ?>
                <h4><?php echo $cat->name ?></h4>
                <?php endforeach ?>
              </div>
            <?php endif ?>
          </div>
          <div class="js-gallery works-detail__gallery-main">
            <?php foreach( $images as $image ): ?>
              <div class="works-detail__gallery-item">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            <?php endforeach; ?>
          </div>
          <div class="js-gallery-nav works-detail__gallery-nav">
            <?php foreach( $images as $image ): ?>
              <div class="works-detail__gallery-item works-detail__gallery-item--nav">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
              <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="works-detail__info" data-aos="fade-up">
        <table class="works-detail__info-table">
          <?php 
            $location_area = get_field('location_area');
            if($location_area):
          ?>
          <tr>
            <th>エリア</th>
            <td><?php the_field('location_area'); ?></td>
          </tr>
          <?php endif; ?>
          <?php 
            $industry = get_field('industry');
            if($industry):
          ?>
          <tr>
            <th>業種</th>
            <td><?php the_field('industry'); ?></td>
          </tr>
          <?php endif; ?>
          <?php 
            $area = get_field('area');
            if($area):
          ?>
          <tr>
            <th>面積</th>
            <td><?php the_field('area'); ?></td>
          </tr>
          <?php endif; ?>
          <?php 
            $cost = get_field('cost');
            if($cost):
          ?>
          <tr>
            <th>費用</th>
            <td><?php the_field('cost'); ?></td>
          </tr>
          <?php endif; ?>
          <?php 
            $construction_site = get_field('construction_site');
            if($construction_site):
          ?>
          <tr>
            <th>施工箇所</th>
            <td><?php the_field('construction_site'); ?></td>
          </tr>
          <?php endif; ?>
          <?php 
            $construction_details = get_field('construction_details');
            if($construction_details):
          ?>
          <tr>
            <th>施工内容</th>
            <td><?php the_field('construction_details'); ?></td>
          </tr>
          <?php endif; ?>
        </table>
      </div>
    </div>
    <div class="works-detail__pagination" data-aos="fade-up">
      <div class="works-detail__pagination-wrap">
        <?php
          $prev_post = get_adjacent_post(false, '', true);
          if(!empty($prev_post)):
        ?>
        <a class="works-detail__pagination-link works-detail__pagination-link--prev" href="<?php echo get_permalink($prev_post->ID) ?>">前の実績へ</a>
        <?php endif ?>
      </div>
      <div class="works-detail__pagination-wrap">
        <a class="works-detail__pagination-button" href="<?php echo get_home_url() ?>/works">一覧へ戻る</a>
      </div>
      <div class="works-detail__pagination-wrap flex-end">
        <?php
          $next_post = get_adjacent_post(false, '', false);
          if(!empty($next_post)):
        ?>
        <a class="works-detail__pagination-link" href="<?php echo get_permalink($next_post->ID) ?>">次の実績へ</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>