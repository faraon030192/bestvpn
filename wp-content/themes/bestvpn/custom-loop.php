<?php
$first = true;
$args = array( 'post_type' => 'bv_custom_posts', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?>
    <div class="panel-card<?php if($first) { echo ' panel-card--most-top'; $first = false;} ?>">
        <div class="row row--flex flex-item-center">
            <div class="col-lg-3 col-md-2 col-sm-3">
                <img class="panel-card__logo" src="<?php the_field('brand_image'); ?>" alt="" />
                <ul class="list-rating text-center">
                    <?php
                        $i = 1;
                        while ($i < 6):
                    ?>
                    <li class="list-rating__item list-rating__item--<?php
                    if ( get_field('star_rating') > ($i - 0.5) ) {
                        echo 'full';
                    } else if ( get_field('star_rating') == ($i - 0.5) ) {
                        echo 'half';
                    } else {
                        echo 'empty';
                    }
                    ?>"></li>
                    <?php
                        $i++;
                        endwhile;
                    ?>
                </ul>
                <p class="text-center text-gray-thin"><b><?php the_field('count_of_votes'); ?> User Votes</b><br/>
                    Rate it!</p>
            </div><!-- col -->

            <div class="col-lg-4 col-md-4 col-sm-4">
                <ul class="list-ok">
                    <?php foreach ( explode('<br />', get_field('features_list')) as $list_item): ?>
                        <?php if ( ! trim($list_item) == '') : ?>
                    <li class="list-ok__item"><?php echo $list_item?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <!-- list-ok -->
                <h6 class="text-info"><?php the_field('features_note') ?></h6>
            </div><!-- col -->

            <div class="col-lg-3 col-md-3 col-sm-2">
                <ul class="list-logos">
                    <?php
                        $i = 1;
                        $good_for = get_field_object('good_for');
                        $array_values = $good_for['value'];
                        while ($i < 7):
                    ?>
                    <li class="list-logos__item<?php
                    if( ! in_array('list-logos-' . $i, $array_values) ) { echo ' list-logo__item--not-available';} ?>">
                        <img class="list-logos__img" src="<?php echo get_template_directory_uri(); ?>/img/temp/list-logos-<?php echo $i; ?>.png" alt="" />
                    </li>
                    <?php
                        $i++;
                        endwhile;
                    ?>
                </ul>
            </div><!-- col -->

            <div class="col-lg-2 col-md-3 col-sm-3">
                <span class="panel-card__score"><?php the_field('evaluation'); ?></span>
                <p class="text-center">
                    <a class="btn btn-success btn-small" href="<?php the_field('link_on_visit_site'); ?>">
                        Visit Site
                        <i class="bestvpn-icon-angle-double-right"></i>
                    </a>
                </p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- panel-card -->
<?php
endwhile;