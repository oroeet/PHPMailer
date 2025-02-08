<?php
$name = $_POST['n'];
$telephone = $_POST['m'];
$configuration = $_POST['property'];

extract($_POST, EXTR_OVERWRITE);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'BCC: oyeleads@gmail.com' . "\r\n";


$headers .= "From: info@7plumeria-drive.com\n";
$recipient = "oroeet@gmail.com";
//$recipient = "arunsolanki119@gmail.com";


$subject = "SEO Lead - From 7plumeria-drive.com- Instant CallBack";

$message = "\New Enquiry From 7plumeria-drive.com)\n";

$message = '<table width="500" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#FFF" style="font-weight: 700;font-size: 12px;color: #666;font-family:Arial, Helvetica, sans-serif; background-color:#fff;">
  <tr bgcolor="#A84240">
    <td width="500" colspan="2" style="font-weight: 700;font-size: 13px;color: #FFF; border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">SEO Lead | 7plumeria-drive.com- Instant CallBack</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Name</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$name.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Telephone</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$telephone.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Configuration</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.$configuration.'</td>
  </tr>
  <tr>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; border-right:none; padding:10px;">Ip Address</td>
    <td width="250" style="border: 1px solid #CCC; border-bottom:none; padding:10px;">'.getUserIpAddr().'</td>
  </tr>
</table>';

mail($recipient, $subject, $message, $headers);
echo "<meta http-equiv='REFRESH' content='0;url=thankyou.html'>";

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>
