<?php
error_reporting(0);
function timer($t){
$p=$t;
for ($x=$p;$x>0;$x--){
$wak = date("[i:s]", $x);
echo "\r                          \r";
echo "\r  \033[1;97mwait \033[1;93m".$wak." \r";
sleep(1);
}
}
$cok = "_ym_uid=1686396456286492657; _ym_d=1686396456; _iidt=405f8LsUnGdn2lpDiReCTEUkk+TwE1i1pV2XU4PhPOh1yNGj+wHZ8MSQr49RoDcYz+kCzd+l4fJ/Uw==; _vid_t=vfXDRRO5jffWLB104kmkB9kkjWG4RkWINP49j8+Lw9IN/X3vQ5d0Zpq2TYSok/gqtiOrCRuBF8zbiw==; mnu_title4=1; mnu_title1=1; mnu_title3=1; menu_ref=ff7d83ac896ab7e010c5066e7bff2c56; PHPSESSID=odavk8dse0upvsdr7as5dbgh7q; _ym_isad=2; cenrifugo_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIyMDc3ODczIiwiZXhwIjoxNjg3MTkwMTg0fQ.muYj-O01rGqhxjxPr-2sycsXGFemNCHDDCpigMtq_ck; cenrifugo_token_exp=1687190184; googtrans=null; googtrans=null";
$us = "Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";

function curl_request($url, $method, $data = null) {

    $header = array(
        "Host: aviso.bz",
        "referer:https://aviso.bz/work-youtube",
        "content-type: application/x-www-form-urlencoded",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "cookie: _ym_uid=1686396456286492657; _ym_d=1686396456; _iidt=405f8LsUnGdn2lpDiReCTEUkk+TwE1i1pV2XU4PhPOh1yNGj+wHZ8MSQr49RoDcYz+kCzd+l4fJ/Uw==; _vid_t=vfXDRRO5jffWLB104kmkB9kkjWG4RkWINP49j8+Lw9IN/X3vQ5d0Zpq2TYSok/gqtiOrCRuBF8zbiw==; mnu_title4=1; mnu_title1=1; mnu_title3=1; menu_ref=ff7d83ac896ab7e010c5066e7bff2c56; PHPSESSID=odavk8dse0upvsdr7as5dbgh7q; _ym_isad=2; cenrifugo_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIyMDc3ODczIiwiZXhwIjoxNjg3MTkwMTg0fQ.muYj-O01rGqhxjxPr-2sycsXGFemNCHDDCpigMtq_ck; cenrifugo_token_exp=1687190184; googtrans=null; googtrans=null",
        "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36",
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function request($url, $method, $data = null) {
    $header = array(
        "Host: aviso.bz",
        "referer: https://skyhome.squarespace.com/",
        "content-type: application/x-www-form-urlencoded",
        "accept: application/json, text/javascript, */*; q=0.01",
        "origin: https://skyhome.squarespace.com",
        "cookie: _ym_uid=1686396456286492657; _ym_d=1686396456; _iidt=405f8LsUnGdn2lpDiReCTEUkk+TwE1i1pV2XU4PhPOh1yNGj+wHZ8MSQr49RoDcYz+kCzd+l4fJ/Uw==; _vid_t=vfXDRRO5jffWLB104kmkB9kkjWG4RkWINP49j8+Lw9IN/X3vQ5d0Zpq2TYSok/gqtiOrCRuBF8zbiw==; mnu_title4=1; mnu_title1=1; mnu_title3=1; menu_ref=ff7d83ac896ab7e010c5066e7bff2c56; PHPSESSID=odavk8dse0upvsdr7as5dbgh7q; _ym_isad=2; cenrifugo_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIyMDc3ODczIiwiZXhwIjoxNjg3MTkwMTg0fQ.muYj-O01rGqhxjxPr-2sycsXGFemNCHDDCpigMtq_ck; cenrifugo_token_exp=1687190184; googtrans=null; googtrans=null",
        "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36",
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

while("true"){
b:
$ua = array(
        "Host: aviso.bz",
        "referer: https://aviso.bz/work-serf",
        "content-type: application/x-www-form-urlencoded",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "cookie: ".$cok."",
        "user-agent: ".$us."",
);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://aviso.bz/work-serf");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

$id = explode("'" ,explode("funcjs['go-serf']('", $result)[1])[0];
$hash = explode("');" ,explode("funcjs['go-serf']('".$id."','", $result)[1])[0];


$data = "id=".$id."&hash=".$hash."&func=go-serf";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://aviso.bz/ajax/earnings/ajax-serf.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$res = curl_exec($ch);
$sig = explode('&' ,explode('sid=', $res)[1])[0];




$ua = array(
        "Host: twiron.com",
        "referer: https://aviso.bz/",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: ".$us."",
);
$log = "https://twiron.com/view_surfing?sid=".$sig."&id=".$id."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);

$ua = array(
        "Host: twiron.com",
        "referer: https://twiron.com/view_surfing?sid=".$sig."&id=".$id."",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: ".$us."",
);
$log = "https://twiron.com/vlss?sid=".$sig."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ress = curl_exec($ch);
$tim = explode('</span>' ,explode('id="timer_inp">', $ress)[1])[0];

timer($tim);
$ua = array(
        "Host: twiron.com",
        "referer: https://twiron.com/view_surfing?sid=".$sig."&id=".$id."",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: ".$us."",
);
$log = "https://twiron.com/fraim_start?sid=".$sig."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ress = curl_exec($ch);


$ua = array(
        "Host: twiron.com",
        "referer: https://twiron.com/view_surfing?sid=".$sig."&id=".$id."",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: ".$us."",
);
$log = "https://aviso.bz/go/fraim-link.php?id=".$id."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ress = curl_exec($ch);

$ua = array(
        "Host: twiron.com",
        "referer: https://twiron.com/vlss?sid=".$sig."",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: Mozilla/5.0 (Linux; Android 10; SDM845 for arm64 Build/QD4A.200805.003) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.80 Mobile Safari/537.36",
);
$log = "https://twiron.com/vlss?view=ok&sid=".$sig."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ress = curl_exec($ch);


$ua = array(
        "Host: twiron.com",
        "referer: https://twiron.com/vlss?sid=".$sig."",
        "content-type: application/x-www-form-urlencoded",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
        "user-agent: ".$us."",
);
$log = "https://twiron.com/vlss?view=ok&ds=clicked&sid=".$sig."";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $log);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$rez = curl_exec($ch);

$succ = explode('</span>' ,explode('<td style="width: 100%; padding: 0 20px 0 0;" align="left"><span style="font-size:16px; color:#FFFFFF; text-shadow: 0 1px 0 rgba(0, 0, 0, 0.9);">', $rez)[1])[0];
if($succ == ""){goto a;}else{
	echo " \033[1;97m ".$succ." \n";sleep(3);goto b;}


a:
$url = "https://aviso.bz/work-youtube";
$rev = curl_request($url, 'GET');
$ball = explode('</span>' ,explode('id="new-money-ballans">', $rev)[1])[0];
$id = explode("," ,explode("funcjs['start_youtube'](", $rev)[1])[0];
$hashh = explode(" 'ads-start" ,explode("funcjs['start_youtube'](", $rev)[1])[0];
$hashes = explode(", ", $hashh);
$hash = trim($hashes[1], "',");
if($hash == ""){
$gg = 1500;
timer($gg);
goto b;
}

$url = 'https://aviso.bz/ajax/earnings/ajax-youtube.php';
$data = "id=".$id."&hash=".$hash."&func=ads-start&user_response=&count_captcha_subscribe=&checkStepOneCaptchaSubscribe=false&visitor_id=&request_id=";
$res = curl_request($url, 'POST', $data);
$tiim = explode('\"' ,explode('data-timer=\"', $res)[1])[0];
$idd = explode('\"' ,explode('<span id=\"ads-timer-show-', $res)[1])[0];
$repo = explode('&' ,explode('report_id=', $res)[1])[0];
$has = explode('\"' ,explode('hash=', $res)[1])[0];
$vid = explode('&' ,explode('video_id=', $res)[1])[0];
$mer = explode('&' ,explode('timer=', $res)[1])[0];
timer($mer);

$url = 'https://aviso.bz/ajax/earnings/ajax-youtube-external.php';
$data = "hash=".$has."&report_id=".$repo."&task_id=".$idd."&timer=".$tim."&player_time=".$mer."&video_id=".$vid."&stage=1";
$response = request($url, 'POST', $data);
$suc = explode('<' ,explode('<b>', $response)[1])[0];

echo "\033[1;97m Balance = \033[1;92m".$ball." \n";
echo " \033[1;97mSucces claim \033[1;93m".$suc." \n";
echo " \033[1;90m========================= \n";
}

