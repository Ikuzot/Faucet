<?php
system('clear');
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
function curl_request($url, $method, $data = null) {
    $header = array(
        "Host: cryptofenz.xyz",
        "X-Requested-With: XMLHttpRequest",
        "dnt: 1",
        "upgrade-insecure-requests: 1",
        "cookie: _pbjs_userid_consent_data=3524755945110770;_sharedID=c225946d-927d-4465-8ad0-44404d5852c6;ci_session=f4dee93f300fa5dafc7bdaabccc4bbd4e2a8e071;csrf_cookie_name=2c3cc6c771d34c6e40472bbec16ffe88;_ga=GA1.1.897375382.1690218011;__ppIdCC=xryptowddikiwtea_atore210.96189164.1;__viCookieActive=true;_ga_EGT54VKW40=GS1.1.1690218011.1.1.1690218027.0.0.0;pn-zone-4704002=1694106028429;prefetchAd_6125799=true",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
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

while(true):
a:
$url = "https://cryptofenz.xyz/auto";
$res = curl_request($url, 'GET');
$tok = explode('">' ,explode('<input type="hidden" name="token" value="', $res)[1])[0];
$tim = explode(',' ,explode('let timer =', $res)[1])[0];

timer($tim);
sleep(1);
$url = 'https://cryptofenz.xyz/auto/verify';
$data = "token=".$tok."";
$response = curl_request($url, 'POST', $data);
$suc = explode("to your balance" ,explode("Good job!', '", $response)[1])[0];
$successMessage = "15 tokens has been added";
if($suc == ""){goto a;}else{echo "" .$suc ." \n";}
     

endwhile;
