<?php global $post; ?>
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => array(
			'publish'
		 )
);
$my_posts = get_posts( $args );
?>
<div class="m-cultural__boxs m-main__boxs">
<?php foreach ( $my_posts as $post ): setup_postdata( $post ); ?>
  <div class="m-cultural__box">
    <a href="<?php echo get_permalink(); ?>">
      <?php if ( has_post_thumbnail()) {
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
          echo '<img src="' .$thumbnail_img[0]. '" alt="">';
      } ?>
    </a>
    <p class="m-cultural__ttl"><?php echo the_title(); ?></p>
    <?php $ttl_en = SCF::get('cultural-ttl-en'); if( !empty( $ttl_en )){
        echo '<p class="m-cultural__ttl-eg">' .$ttl_en .'</p>';
    } ?>
    <div class="m-cultural__txts">
      <p class="m-cultural__lead">名称</p>
      <?php $culture = SCF::get('cultural-culture'); if( !empty( $culture )){
        echo '<p class="m-cultural__name">' .$culture .'</p>';
      } ?>
      <?php $culture_en = SCF::get('cultural-culture-en'); if( !empty( $culture_en )){
        echo '<p class="m-cultural__name-eg">' .$culture_en .'</p>';
      } ?>
    </div>
    <div class="m-cultural__txts">
      <p class="m-cultural__lead">エリア</p>
      <?php $area = SCF::get('cultural-area'); if( !empty( $area )){
        echo '<p class="m-cultural__name">' .$area .'</p>';
      } ?>
      <?php $area_en = SCF::get('cultural-area-en'); if( !empty( $area_en )){
        echo '<p class="m-cultural__name-eg">' .$area_en .'</p>';
      } ?>
    </div>
  </div>
<?php endforeach; ?>
</div>
<?php wp_reset_postdata(); ?>