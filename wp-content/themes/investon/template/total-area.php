<?php if( have_rows('total_group') ): ?>
    <?php while( have_rows('total_group') ): the_row();
        // Get sub field values.
        $total_boxes = get_sub_field('total_boxes');
        ?>
        <div class="fact-count-area common-pd-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                        foreach ($total_boxes as $box) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-fact-count text-center">
                                    <div class="thumb">
                                        <img src="<?php echo $box["icon"] ?>" alt="icon">
                                    </div>
                                    <h4 class="fact-title"><?php echo $box["title"] ?></h4>
                                    <h2 class="counter"><?php echo number_format($box["count_number"]) ?></h2>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>