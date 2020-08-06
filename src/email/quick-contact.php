<?php

/**
 * Descript: Display the entered data as well send an email to entered email address.
 * @author 
 * 
 */
$post_data = file_get_contents("php://input");
$data = json_decode($post_data);

//Just to display the form values
// $userData[] = array("Name"=>$data->name,"Email"=>$data->email);
// echo json_encode($userData);

// sned an email
$to = 'training@metapercept.com';

$subject = 'Quick Contact: '. $data->name;

$email_body = "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
   <head>
      <meta charset='UTF-8'>
      <title></title>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <!--[if !mso]><!-->
      <link href='https://fonts.googleapis.com/css?family=Raleway:325,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Kalam:325,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Lato:325,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Pacifico:325,400,500,700' rel='stylesheet' type='text/css'>
      <style type='text/css'>
         @import url(https://fonts.googleapis.com/css?family=Kalam:325,400,500,700);
         @import url(https://fonts.googleapis.com/css?family=Raleway:325,400,500,700);
         @import url(https://fonts.googleapis.com/css?family=Lato:325,400,500,700);
         @import url(https://fonts.googleapis.com/css?family=Pacifico:325,400,500,700);
      </style>
      <!--<![endif]-->
      <style type='text/css'>
         html {
         width:100%;
         }
         body {
         margin:0;
         padding:0;
         }
         .ReadMsgBody {
         width:100%;
         }
         .ExternalClass {
         width:100%;
         }
         a[x-apple-data-detectors] {
         color:inherit!important;
         text-decoration:none!important;
         font-size:inherit!important;
         font-family:inherit!important;
         font-weight:inherit!important;
         line-height:inherit!important;
         }
         p, div {
         margin:0;
         padding:0;
         }
         table {
         border-collapse:collapse;
         }
         /*** prevents font resizing */
         html, body, table, td, a, span {
         -webkit-text-size-adjust:none;
         }
         .gmailfix {
         display:none;
         display:none!important;
         }
         @media all and (max-width: 650px) {
         table.frame {
         min-width: auto !important;
         width: 100% !important;
         }
         td.hide {
         display: none !important;
         }
         .center-text {text-align:center !important;}
         .no-padding-mobile {padding-left:0px !important;padding-right:0px !important;padding-top:5px !important;padding-bottom:5px !important;}
         .no-padding-mobile-top{padding-left:0px !important;padding-right:0px !important;padding-top:15px !important;padding-bottom:5px !important;}
         .center-text-mobile {
         padding:5px 20px 10px 20px  !important; 
         text-align:center !important;
         font-size:16px !important;}
         .center-on-narrow {
         text-align: center !important;
         display: block !important;
         margin-left: auto !important;
         margin-right: auto !important;
         float: none !important;
         padding:0px 0px 0px 0px !important;
         }
         .border-remove {border-right:0px !important;border:none !important;}
         .mobile-padding-text {padding:45px 15px 45px 15px !important;}
         }
      </style>
      <style type='text/css'>
         u + #new-gmail-hack {
         display: block !important;
         }
         @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
         .email-container {
         min-width: 375px !important;
         }
         }
      </style>
      <style type='text/css'>
         /* test the email clients ability to read checkboxes, then display smart desktop stuff if we can */
         #testCheck:checked ~ table #main table .interactive .smartDsktpShow {
         display: block !important;
         visibility: visible !important;
         overflow: inherit !important;
         height: auto !important;
         max-height: none !important;
         }
         #testCheck:checked ~ table #main table .interactive .dumbDsktpHide {
         display: none !important;
         height: 0px !important;
         overflow: hidden !important;
         font-size: 0px !important;
         line-height: 0px !important;
         }
         /* Smart Desktop flipper containers and animation */
         #DflipContainer {
         position: relative;
         width: 100%;
         height: 0px;
         padding-top: 75%;
         background-repeat: no-repeat;
         background-size: contain;
         overflow: hidden;
         }
         .Df1,
         .Df2 {
         background-repeat: no-repeat;
         background-size: contain;
         position: absolute;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 0px;
         }
         /* Set Flipper timming */
         .Dcopy.Df1 {
         transition: all 1.5s ease-in-out;
         webkit-transition: all 1.5s ease-in-out;
         }
         .Dcopy.Df2 {
         transition: all 2.5s ease-in-out;
         webkit-transition: all 5.0s ease-in-out;
         }
         /* when clicked flip f1 off and f2 on */
         #Dflip:checked ~ #DflipContainer .Dcopy.Df1 {
         left: -650px;
         }
         #Dflip:checked ~ #DflipContainer .Dcopy.Df2 {
         left: 0;
         }
         @media only screen and (max-width: 650px),
         only screen and (max-device-width: 650px) {
         .wrap {
         width: 98% !important;
         }
         .imgScale {
         width: 100% !important;
         height: auto !important;
         }
         .footNavContainer {
         background-color: #09C !important;
         padding: 0!important
         }
         .wrap200 {
         width: 100% !important;
         }
         }
         @media only screen and (max-width: 480px) {
         .wrapTH {
         display: block !important;
         width: 100% !important;
         }
         .hide {
         display: none !important;
         width: 0 !important;
         }
         }
         }
      </style>
      <!--[if mso]>
      <style>
         span, td, table, div, p, a, strong, font{
         font-family: Arial, serif !important;
         }
         th {font-weight:normal !important}
      </style>
      <![endif]-->
      <!--[if gte mso 9]>
      <xml>
         <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
      </xml>
      <![endif]--> 
   </head>
   <body style='background-color:#eeeeee;' bgcolor='#eeeeee' class='email-container'>
      <table align='center' border='0' cellpadding='0' cellspacing='0' class='frame' role='presentation' style='width:100%;max-width:100%;margin:0 auto;text-align:center;border-collapse:collapse;background-color:#eeeeee' bgcolor='#eeeeee'>
         <tbody>
            <tr>
               <td align='center'>
                  <table class='frame' cellspacing='0' cellpadding='0' border='0' align='center' role='presentation' style='width:650px;max-width:100%;margin:0 auto;text-align:center;border-collapse:collapse;background-color:#eeeeee'>
                     <tbody>
                        <tr>
                           <td align='center' style='padding:5px 5px 5px 5px;font-family:Raleway, Helvetica, Arial, sans-serif; font-size:11px;line-height:16px;text-align:center;font-weight:normal !important'>
                              <!-- <span style='font-family:Raleway, Helvetica, Arial, sans-serif; font-size:11px;line-height:16px;font-weight:normal !important' width='325'>
                              <a href='%%DISPLAY_MSG%%' style='text-decoration:none;'> <font  color='#000000' face='Raleway, Arial, sans-serif, Helvetica'>
                              Can't see the Coupon Reveal? View Online</font></a></span> -->
                           </td>
                        </tr>
                        <tr>
                           <td align='center' style='padding-top:0px;padding-bottom:0px;background-color:#10266b' bgcolor='#10266b'>
                              <div align='right' class='img-container right autowidth' style='padding-right: 0px; padding-left: 0px;'>
                                 <a href='https://www.metapercept.com/'
                                 style='text-decoration:none;' target='_blank'>
                                 <img class='logo' align='left'   src='https://dtestw.000webhostapp.com/Email/src/images/white.png' style='display:block;border:none;margin:0 auto;width:200px;padding: 30px;' alt='Wired Messenger' width='200'> </a>
                                 <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='right'><![endif]-->
                                 <img
                                     align='right'
                                     alt='Image'
                                     border='0'
                                     class='right autowidth'
                                     src='https://dtestw.000webhostapp.com/Email/src/images/top-image.png'
                                     style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 143px; float: none; display: block;'
                                     title='Image'
                                     width='143'
                                 />
                                 <!--[if mso]></td></tr></table><![endif]-->
                             </div>                                                         
                           </td>
                        </tr>

                        <tr>
                           <td style='background-color: #10266b;'>
                                 <table border='0' cellpadding='0' cellspacing='0' class='divider' role='presentation' style='
                                          table-layout: fixed;
                                          vertical-align: top;
                                          border-spacing: 0;
                                          border-collapse: collapse;
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          min-width: 100%;
                                          -ms-text-size-adjust: 100%;
                                          -webkit-text-size-adjust: 100%;
                                       ' valign='top' width='100%'>
                                       <tbody>
                                          <tr style='vertical-align: top;' valign='top'>
                                             <td class='divider_inner' style='
                                                      word-break: break-word;
                                                      vertical-align: top;
                                                      min-width: 100%;
                                                      -ms-text-size-adjust: 100%;
                                                      -webkit-text-size-adjust: 100%;
                                                      padding-top: 0;
                                                      padding-right: 0px;
                                                      padding-bottom: 0px;
                                                      padding-left: 0px;
                                                   ' valign='top'>
                                                   <table align='center' border='0' cellpadding='0' cellspacing='0' class='divider_content' role='presentation' style='
                                                         table-layout: fixed;
                                                         vertical-align: top;
                                                         border-spacing: 0;
                                                         border-collapse: collapse;
                                                         mso-table-lspace: 0pt;
                                                         mso-table-rspace: 0pt;
                                                         border-top: 1px solid #283c7a;
                                                         width: 100%;
                                                      ' valign='top' width='100%'>
                                                      <tbody>
                                                         <tr style='vertical-align: top;' valign='top'>
                                                               <td style='word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;' valign='top'><span></span></td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                 </table>                              
                           </td>
                        </tr>
                        <tr>
                           <td style='background-color: #10266b;padding-top: 15px;'>
                              <div align='left' class='img-container left autowidth' style='padding-right: 0px; padding-left: 0px;'>
                                 <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 0px;padding-left: 0px;' align='left'><![endif]-->
                                 <img alt='Image' border='0' class='left autowidth' src='https://dtestw.000webhostapp.com/Email/src/images/element-left.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 33px; display: block;' title='Image' width='33'>
                                 <!--[if mso]></td></tr></table><![endif]-->
                             </div>
                             <div style='color: #ffffff; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 1.2; padding-top: 10px; padding-right: 45px; padding-bottom: 10px; padding-left: 45px; text-align: left;'>
                                    <div style='font-size: 14px; line-height: 1.2; color: #ffffff; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 17px;'>
                                       <p style='font-size: 24px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 29px; margin: 0;'><span style='font-size: 24px;'>Quick Contact form</span></p>
                                    </div>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td align='left' style='padding: 35px 45px 35px 45px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:16px;line-height:28px; background-color:#ffffff' bgcolor='#ffffff' class='mobile-padding-text'>
                              <span style='margin:0;font-size:16px;line-height:28px;font-family:Raleway, Helvetica, Arial, sans-serif;'>
                              <font  color='#888888' face='Raleway, Arial, sans-serif, Helvetica'>
                              Hi, <br>
                              Get a new response from <b>training.metapercept.com</b> through <b>Quick Contact</b> from.<br><br>
                              
                              </font>
                              </span>
                              <div style='color: #222222; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 2;'>
                                 <div style='color: rgb(136, 136, 136); font-family: Raleway, Arial, sans-serif, Helvetica; background-color: white; font-size: 16px; line-height: 28px;'>
                                       <table style='width: 100%;'>
                                            <tbody>";
$email_body .=                                       "<tr>";
$email_body .=                                            "<td style='width: 30%;'><b>Name:</b></td>";
$email_body .=                                            "<td>" . $data->name . "</td>";
$email_body .=                                       "</tr>";
$email_body .=                                       "<tr>";
$email_body .=                                            "<td style='width: 30%;'><b>Phone Number:</b></td>";
$email_body .=                                            "<td>" . $data->number . "</td>";
$email_body .=                                       "</tr>";
$email_body .=                                       "<tr>";
$email_body .=                                             "<td style='width: 30%;'><b>Email Address:</b></td>";
$email_body .=                                             "<td>" . $data->email . "</td>";
$email_body .=                                       "</tr>";
$email_body .=                                       "<tr>";
$email_body .=                                             "<td style='width: 30%;'><b>Courses:</b></td>";
$email_body .=                                             "<td>" . $data->course . "</td>";
$email_body .=                                       "</tr>";
$email_body .=                                       "<tr>";
$email_body .=                                             "<td style='width: 30%;'><b>Message:</b></td>";
$email_body .=                                             "<td>" . $data->message . "</td>";
$email_body .=                                       "</tr>";
$email_body .=                              "</tbody>
                                       </table>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        
                        <tr>
                           <td>
                              <table  cellpadding='0' style='background-color:#10266b' bgcolor='#10266b'  width='100%' align='center'>
                                 <tr>
                                    <td>                                     
                                      <div align='right' class='img-container right autowidth' style='padding-right: 20px; padding-left: 0px;padding-top: 15px;'>
                                             <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr style='line-height:0px'><td style='padding-right: 20px;padding-left: 0px;' align='right'><![endif]-->
                                             <div style='font-size: 1px; line-height: 15px;'></div>
                                             <img align='right' alt='Alternate text' border='0' class='right autowidth' src='https://dtestw.000webhostapp.com/Email/src/images/image-bottom_1.png' style='text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 330px; float: none; display: block;' title='Alternate text' width='330'>
                                             <!--[if mso]></td></tr></table><![endif]-->
                                       </div>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' style='padding:25px 15px 0px 15px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:15px;line-height:22px;text-align:center' class='center-text'>
                              <font  color='#000000' face='Raleway, Arial, sans-serif, Helvetica'>
                              <strong>Follow Us </strong>
                              </font>
                           </td>
                        </tr>
                        <tr>
                           <td style='text-align:center;padding-bottom:0px;padding-top:10px' align='center' valign='middle'>
                              <center>
                                 <table width='180' align='center' border='0' cellspacing='0' cellpadding='0' style='margin:0; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:180px;max-width:180px;' class='center-on-narrow'>
                                    <tbody>
                                       <tr>
                                          <td align='center' style='padding-top:0px;padding-bottom:5px;padding-left:3px;padding-right:3px;'>
                                             <a href='https://www.facebook.com/metapercepttechservices/' target='_blank'><img src='https://dtestw.000webhostapp.com/Email/src/images/facebook2x.png' width='35' alt='facebook' border='0' style='width:35px;display:block;'></a>
                                          </td>
                                          <td align='center' style='padding-top:0px;padding-bottom:5px;padding-left:3px;padding-right:3px;'>
                                             <a href='https://twitter.com/MetaPercept' target='_blank'><img src='https://dtestw.000webhostapp.com/Email/src/images/twitter2x.png' width='35' alt='twitter' border='0' style='width:35px;display:block;'></a>
                                          </td>
                                          <td align='center' style='padding-top:0px;padding-bottom:5px;padding-left:3px;padding-right:3px;'>
                                             <a href='hhttps://www.linkedin.com/company/metapercept-information-solutions-&-consulting' target='_blank'><img src='https://dtestw.000webhostapp.com/Email/src/images/linkedin2x.png' width='35' alt='linked in' border='0' style='width:35px;display:block;'></a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </center>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' style='padding:25px 15px 5px 15px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:15px;line-height:22px;text-align:center' class='center-text'>
                              <font  color='#000000' face='Raleway, Arial, sans-serif, Helvetica'>
                              <strong>NEED HELP? <a href='https://www.metapercept.com/#/contactus' style='color:#000000'>EMAIL OUR TEAM</a>  </strong>
                              </font>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' style='padding:4px 15px 5px 15px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:11px;line-height:16px;text-align:center' class='center-text'>
                              <font  color='#888888' face='Raleway, Arial, sans-serif, Helvetica'>
                              Copyright &copy; Metapercept Technology Services LLP. All rights reserved.<br>
                              You are receiving this email because you are a registered user of Metapercept Technology Services LLP.  
                              </font>
                           </td>
                        </tr>
                        <tr>
                           <td align='center' style='padding:4px 15px 5px 15px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:11px;line-height:16px;text-align:center' class='center-text'>
                              <font  color='#888888' face='Raleway, Arial, sans-serif, Helvetica'>
                                 Office 501, Sohrab Hall, Opposite Jahangir Hospital Pune, Maharashtra India Pin – 411001<br>
                              </font>
                           </td>
                        </tr>
                        <!-- <tr>
                           <td align='center' style='padding:4px 15px 5px 15px; font-family:Raleway, Helvetica, Arial, sans-serif; font-size:11px;line-height:16px;text-align:center' class='center-text'>
                              <font  color='#888888' face='Raleway, Arial, sans-serif, Helvetica'>
                              <a href='%%UNSUB_HREF%%&global=true' style='text-decoration:none;'><font  color='#454545' face='Raleway, Arial, sans-serif, Helvetica'>click here to unsubscribe.</font></a> 
                              </font>
                           </td>
                        </tr> -->
                        <tr>
                           <td align='center' style='padding:15px;'>
                              <center>
                                 <a href='https://www.metapercept.com'
                                    style='text-decoration:none;' target='_blank'><img class='logo'  src='https://www.metapercept.com/images/metapercept_logo_black.png' alt='Wired Messenger Inc' style='margin:0 auto;display:block;border:none;width:110px' width='110'> </a>
                              </center>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
      </table>
      <section>
         <div id='new-gmail-hack' style='white-space: nowrap; font: 15px courier; line-height: 0; display: none;'>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         </div>
      </section>
   </body>
</html>";


$headers  = "From: noreply@metapercept.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  

//php mail function to send email on your email address
// mail($to, $subject, $email_body, $headers);
    if(mail($to, $subject, $email_body, $headers))
    {
        $userData[] = array("status"=>"200","message"=>"success");
        echo json_encode($userData);
    }
    else{ 
        $userData[]= array("status"=>"400","message"=>"error");
        echo json_encode($userData);
    } 
?>