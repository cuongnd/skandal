<?php
defined('_JEXEC') or die;

$itemId='142';
?>
<div id="mod_skandal_searchtrip" class="row">
    <form action="<?php echo JRoute::_('index.php?option=com_tour&view=listtours&Itemid='.$itemId.'');?>" method="post" class="form-inline">
        <div class="col-md-12 row">
            <h4 style="color: #014d73; text-transform: none">Find a Trip</h4>
        </div>

        <div class="col-md-7">
            <select class="form-control" id="select-destination" name="select-destination" style="width: 160px">
                <option selected value="">All Destination</option>
                <?php foreach($country as $item):?>
                   <option value="<?php echo $item->id; ?>"><?php echo $item->name;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-md-5" style="padding-left: 0">
            <select class="form-control" id="select-length" name="select-length">
                <option selected value="">All length</option>
                <?php for($i=1;$i<=$height;$i++):?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor;?>
            </select>
        </div>
        <div class="col-md-12">
            <input class="form-control" id="keywords-search" name="keywords-search" Placeholder="Keywords" type="text" style="width: 265px">
        </div>
        <div class="col-md-12">
            <button class="btn btn-primary pull-right" style="padding: 4px 6px; font-size: 13px;margin: -10px -20px" type="submit">Go</button>
        </div>

        <input type="hidden" name="task" value="" />
        <input type="hidden" name="option" value="com_tour" />
     </form>
</div>