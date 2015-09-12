<?php
// No direct access
defined('_JEXEC') or die; ?>

    <div class="tbltestimonials">
        <h5 style="padding: 10px 0 0 5px; color: #009900">CLIENTS TESTIMONIALS </h5>
        <div class="col-md-6 testimonials">
            <div style="height:300px; border-right-image:url('img/common/bg2.png')">
                <?php foreach($info as $item): ?>
                <ul style="font-size: 14px; padding-bottom: 20px; line-height: 16px">
                    <li style="color: #990000; font-weight: bold"><?php echo $item->name_client; ?></li>
                    <li>Posted on: Feb 09, 15 from Italy</li>
                    <li style="background-image:url(img/common/bg1.png); height: 15px"></li>
                    <li style="line-height: 17px; padding-top: 10px"><?php echo $item->comment; ?></li>
                </ul>
                <?php endforeach;?>
            </div>
        </div>

        <div class="col-md-6" style="padding: 0; margin: 0">
            <ul style="list-style: none; padding: 0 0 0 15px; margin: 0" class="borderline2px">
                <li><img src="img/portfolio/halong_300x120.jpg" width="95%" height="105">
                    <a href="#" class="top-dest_title1">HALONG, VIETNAM</a>
                    <p style="font-size: 14px; line-height: 15px; color: #0161ab">The marine notch is a
                        feature of limestone coastline but, in Ha Long Bay, it has created the mature
                        landscape,....</p>
                </li>

                <li><img src="img/portfolio/bagan_300x120.jpg" width="95%" height="105">
                    <a href="#" class="top-dest_title1">BAGAN, MYANMAR</a>
                    <p style="font-size: 14px; line-height: 15px; color: #0161ab">The marine notch is a
                        feature of limestone coastline but, in Ha Long Bay, it has created the mature
                        landscape,....</p>
                </li>
            </ul>
        </div>
    </div>
