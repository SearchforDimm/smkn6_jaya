<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'assets/vendor/autoload.php';
class Web extends CI_Controller
{

	public function index()
	{
		$data['web_ppdb']	 = $this->web->web_utama();
		$this->load->view('web/index', $data);
	}

	public function idbaru($value = '')
	{
		echo $this->web->pendaftaran('id_baru');
	}

	public function pendaftaran()
	{
		$data = array(
			'id_daftar'			=> $this->web->pendaftaran('id_baru'),
			'web_ppdb'			=> $this->web->pendaftaran('status_ppdb'),
			'v_pdd'				=> $this->web->pendaftaran('v_pdd'),
			'v_komp'			=> $this->web->pendaftaran('v_komp')
		);

		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			// var_dump($this->input->post()); exit();
			$acts = $this->web->pendaftaran('daftar', $this->input);
			// 

			$this->session->set_userdata('no_pendaftaran', $this->input->post('nis'));

			$id = $this->session->userdata('no_pendaftaran');
			$mail = new PHPMailer(true);
			$data['asesi'] = $this->db->query("SELECT * FROM tbl_siswa INNER JOIN tbl_komp ON tbl_siswa.id_komp = tbl_komp.id_komp WHERE no_pendaftaran='$id'")->row();

			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'mail.muzhaffar.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'no-reply@muzhaffar.com';                     // SMTP username
			$mail->Password   = 'xx2n@Kepo18#';                               // SMTP password
// 			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('no-reply@muzhaffar.com', 'LSP SMKN 6 Jakarta');
			$mail->addAddress($data['asesi']->email, $data['asesi']->nama_lengkap);     // Add a recipient

			$mail->addReplyTo('muzhaffarmy@gmail.com', 'LSP SMK Plus Pelita Nusantara');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');

			// Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Pesan dari LSP SMKN 6 Jakarta';
			$mail->Body    = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
		<!--[if gte mso 9]>
		<xml>
		  <o:OfficeDocumentSettings>
			<o:AllowPNG/>
			<o:PixelsPerInch>96</o:PixelsPerInch>
		  </o:OfficeDocumentSettings>
		</xml>
		<![endif]-->
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <meta name="x-apple-disable-message-reformatting">
		  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
		  <title></title>
		  
			<style type="text/css">
			  table, td { color: #000000; } a { color: #e67e23; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_1 .v-src-width { width: auto !important; } #u_content_image_1 .v-src-max-width { max-width: 36% !important; } #u_content_button_1 .v-size-width { width: 93% !important; } }
		@media only screen and (min-width: 620px) {
		  .u-row {
			width: 600px !important;
		  }
		  .u-row .u-col {
			vertical-align: top;
		  }
		
		  .u-row .u-col-100 {
			width: 600px !important;
		  }
		
		}
		
		@media (max-width: 620px) {
		  .u-row-container {
			max-width: 100% !important;
			padding-left: 0px !important;
			padding-right: 0px !important;
		  }
		  .u-row .u-col {
			min-width: 320px !important;
			max-width: 100% !important;
			display: block !important;
		  }
		  .u-row {
			width: calc(100% - 40px) !important;
		  }
		  .u-col {
			width: 100% !important;
		  }
		  .u-col > div {
			margin: 0 auto;
		  }
		}
		body {
		  margin: 0;
		  padding: 0;
		  font-family: "Lato";
		}
		
		table,
		tr,
		td {
		  vertical-align: top;
		  border-collapse: collapse;
		}
		
		p {
		  margin: 0;
		}
		
		.ie-container table,
		.mso-container table {
		  table-layout: fixed;
		}
		
		* {
		  line-height: inherit;
		}
		
		a[x-apple-data-detectors="true"] {
		  color: inherit !important;
		  text-decoration: none !important;
		}
		
		</style>
		  
		  
		
		<!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->
		
		</head>
		
		<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #081933;color: #000000">
		  <!--[if IE]><div class="ie-container"><![endif]-->
		  <!--[if mso]><div class="mso-container"><![endif]-->
		  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #081933;width:100%" cellpadding="0" cellspacing="0">
		  <tbody>
		  <tr style="vertical-align: top">
			<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #081933;"><![endif]-->
			
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;" align="left">
				
		  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
			<tbody>
			  <tr style="vertical-align: top">
				<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
				  <span>&#160;</span>
				</td>
			  </tr>
			</tbody>
		  </table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;" align="left">
				
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			<td style="padding-right: 0px;padding-left: 0px;" align="center">
			  
			  <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1636434047367-bb.png" alt="border" title="border" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width"/>
			  
			</td>
		  </tr>
		</table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
		  
		<table id="u_content_image_1" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:5px 10px 30px;" align="left">
				
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			<td style="padding-right: 0px;padding-left: 0px;" align="center">
			  <a href="https://unlayer.com" target="_blank">
			  <img align="center" border="0" src="https://i.pinimg.com/564x/32/da/13/32da1361094d38fe8d53555a624e6323.jpg" alt="Logo" title="Logo" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 20%;max-width: 116px;" width="116" class="v-src-width v-src-max-width"/>
			  </a>
			</td>
		  </tr>
		</table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;" align="left">
				
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			<td style="padding-right: 0px;padding-left: 0px;" align="center">
			  
			  <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1636780637744-sdsds.png" alt="Hero Image" title="Hero Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width"/>
			  
			</td>
		  </tr>
		</table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color: #f7f7f7;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="background-color: #f7f7f7;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 10px 40px;" align="left">
				
		  <h1 style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-size: 28px;">
			<strong>Selamat ' . $data['asesi']->nama_lengkap . ' Anda Berhasil Terdaftar!</strong>
		  </h1>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f7f7f7;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f7f7f7;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 44px 30px;" align="left">
				
		  <div style="color: #333333; line-height: 200%; text-align: left; word-wrap: break-word;">
			<p style="line-height: 200%; font-size: 14px;"><span style="font-size: 16px; line-height: 32px;">Halo ' . $data['asesi']->nama_lengkap . ',</span></p>
		<p style="line-height: 200%; font-size: 14px;"><span style="font-size: 16px; line-height: 32px;">Selamat anda telah berhasil terdaftar sebagai calon asesi LSP SMK Negeri 6 Jakarta untuk info lebih lanjut akan diumumkan oleh asesor lewat aplikasi LSP &amp; email mohon untuk terus melihat pesan baik di aplikasi maupun di email, terimakasih.</span></p>
		  </div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 44px 8px;" align="left">
				
		  <div style="color: #333333; line-height: 190%; text-align: left; word-wrap: break-word;">
			<p style="font-size: 14px; line-height: 190%; text-align: left;"><strong><span style="font-size: 18px; line-height: 34.2px;">Data Asesi:</span></strong></p>
            <table>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Nama Lengkap</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->nama_lengkap . '</td>
                </tr>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Kebangsaan</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->kebangsaan . '</td>
                </tr>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Alamat</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->alamat_siswa . '</td>
                </tr>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Asal Sekolah</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->nama_sekolah . '</td>
                </tr>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Tujuan Asesmen</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->tujuan_asesmen . '</td>
                </tr>
                <tr style="font-size: 14px; line-height: 190%;">
                    <td>Skema Sertifikasi yang Diambil</td>
                    <td>&emsp;&emsp;:&emsp;</td>
                    <td>' . $data['asesi']->kompetensi . '</td>
                </tr>
            </table>
		<p style="font-size: 14px; line-height: 190%; text-align: center;"><span style="font-size: 22px; line-height: 41.8px;"><strong>No. Pendaftaran : ' . $data['asesi']->no_pendaftaran . '</strong></span></p>
		<p style="font-size: 14px; line-height: 190%; text-align: center;"><span style="font-size: 22px; line-height: 41.8px;"><strong>NISN : ' . $data['asesi']->nisn . '</strong></span></p>
		  </div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table id="u_content_button_1" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;" align="left">
				
		<div align="center">
		  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://unlayer.com" style="height:60px; v-text-anchor:middle; width:372px;" arcsize="5%" stroke="f" fillcolor="#2a74f1"><w:anchorlock/><center style="color:#FFFFFF;"><![endif]-->
			<a href="https://unlayer.com" target="_blank" class="v-size-width" style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #2a74f1; border-radius: 3px;-webkit-border-radius: 3px; -moz-border-radius: 3px; width:64%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">
			  <span style="display:block;padding:19px 30px;line-height:120%;"><span style="font-size: 18px; line-height: 21.6px;"><strong><span style="line-height: 21.6px; font-size: 18px;">LOGIN</span></strong></span></span>
			</a>
		  <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
		</div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:30px 30px 70px;" align="left">
				
		  <div style="color: #333333; line-height: 190%; text-align: left; word-wrap: break-word;">
			<p style="font-size: 14px; line-height: 190%;"><span style="font-size: 16px; line-height: 30.4px;">Hormat kami,</span></p>
		<p style="font-size: 14px; line-height: 190%;"><span style="font-size: 16px; line-height: 30.4px;"><strong>SMK Negeri 6 Jakarta</strong></span></p>
		<p style="font-size: 14px; line-height: 190%;"><span style="font-size: 16px; line-height: 30.4px;"><strong>Lembaga Sertifikasi Profesi SMK Negeri 6 Jakarta</strong></span></p>
		  </div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;" align="left">
				
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			<td style="padding-right: 0px;padding-left: 0px;" align="center">
			  
			  <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1636435417479-ggg.jpg" alt="border" title="border" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width"/>
			  
			</td>
		  </tr>
		</table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;" align="left">
				
		<div align="center">
		  <div style="display: table; max-width:95px;">
		  <!--[if (mso)|(IE)]><table width="95" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:95px;"><tr><![endif]-->
		  
			
			<!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 16px;" valign="top"><![endif]-->
			<table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 16px">
			  <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
				<a href="https://www.linkedin.com/company/smkn-6-jkt" title="LinkedIn" target="_blank">
				  <img src="https://i.pinimg.com/564x/22/7c/5c/227c5cc96b0e77302c09e4797b18089b.jpg" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
				</a>
			  </td></tr>
			</tbody></table>
			<!--[if (mso)|(IE)]></td><![endif]-->
			
			<!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
			<table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
			  <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
				<a href="https://www.instagram.com/smkn6jkt/" title="Instagram" target="_blank">
				  <img src="https://i.pinimg.com/564x/85/84/ba/8584bab434a376e6df23c92e69da62eb.jpg" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
				</a>
			  </td></tr>
			</tbody></table>
			<!--[if (mso)|(IE)]></td><![endif]-->
			
			
			<!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
		  </div>
		</div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:15px 10px;" align="left">
				
		  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="55%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
			<tbody>
			  <tr style="vertical-align: top">
				<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
				  <span>&#160;</span>
				</td>
			  </tr>
			</tbody>
		  </table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 20px;" align="left">
				
		  <div style="color: #8d8c8c; line-height: 190%; text-align: center; word-wrap: break-word;">
			<p style="font-size: 14px; line-height: 190%;">Jika kamu memiliki pertanyaan, bisa hubungi kami lewat <span style="text-decoration: underline; font-size: 14px; line-height: 26.6px;"><span style="color: #f1602a; font-size: 14px; line-height: 26.6px; text-decoration: underline;"><span style="font-size: 14px; line-height: 26.6px;">support@mailus.com</span>. </span></span><br />(021) 83713168<br />Gg. Olahraga No.20, Ciriung, Cibinong, Kabupaten Bogor, Jawa Barat 16918<br /><span style="text-decoration: underline; font-size: 14px; line-height: 26.6px;">Terms of use</span> | <span style="text-decoration: underline; font-size: 14px; line-height: 26.6px;">Privacy Policy</span></p>
		  </div>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:0px;" align="left">
				
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
		  <tr>
			<td style="padding-right: 0px;padding-left: 0px;" align="center">
			  
			  <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1636435800013-footer%20curve.png" alt="border" title="border" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 600px;" width="600" class="v-src-width v-src-max-width"/>
			  
			</td>
		  </tr>
		</table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
		
		<div class="u-row-container" style="padding: 0px;background-color: transparent">
		  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
			<div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
			  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->
			  
		<!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
		<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
		  <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
		  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
		  
		<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
		  <tbody>
			<tr>
			  <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;" align="left">
				
		  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
			<tbody>
			  <tr style="vertical-align: top">
				<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
				  <span>&#160;</span>
				</td>
			  </tr>
			</tbody>
		  </table>
		
			  </td>
			</tr>
		  </tbody>
		</table>
		
		  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
		  </div>
		</div>
		<!--[if (mso)|(IE)]></td><![endif]-->
			  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
			</div>
		  </div>
		</div>
		
		
			<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
			</td>
		  </tr>
		  </tbody>
		  </table>
		  <!--[if mso]></div><![endif]-->
		  <!--[if IE]></div><![endif]-->
		</body>
		
		</html>
		';

			if ($mail->send()) {
				$data = array(
					'status' => '1'
				);

				$where = array(
					'no_pendaftaran' => $this->session->userdata('no_pendaftaran')
				);
				$this->web->update_data('tbl_siswa', $data, $where);
				$this->session->set_flashdata('msgform2', 'Silahkan untuk mengisi form apl-02 untuk melanjutkan proses pra-asesmen');
				redirect('formapl2');
			} else {
			}
		}
	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->web->pendaftaran('status_ppdb');
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		if ($this->session->userdata('no_pendaftaran') != NULL) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/login', $data);

			if (isset($_POST['btnlogin'])) {
				$send = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$auth = $this->web->auth('cek-masuk', $send);

				if ($auth['sum'] == 0) {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					No. Pendaftaran dan NISN tidak cocok!
					</div>');
					redirect('logcs');
				} else {
					$this->session->set_userdata('no_pendaftaran', $auth['res']->no_pendaftaran);

					$data = array(
						'status' => '1'
					);

					$where = array(
						'no_pendaftaran' => $this->session->userdata('no_pendaftaran')
					);
					$this->web->update_data('tbl_siswa', $data, $where);
					$this->session->set_flashdata('msglogin', 'Jangan pernah memberikan nomor pendaftaran dan NISN ke orang lain.');
					redirect('panel_siswa');
				}
			}
		}
	}

	public function cari()
	{
		$data['siswa'] = $this->SiswaModel->view();
		$this->load->view('web/cari', $data);
	}


	function error_not_found()
	{
		$this->load->view('404_content');
	}
}
