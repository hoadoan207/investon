<?php if( have_rows('services_group') ): ?>
    <?php while( have_rows('services_group') ): the_row();
        // Get sub field values.
        $input_placeholder = get_sub_field('input_placeholder');
        $button_text = get_sub_field('button_text');
        $service_boxses = get_sub_field('service_boxses');
        ?>
        <div id="services" class="work-area common-pd-2 bg-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-work text-center mg-top-180">
                            <span class="common-icon-circle bg-smile-green"><img src="<?php echo $service_boxses[0]["icon"] ?>" alt="icon"></span>
                            <h4><a href="#"><?php echo $service_boxses[0]["title"] ?></a></h4>
                            <p><?php echo $service_boxses[0]["description"] ?></p>
                            <a class="btn btn-plus" href="<?php echo $service_boxses[0]["link"] ?>"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                                for($i = 1; $i < 3; $i++) { ?>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-work text-center">
                                            <span class="common-icon-circle <?php echo $i == 1 ? "bg-pink" : "bg-yellow" ?>"><img src="<?php echo $service_boxses[$i]["icon"] ?>" alt="icon"></span>
                                            <h4><a href="#"><?php echo $service_boxses[$i]["title"] ?></a></h4>
                                            <p><?php echo $service_boxses[$i]["description"] ?></p>
                                            <a class="btn btn-plus" href="<?php echo $service_boxses[$i]["link"] ?>"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                <?php }
                            ?>
                            <div class="col-lg-12 mb-5 mb-mg-0">
                                <div class="single-input-wrap text-center text-lg-right">
                                    <input placeholder="<?php echo $input_placeholder ?>" type="text" class="single-input">
                                    <a class="btn btn-basic" href="#"><?php echo $button_text ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>