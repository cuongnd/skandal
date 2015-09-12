<?php
$document = JFactory::getDocument();
$document->addScript(JURI::root() . 'modules/mod_mini_slider/asset/js/bjqs-1.js');
$document->addStyleSheet(JURI::root() . 'modules/mod_mini_slider/asset/css/style.css');
?>

<script class="secret-source">
    jQuery(document).ready(function ($) {
        $('#banner-fade').bjqs({
            height: 278,
            width: 610,
            responsive: true
        });
    });

</script>

<?php
// No direct access
defined('_JEXEC') or die; ?>

    <h5 class="title">FEATURED ACTIVITIES IN VIETNAM , CAMBODIA, LAOS, THAILAND, MYANMAR AND CHINA</h5>

    <div style="min-height:280px; max-width: 620px; position: relative; padding-left: 4px" id="banner-fade">

        <!-- start Basic Jquery Slider -->

        <ul class="bjqs">
            <?php foreach($getInfo as $item):?>
            <li style="height: 320px; width: 100%; display: none;" class="bjqs-slide">
                <img src="<?php echo $item->path; ?>" title="<?php echo $item->title ?>">
                <p class="bjqs-caption"><?php echo $item->title; ?></p></li>

            <?php endforeach;?>
        </ul>

        <!-- end Basic jQuery Slider -->

    </div>
