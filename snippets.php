<?php
?>

<!-- example,  JQ to switch the sidebar -->
<!-- Check Front View -->
<!-- https://ibb.co/h265Ptb -->
<!-- https://ibb.co/2gSktwH -->

<div class="map-block map-block--<?php echo $city; ?>">
    <div class="container">
        <div class="map-block__wrap">
            <div class="map-block-sidebar">
                <?php echo do_shortcode($content); ?>
            </div>
            <div class="map-block-content">
                <?php get_template_part('maps/map-' . $city . '1', null, $labels); ?>
            </div>
            <div class="map-block-content mobile">
                <?php get_template_part('maps/map-' . $city . '2', null, $labels); ?>
            </div>
        </div>
        <div class="map-block-footer">
            <div class="map-block-footer__row">
                <div class="map-block-footer__item default"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Alesco recommends pin.svg">Alesco recommends</div>
                <div class="map-block-footer__item default"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Alesco pin.svg">properties</div>
            </div>
            <div class="map-block-footer__row">
                <div class="map-block-footer__item key-areas">key areas</div>
                <div class="map-block-footer__item map-roads">Roads</div>
                <div class="map-block-footer__item map-trans">public Transport</div>
                <div class="map-block-footer__item map-univ">universities</div>
            </div>
        </div>
    </div>
</div>
<script>
    var $parentMap = '.map-block--<?php echo strtolower($atts['map_id']); ?> ';
    $('.map-block--<?php echo strtolower($atts['map_id']); ?> .map-point').on('click', function() {
        var $this = $(this),
            $id = $this.attr('data-map');
        if ($this.hasClass('active')) {
            $($parentMap + ' .map-point, ' + $parentMap + ' .map-sidebar-content').removeClass('active');
            $($parentMap + ' .map-sidebar-content__0').addClass('active');
        } else {
            $($parentMap + ' .map-point').removeClass('active');
            $(this).toggleClass('active');
            $($parentMap + ' .map-sidebar-content').removeClass('active');
            $($parentMap + ' .map-sidebar-content__' + $id).addClass('active');
        }
    });
</script>