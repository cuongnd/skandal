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

class TourControllerSendMail extends JControllerLegacy{

	function sendinquiry(){
		$mailer = JFactory::getMailer();
		$config = JFactory::getConfig();
		$from   = $config->get('mailfrom');
		$fromname = $config->get( 'fromname' );
		$sender = array(
			$from,
			$fromname
		);

		$mailer->setSender($sender);

		$user = JFactory::getUser();
		$recipient = $user->email;


		$mailer->addRecipient($recipient);
		$recipient = array( 'thanhtin.it.tm@gmail.com');
		$mailer->addRecipient($recipient);

		$html='';
		ob_start();
		?>
		<table class=" mceItemTable" style="width: 772px; height: 621px; border: 1px solid #000000; padding: 10px;" border="0">
			<tbody>
			<tr>
				<td style="background: none repeat scroll 0% 0% orange; padding: 5px; color: #ffffff;"><strong>Booking Status</strong></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><strong>Tour booking status:  </strong>Order status of this reservation is {order_status} and the ticket numbers for this itinerary has been emailed. Thank you booking with http://www.asianventure.com/skandal/</td>
			</tr>
			<tr>
				<td style="background: none repeat scroll 0% 0% orange; padding: 5px; color: #ffffff;"><strong>Customer Information</strong></td>
			</tr>
			<tr>
				<td style="padding: 5px;">
					<table class=" mceItemTable" style="width: 718px;" border="0">
						<tbody>
						<tr>
							<td style="padding: 5px;"><span style="font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 12.1599998474121px; line-height: 15.8079996109009px;">Agent Name</span>:</td>
							<td style="padding: 5px;">
								<p><strong>{firstname} {lastname}</strong></p>
							</td>
							<td style="padding: 5px;">Email:</td>
							<td style="padding: 5px;"><strong>{email}</strong></td>
							<td style="padding: 5px;">Mobile:</td>
							<td style="padding: 5px;"><strong>{mobile}</strong></td>
						</tr>
						<tr>
							<td style="padding: 5px;">Booking Number:</td>
							<td style="padding: 5px;"><span style="background-color: #ffff00;"><strong>{order_number}</strong></span></td>
							<td style="padding: 5px;">Booker on:</td>
							<td style="padding: 5px;"><span style="background-color: #ffff00;"><strong><span style="color: #000000;">{created}</span></strong></span></td>
							<td style="padding: 5px;"> </td>
							<td style="padding: 5px;"> </td>
						</tr>
						<tr>
							<td colspan="10">You can track your booking at:<br />
								<div style="font-size: 11px;">{order_link}</div>
							</td>
						</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td style="background: none repeat scroll 0% 0% orange; padding: 5px; color: #ffffff;"><strong>Detail</strong></td>
			</tr>
			<tr>
				<td style="background: none repeat scroll 0% 0% #fff1cc; padding: 5px;">
					<p><strong style="font-size: 14pt;"><span style="font-size: 14pt; color: #0a0a0a;">For any changes to the itinerary call us 14/7 Toll Free:</span></strong></p>
					<p><strong style="font-size: 14pt;"><strong style="color: #f11609;"> 0987 831 730</strong> </strong></p>
				</td>
			</tr>
			<tr>
				<td style="padding: 5px;"><span style="background-color: #ffff00;"><strong>Tour Summary</strong></span></td>
			</tr>
			<tr>
				<td style="padding: 5px;">{infosummary}</td>
			</tr>
			<tr>
				<td style="background: none repeat scroll 0% 0% orange; padding: 5px; color: #ffffff;"><strong>Passengers</strong></td>
			</tr>
			<tr>
				<td style="padding: 5px;">{passengers}</td>
			</tr>
			</tbody>
		</table>
		<?php
		$html.=ob_get_clean();


/*		$body   = '<h2>Our mail</h2>'
			. '<div>A message to our dear readers'
			. '<img src="cid:logo_id" alt="logo"/></div>'*/;
		$mailer->isHTML(true);
		$mailer->Encoding = 'base64';
		$mailer->setBody($html);

		// Optionally add embedded image
		$mailer->AddEmbeddedImage( JPATH_COMPONENT.'/assets/logo128.jpg', 'logo_id', 'logo.jpg', 'base64', 'image/jpeg' );

		$send = $mailer->Send();

		if ( $send !== true ) {
			echo 'Error sending email: ' . $send->__toString();
		} else {
			echo 'Successful! Thank you for booking ';
		}
	}
}
