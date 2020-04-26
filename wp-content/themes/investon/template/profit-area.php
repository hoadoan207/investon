<?php if( have_rows('profit_group') ): ?>
    <?php while( have_rows('profit_group') ): the_row();
        // Get sub field values.
        $l_title = get_sub_field('l_title');
        $fields = get_sub_field('fields');
        $r_title = get_sub_field('r_title');
        $description = get_sub_field('description');
        $icons = get_sub_field('icons');
        ?>
        <div id="contact" class="check-profit-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
<!--                        <form>-->
<!--                            <div class="title text-center">-->
<!--                                <h5>--><?php //echo $l_title ?><!--</h5>-->
<!--                            </div>-->
<!--                            --><?php
//                                foreach ($fields as $field) { ?>
<!--                                    <div class="form-group">-->
<!--                                        <label>--><?php //echo $field["title"] ?><!--</label>-->
<!--                                        <input type="number" placeholder="--><?php //echo $field["input_placeholder"] ?><!--" class="form-control">-->
<!--                                    </div>-->
<!--                                --><?php //}
//                            ?>
<!--                        </form>-->
                        <div id="contact-title" class="title text-center">
                            <h5><?php echo $l_title ?></h5>
                        </div>
                        <?php echo do_shortcode("[contact-form-7 id=\"134\" title=\"Contact form 1\"]") ?>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="payment-method-wrap">
                            <h2><?php echo $r_title ?></h2>
                            <p><?php echo $description ?></p>
                            <ul class="payment-card">
                                <?php
                                foreach ($icons as $icon) { ?>
                                    <li>
                                        <a href="<?php echo $icon["link"] ?>"><img src="<?php echo $icon["icon"] ?>" alt="img"></a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>