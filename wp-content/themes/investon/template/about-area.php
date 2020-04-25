<?php if( have_rows('about_group') ): ?>
    <?php while( have_rows('about_group') ): the_row();
        // Get sub field values.
        $subtitle = get_sub_field('subtitle');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $button_text = get_sub_field('button_text');
        $link_more_info = get_sub_field('link_more_info');
        $link_youtube = get_sub_field('link_youtube');
        $about_boxes = get_sub_field('about_boxes');
        ?>
        <div id="about" class="video-area-2 common-pd-bottom right-line-bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/pen-2.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="section-title">
                            <h5 class="subtitle"><span></span><?php echo $subtitle ?></h5>
                            <h3 class="title"><?php echo $title ?></h3>
                            <p><?php echo $description ?></p>
                        </div>
                        <a class="btn btn-basic top-right-radius-0" href="<?php echo $link_more_info ?>"><?php echo $button_text ?></a>
                        <a class="video-play-btn" href="<?php echo $link_youtube ?>" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                        <script>
                            var link_youtube = '<?php echo $link_youtube ?>';
                        </script>
                    </div>
                    <?php
                        for ($i = 0; $i < 2; $i++) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-about text-center <?php echo $i == 0 ? "bg-gradient" : "bg-gradient" ?>">
                                    <div class="thumb">
                                        <img src="<?php echo $about_boxes[$i]["icon"] ?>" alt="icon">
                                    </div>
                                    <h5><a href="#"><?php echo $about_boxes[$i]["title"] ?></a></h5>
                                    <p><?php echo $about_boxes[$i]["description"] ?></p>
                                    <a class="btn btn-plus" href="<?php echo $about_boxes[$i]["link"] ?>"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>