<?php
// No direct access
defined('_JEXEC') or die; ?>
<div class="row" style="position: relative">
    <div class="col-md-12" style="background: #4e4538; position: absolute; top: -10px; color: #FFFFFF; width: 95%; margin-left: 30px">

        <?php foreach ($data as $item): ?>
            <div class="col-md-3">
                <ul style="padding: 5px 0 5px 0; margin: 0">

                    <li>Tour Type : <?php echo $item->type; ?></li>
                    <li>Group Size : <?php echo $item->groupsize; ?> </li>

                </ul>
            </div>
            <div class="col-md-3">
                <ul style="padding: 5px 0 5px 0; margin: 0">
                    <li>Passenger Age : <?php echo $item->passenger_age; ?></li>
                    <li>Service Class : <?php echo $item->service_class;?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul style="padding: 5px 0 5px 0; margin: 0">
                    <li>Tour Style: <?php echo $item->tour_style; ?></li>
                    <li>Physical Grade: <?php echo $item->grade; ?></li>
                </ul style="padding: 10px 0">
            </div>
            <div class="col-md-3">
                <ul style="padding: 5px 0 5px 0; margin: 0">
                    <li>Start: <?php echo $item->name_startcity; ?></li>
                    <li>Finish : <?php echo $item->name_endcity; ?></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>