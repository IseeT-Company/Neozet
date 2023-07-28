<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';
require './sendToBot.php';

$toemails = array();

$toemails[] = array(
    'email' => 'iseet@internet.ru', // Your Brand Mail ID
    'name' => 'Ama Tsorinsky' // Your Name
);

// Form Processing Messages
$message_success = "Просто чекаю."; // Success Message
sendTg($message_success);

exit();

// $mail = new PHPMailer();



// $email = $_POST['contact-form-email'];
// $name =  $_POST['contact-form-name'];
// $text =  $_POST['contact-form-message'];
// $tel =  $_POST['contact-form-tel'];

// // If you intend you use SMTP, Add your SMTP Code after this Line


// if( isset( $name ) ) {
//     if( $tel[-1] != "_" ) {
//         if( isset( $text ) ) {
//             $subject = 'Новый заказ.';

//         $mail->SetFrom( "feedback-iseet@gmail.com" , $name . ' ' . $tel );

//         $mail->AddReplyTo( $email );
//         foreach( $toemails as $toemail ) {
//             $mail->AddAddress( $toemail['email'] , $toemail['name'] );
//         }

//         $mail->Subject = $subject;
// 		$mail->CharSet = 'UTF-8';
// 		$mail->Encoding = 'base64';


// 		$messageToTG = sprintf( "Новая заявка: %s\nИмя: %s\nПочта: %s\nНомер телефона: %s\nПроблема: %s", date('d.m.Y H:i:s'), $name, $email ,$tel, $text);

//         sendTg($messageToTG);
//         $email = '<table align="center" border="0" cellpadding="0" cellspacing="20" height="100%" width="100%">
// 						<tr>
// 							<td align="center" valign="top">
// 								<table width="600" bgcolor="#f8f6fe" cellpadding="7" style="font-size:16px; padding:30px; line-height: 28px;">
// 									<tr>
// 										<td style="text-align:right; padding-right: 20px;" width="100" valign="top"><strong>Имя:</strong></td>
// 										<td>' . $name . '</td>
// 									</tr>
// 									<tr>
// 										<td style="text-align:right; padding-right: 20px;" width="100" valign="top"><strong>Почта:</strong></td>
// 										<td>' . $email . '</td>
// 									</tr>
// 									<tr>
// 										<td style="text-align:right; padding-right: 20px;" width="100" valign="top"><strong>Номер телефона:</strong></td>
// 										<td>' . $tel . '</td>
// 									</tr>
// 									<tr>
// 										<td style="text-align:right; padding-right: 20px;" width="100" valign="top"><strong>Сообщение:</strong></td>
// 										<td>' . $text . '</td>
// 									</tr>
// 								</table>
// 							</td>
// 						</tr>
// 					</table>';

//         // $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>: ' . $_SERVER['HTTP_REFERER'] : '';

//         $body = "$email";

//         $mail->MsgHTML( $body );


// 		$success = "Спасибо, что связались с нами, мы ответим Вам в ближайшее время.";

//         try {
//             $emailSend = $mail->Send();
//             echo json_encode(array('response' => 'success', 'Message' => '<div class="alert alert-success alert-dismissible fade show text-start"><i class="fa fa-check-circle"></i> ' . $success . ' <button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));
//             exit;
//         } catch (Exception $e) {
//             echo json_encode(array('response' => 'error', 'Message' => '<div class="alert alert-danger alert-dismissible fade show text-start"><i class="fa fa-exclamation-triangle me-1"></i> Сообщение не может быть отправлено: ' . $e->errorMessage() . '<button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));
//             exit;
//         } catch (\Exception $e) {
//             echo json_encode(array('response' => 'error', 'Message' => '<div class="alert alert-danger alert-dismissible fade show text-start"><i class="fa fa-exclamation-triangle me-1"></i> Сообщение не может быть отправлено: ' . $e->getMessage() . '<button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));
//             exit;
//         }
//         }
//         else {
//             echo json_encode(array('response' => 'error', 'Message' => '<div class="alert alert-danger alert-dismissible fade show text-start"><i class="fa fa-exclamation-triangle me-1"></i> Опишите свою <strong>проблему</strong>! <button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));
//         }
//     } else {
// 		echo json_encode(array('response' => 'error', 'Message' => '<div class="alert alert-danger alert-dismissible fade show text-start"><i class="fa fa-exclamation-triangle me-1"></i> Недействительный <strong>номер телефона</strong>! <button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));
//     }
// } else {
// 	echo json_encode(array('response' => 'error', 'Message' => '<div class="alert alert-danger alert-dismissible fade show text-start"><i class="fa fa-exclamation-triangle me-1"></i> Укажите имя! <button type="button" class="btn-close text-1 mt-1" data-bs-dismiss="alert"></button></div>'));

// }




?>