<?php if( have_rows('client_group') ): ?>
    <?php while( have_rows('client_group') ): the_row();
        // Get sub field values.
        $title = get_sub_field('title');
        $clients = get_sub_field('clients');
        ?>
        <div id="clients" class="shape-3" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/3.png);">
            <!-- testimonial-area start -->
            <div class="testimonial-area pd-top-80 common-pd-bottom left-bottom-line-bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/shape/pen.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testimonial-main-slider">
                                <?php
                                    foreach ($clients as $client) { ?>
                                        <div class="item">
                                            <div class="single-main-client">
                                                <div class="section-title text-lg-left text-center">
                                                    <h5 class="subtitle"><span></span>Top Clients</h5>
                                                    <h3 class="title"><?php echo $client["title"] ?></h3>
                                                    <p><?php echo $client["feedback"] ?></p>
                                                </div>
                                                <div class="client-info text-lg-left text-center">
                                                    <h6><?php echo $client["name"] ?></h6>
                                                    <p><?php echo $client["career"] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="testimonial-thumb-slider-wrap">
                                <?php
                                $i = 1;
                                foreach ($clients as $client) { ?>
                                    <img class="testimonial-thumb-slider--img testimonial-thumb-slider--img-<?php echo $i ?>" src="<?php echo $client["avatar"] ?>" alt="img">
                                <?php $i ++; }
                                ?>

                                <div class="testimonial-thumb-slider-img testimonial-thumb-slider">
                                    <?php
                                    foreach ($clients as $client) { ?>
                                        <div class="item">
                                            <div class="single-thumb-client">
                                                <img src="<?php echo $client["avatar"] ?>" alt="img">
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial-area end -->
        </div>
    <?php endwhile; ?>
<?php endif; ?>