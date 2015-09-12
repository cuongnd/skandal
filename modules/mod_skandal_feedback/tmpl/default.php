<?php
$a="";
$name = JRequest::getVar('name');
$email = JRequest::getVar('email');

$columns = array('name', 'email');
$values = array('"'.$name.'"','"'.$email.'"');
if($name && $email){
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->insert($db->quoteName('#__skandal_brochure'));
    $query->columns($columns);
    $query->values(implode(',', $values));
    $db->setQuery($query);

    $a=$db->execute();

}
?>
<?php
// No direct access
defined('_JEXEC') or die; ?>
    <jdoc:include type="message" />
<form action="index.php" method="post">

    <div class="profiles">
        <h5 style="padding: 10px 0 0 5px; color: #009900">SKANDA HOLIDAYS</h5>
        <div class="col-md-6" >
            <p>
                At the early start, Asianventure Tours was a small local tour operator for individual
                travellers to visit Vietnam, and has since rapidly grown with the expansion of its
                activities over the border to Laos, Cambodia, Thailand and Myanmar. As a result , it has got
                a new height to become a destination tour company with a group of experienced guides and
                professional qualified experts, who also has been involved in tourism business for many
                years, both in and outside Vietnam. In together with its development, Asianventure Tours has
                set up the representative operation office and affiliates located in Laos, Cambodia,
                Thailand and Myanmar. The omnipresent flag allows our company to be committed to taking care
                of all your travel arrangement in a timely manner and making your trip a unique experience.
            </p>
        </div>

        <div class="col-md-6" style="padding: 0; margin: 0">

            <ul style="list-style: none; padding: 0 0 0 15px; margin: 5px 0 0 0; height: 310px;" class="borderline2px">

                <li><img src="img/portfolio/download.png" width="270"></li>

                <li style="padding-top: 10px; padding-bottom: 20px">
                    <input type="text" name="name" placeholder=" Enter your name" style="height: 30px; width: 265px; border: #cccccc 1px solid">
                    <BR>
                    <input type="text" name="email" placeholder=" Email address" style="height: 30px; width: 265px; border: #cccccc 1px solid; margin-top: 10px">
                    <?php
                    if($a){
                        if($a==1){
                            echo '<div class="alert alert-success">';
                            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            echo '<strong>Success!</strong>';
                            echo '</div>';
                        }else{
                            echo '<div class="alert alert-success">';
                            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            echo '<strong>Error!</strong>';
                            echo '</div>';
                        }
                    }
                    ?>
                <li>
                    <button type="submit" class="btn btn-primary btn-group-lg btn-block" style="background: #0161ab; width: 265px">Submit</button>
                </li>


            </ul>

        </div>

    </div>

</form>


