<?php if( have_rows('feature_group') ): ?>
    <?php while( have_rows('feature_group') ): the_row();
        // Get sub field values.
        $jump_image = get_sub_field('jump_image');
        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $input_placeholder = get_sub_field('input_placeholder');
        $button_text = get_sub_field('button_text');
        ?>
        <div class="featured-area left-line-bg common-pd-bottom-3" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/pen.png);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 text-lg-left text-center">
                        <div class="section-title">
                            <h5 class="subtitle"><span></span><?php echo $subtitle ?></h5>
                            <h3 class="title"><?php echo $title ?></h3>
                            <p><?php echo $description ?></p>
                        </div>
                        <div class="single-input-wrap">
                            <input placeholder="<?php echo $input_placeholder ?>" type="text" class="single-input">
                            <a class="btn btn-basic" href="#"><?php echo $button_text ?></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-6 align-self-center banner-thumb-wrap">
                        <div class="thumb item-bounce">
                            <img src="<?php echo $jump_image ?>" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>