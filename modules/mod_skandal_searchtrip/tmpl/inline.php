<?php
defined('_JEXEC') or die;

$itemId='142';
?>

<div id="mod_skandal_searchtrip">
    <form action="<?php echo JRoute::_('index.php?option=com_tour&view=listtours&Itemid='.$itemId.'');?>" method="post" class="form-inline">

        <div class="form-group">
            <label style="color:#EF740D">SEARCH FOR A TRIP</label>
            <select id="select-destination" name="select-destination">
                <option selected value="">All Destination</option>
                <?php foreach($country as $item):?>
                    <option value="<?php echo $item->id; ?>"><?php echo $item->name;?></option>
                <?php endforeach;?>
            </select>
            <select id="select-length" name="select-length">
                <option selected value="">All length</option>
                <?php for($i=1;$i<=$height;$i++):?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor;?>
            </select>
            <input class="form-control1" id="keywords-search" name="keywords-search" Placeholder="Keywords" type="text">
            <button class="btn btn-primary" type="submit">GO</button>
        </div>

        <input type="hidden" name="task" value="" />
        <input type="hidden" name="option" value="com_tour" />
    </form>
</div>
