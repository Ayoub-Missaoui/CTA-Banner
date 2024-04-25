<?php get_header() ?>

<div class="hero text-center">
    <?php if(get_field('hero_image')):?>
        <?php $image = get_field('hero_image'); ?>
        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="hero-image">
    <?php else:?>
        <img src="<?php echo get_template_directory_uri(  ) . '/images/hug.jpg'?>" alt="hug">
    <?php endif;?>
    
    <div class="hero-content px-3">

        <?php if ( get_field('hero_title' ) ): ?>
            <h1 class="display-5 fw-bold"><?php echo acf_esc_html( get_field('hero_title') ); ?></h1>
        <?php else:?>
            <h1 class="display-5 fw-bold">Voel je thuis</h1>
        <?php endif; ?>

        <div class="col-lg-6 mx-auto">
            <?php if ( get_field('hero_description' ) ): ?>
                <p class="lead mb-4"><?php echo esc_html( get_field('hero_description') ); ?></p>
            <?php else: ?>
                <p class="lead mb-4">Optional description of the page or a important action on this page.</p>
            <?php endif; ?>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <?php if ( get_field('hero_description' ) ): ?>
                    <button type="button" class="btn btn-lg px-4 prime-button"><?php echo esc_html( get_field('action_button') ); ?></button>
                <?php else: ?>
                    <button type="button" class="btn btn-lg px-4 prime-button">Optional button</button>
                <?php endif; ?>
            </div>
        </div>

    </div>

</div>