<?php
$ttl_en = SCF::get('cultural-ttl-en');
$culture = SCF::get('cultural-culture');
$culture_kana = SCF::get('cultural-culture-kana');
$culture_en = SCF::get('cultural-culture-en');
$area = SCF::get('cultural-area');
$area_en = SCF::get('cultural-area-en');
$manager = SCF::get('cultural-manager');
$manager_en = SCF::get('cultural-manager-en');
$movie = SCF::get('cultural-movie');
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="m-lab p-cultural">
        <div class="m-lab__wrap">
        <header class="g-haeder">
            <div class="g-haeder__wrap pc">
            <a href="/">
                <div class="g-haeder__spttl">
                <h2>地域と文化の魅力ラボ</h2><br>
                <p>Regional and cultural charm lab</p>
                </div>
            </a>
            <ul>
                <li><a href="<?php echo home_url('/#news'); ?>">news</a></li>
                <li><a href="<?php echo home_url('/#about'); ?>">about</a></li>
                <li><a href="<?php echo home_url('/#contact'); ?>">contact</a></li>
            </ul>
            </div>
            <div class="sp g-haeder__sp">
            <a href="<?php echo home_url('/'); ?>">
                <div class="g-haeder__spttl">
                <h2>地域と文化の魅力ラボ</h2><br>
                <p>Regional and cultural charm lab</p>
                </div>
            </a>
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
            <ul class="hamburger-menu">
                <li><a href="<?php echo home_url('/#news'); ?>">news</a></li>
                <li><a href="<?php echo home_url('/#about'); ?>">about</a></li>
                <li><a href="<?php echo home_url('/#contact'); ?>">contact</a></li>
            </ul>


            </div>
        </header>
        <main class="m-main">
            <div class="m-cultural-sitettl">
                <h2>伝統文化・伝統の継承団体</h2>
                <h1><?php the_title(); ?></h1>
                    <?php if( !empty( $ttl_en )){ ?>
                        <p><?php echo $ttl_en ?></p>
                    <?php } ?>
            </div>
            <div class="m-cultural-container__pc">
            <div class="m-cultural-mv">
                <div class="m-cultural-mv__wrap">
                <?php if ( has_post_thumbnail()) {
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_img = wp_get_attachment_image_src( $thumbnail_id , 'full' );
                    echo '<div class="m-cultural-mv__bg"><img src="' .$thumbnail_img[0]. '" alt=""></div>';
                } ?>
                <div class="m-cultural-container__sp">
                    <div class="m-cultural-mv__inner m-main__inner">
                    <div class="m-cultural-mv__boxs">
                        <div class="m-cultural-mv__box">
                            <p class="m-cultural-mv__lead">伝統文化・地域資源</p>
                            <p class="m-cultural-mv__name">
                                <ruby>
                                    <?php if( !empty( $culture )){ ?>
                                    <?php echo $culture ?>
                                    <?php } ?>
                                    <rt>
                                        <?php if( !empty( $culture_kana )){ ?>
                                        <?php echo $culture_kana ?>
                                        <?php } ?>
                                    </rt>
                                </ruby>
                            </p>
                            <p class="m-cultural-mv__name-eg">
                                <?php if( !empty( $culture_en )){ ?>
                                <?php echo $culture_en ?>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="m-cultural-mv__box">
                            <p class="m-cultural-mv__lead">エリア</p>
                            <p class="m-cultural-mv__name">
                                <?php if( !empty( $area )){ ?>
                                <?php echo $area ?>
                                <?php } ?>
                            </p>
                            <p class="m-cultural-mv__name-eg">
                                <?php if( !empty( $area_en )){ ?>
                                <?php echo $area_en ?>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="m-cultural-mv__box">
                            <p class="m-cultural-mv__lead">代表者・担当者</p>
                            <p class="m-cultural-mv__name">
                                <?php if( !empty( $manager )){ ?>
                                <?php echo $manager ?>
                                <?php } ?>
                            </p>
                            <p class="m-cultural-mv__name-eg">
                                <?php if( !empty( $manager_en )){ ?>
                                <?php echo $manager_en ?>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="m-cultural-container__sp">
                <div class="m-cultural-about">
                <div class="m-cultural-about__wrap">
                    <div class="m-cultural-about__inner m-main__inner">
                        <div class="m-main__ttl">
                            <div class="m-main__ttl-img">
                            <p>about</p>
                            </div>
                            <h2>伝統文化・地域資源の概要</h2>
                        </div>
                        <div class="m-cultural-about__boxs m-main__boxs">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="m-cultural-howto">
                <div class="m-cultural-howto__wrap">
                    <div class="m-cultural-howto__inner m-main__inner">
                    <div class="m-main__ttl">
                        <div class="m-main__ttl-img">
                        <p>how to proceed</p>
                        </div>
                        <h2>どのように活動を進めたいか</h2>
                    </div>
                    <div class="m-cultural-howto__boxs">
                        <ul>
                            <?php $activity = SCF::get('cultural-activity'); foreach ($activity as $fields) { ?>
                            <li>● <?php echo $fields['cultural-activity-txt']; ?></li>                             
                            <?php } ?>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="m-cultural-problem">
                <div class="m-cultural-problem__wrap">
                    <div class="m-cultural-problem__inner m-main__inner">
                    <div class="m-main__ttl">
                        <div class="m-main__ttl-img">
                        <p>problem</p>
                        </div>
                        <h2>感じている課題</h2>
                    </div>
                    <div class="m-cultural-problem__boxs">
                        <ul>
                            <?php $assignment = SCF::get('cultural-assignment'); foreach ($assignment as $fields) { ?>
                                <li>● <?php echo $fields['cultural-assignment-txt']; ?></li>                             
                            <?php } ?>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="m-cultural-connection">
                <div class="m-cultural-connection__wrap">
                    <div class="m-cultural-connection__inner m-main__inner">
                    <h3 class="m-cultural-connection__raed">関連リンク</h3>
                    <div class="m-cultural-connection__youtube">
                        <?php if( !empty( $movie )){ ?>
                        <?php echo $movie ?>
                        <?php } ?>
                    </div>
                    <?php $link = SCF::get('cultural-link'); foreach ($link as $fields): ?>
                    <div class="m-cultural-connection__link">
                        <a target="_blank" href="<?php echo $fields['cultural-link-url']; ?>"><?php echo $fields['cultural-link-heading']; ?></a>    
                    </div>                   
                    <?php endforeach; ?>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
