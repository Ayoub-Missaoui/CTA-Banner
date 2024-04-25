<?php
/*
Template Name: CTA
*/
wp_head();
?>

<div class="banner-section">
    <div class="left-content">

        <h2 class="cta-title">
            <?php
            // Controleren op het veld 'cta_titel_first'
            if (get_field('cta_titel_first')):
                echo acf_esc_html(get_field('cta_titel_first'));
            else:
                echo "Title about the ";
            endif;
            ?>
            <span>
                <?php
                // Controleren op het veld 'cta_titel_span'
                if (get_field('cta_titel_span')):
                    echo acf_esc_html(get_field('cta_titel_span'));
                else:
                    echo " call-to-action ";
                endif;
                ?>
            </span>
            <?php
            // Controleren op het veld 'cta_titel_last'
            if (get_field('cta_titel_last')):
                echo acf_esc_html(get_field('cta_titel_last'));
            else:
                echo " here";
            endif;
            ?>
        </h2>

        <p class="cta-body">
            <?php
            // Controleren op het veld 'cta_body'
            if (get_field('cta_body')):
                echo acf_esc_html(get_field('cta_body'));
            else:
                echo "Optional body copy goes here";
            endif;
            ?>
        </p>

        <button class="cta-button">
            <span class="cta-button-text">
                <?php
                // Controleren op het veld 'cta_call_to_action'
                if (get_field('cta_call_to_action')):
                    echo acf_esc_html(get_field('cta_call_to_action'));
                else:
                    echo "Optional button";
                endif;
                ?>
            </span>
            <!-- SVG-pijl icoon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </button>

    </div>

    <div class="right-image">
        <?php
        // Controleren op het veld 'cta_image'
        if (get_field('cta_image')):
            $image = get_field('cta_image');
            ?>
            <!-- Afbeelding tonen -->
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php else: ?>
            <!-- Standaardafbeelding tonen als 'cta_image' niet is ingesteld -->
            <img src="<?php echo get_template_directory_uri() . '/images/hug.jpg' ?>" alt="hug">
        <?php endif; ?>
    </div>
</div>