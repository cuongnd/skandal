<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
// using setting params
$title          = 	$params->get( 'title', '' );
$description	= 	$params->get( 'description', '' );

require JModuleHelper::getLayoutPath('mod_skandal_request','default');

$document = JFactory::getDocument();
$document->addScript("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js");

?>

<script>
    jQuery(document).ready(function($){
        $('.save').click(function(e){
                e.preventDefault();
                var name    = $("#name").val();
                var number  = $("#number").val();
                var email   = $("#email").val();
                var type    = $("input:radio:checked").val();
                var dataString = 'name='+name+'&number='+number+'&email='+email+'&type='+type;
                if(validateForm()){
                    $.ajax({
                        type: "POST",
                        url: "index.php?option=com_tour&task=requests.save",
                        //data: $("form").serialize(),

                        data: dataString,
                        success: function (data) {
                            alert('We will contact you as soon as possible');
                            $("#name").val("");
                            $("#number").val("");
                            $("#email").val("");
                            $("#type").val("");
                        }
                    });
                }

                return false;
        });
        function validateForm(){
            $(".validaterequest").find("input").each(function(){
                value=$(this).val();
                if(value==""){
                    $(this).next().remove();

                    $(this).after('<span class="error"> This field is required</span>');
                }else{
                    $(this).parent().find("span").remove();
                }
            });
            var diverror= $(".validaterequest").find(".error").length;
            //alert(diverror);
            if(diverror==0){
                $(".validaterequest").submit();
            }
        }
    });
</script>