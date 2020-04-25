<?php if( have_rows('intro_group') ): ?>
    <?php while( have_rows('intro_group') ): the_row();
        // Get sub field values.
        $background_image = get_sub_field('background_image');
        $jump_image = get_sub_field('jump_image');
        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $input_placeholder = get_sub_field('input_placeholder');
        $button_text = get_sub_field('button_text');
        ?>
        <div id="intro" class="banner-area-2" style="background-image: url('<?php echo $background_image ?>')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-inner text-center text-lg-left">
                            <p class="subtitle"><?php echo $subtitle; ?></p>
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $description; ?></p>
                            <div class="single-input-wrap">
                                <input placeholder="<?php echo $input_placeholder; ?>" type="text" class="single-input">
                                <a class="btn btn-basic" href="#"><?php echo $button_text; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 align-self-center banner-thumb-wrap">
                        <div class="banner-thumb item-bounce text-center d-none d-lg-block">
                            <img src="<?php echo $jump_image ?>" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>