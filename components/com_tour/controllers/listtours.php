<?php

/**
 * @package 	Bookpro
 * @author 		Ngo Van Quan
 * @link 		http://joombooking.com
 * @copyright 	Copyright (C) 2011 - 2012 Ngo Van Quan
 * @license 	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @version 	$Id$
 **/

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');

class TourControllerListTour extends JControllerLegacy{

    function sendinquiry(){
        $mailer = JFactory::getMailer();
        $config = JFactory::getConfig();
        $sender = array(
            $config->get( 'tin.joombooking@gmail.com' ),
            $config->get( 'Tin' )
        );

        $mailer->setSender($sender);

        $user = JFactory::getUser();
        $recipient = $user->email;


        $mailer->addRecipient($recipient);
        $recipient = array( 'thanhtin.it.tm@gmail.com');
        $mailer->addRecipient($recipient);

        $body   = '<h2>Our mail</h2>'
            . '<div>A message to our dear readers'
            . '<img src="cid:logo_id" alt="logo"/></div>';
        $mailer->isHTML(true);
        $mailer->Encoding = 'base64';
        $mailer->setBody($body);

// Optionally add embedded image
        $mailer->AddEmbeddedImage( JPATH_COMPONENT.'/assets/logo128.jpg', 'logo_id', 'logo.jpg', 'base64', 'image/jpeg' );

        $send = $mailer->Send();

        if ( $send !== true ) {
            echo 'Error sending email: ' . $send->__toString();
        } else {
            echo 'Mail sent';
        }
        echo "hahaha";
    }
}
