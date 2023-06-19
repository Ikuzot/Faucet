<?php
system('clear');
//system('rm cookie.txt');
error_reporting(0);
function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);        
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); 
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }

function timer($t){
     $timr=time()+$t;
      while(true):
      echo "\r                                                    \r";
      $res=$timr-time();
      if($res < 1){break;}
if($res==$res){
//  $str= str_repeat("\033[1;92m◼",$res)."              \r";
}
      echo " \033[1;97mPlease Wait \033[1;91m".date('i:s',$res)." ";
      sleep(1);
      endwhile;
}


function get($url,$host){
  return curl($url,'',head($host))[1];
}

function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}

function head($host){
$e=rand(000,999);
$user='Mozilla/5.0 (Linux; Android 11; V2043 Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36';
$cookie='ci_session=so9in5jndlo7lg4ktmhkmkl2chukmsa1; csrf_cookie_name=6cecb9ad0653943b882036ddd98a0075; _ga_9HD1CY6DML=GS1.1.1687072986.1.0.1687072986.0.0.0; _ga=GA1.1.368444037.1687072987; _gcl_au=1.1.1032298049.1687072987';
  $h[]="Host: $host";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: $user";
  $h[]="cookie: $cookie";
  return $h;
}

/*
$host="topfaucet.co";
$url="https://topfaucet.co/";
$rev=get($url,$host);
echo($rev);
exit;
$csf = explode('">' ,explode('<input type="hidden" name="csrf_token_name" id="token" value="', $rev)[1])[0];
$host="topfaucet.co";
$login = "https://topfaucet.co/auth/login";
$data = "wallet=ngemudgendar@gmail.com&csrf_token_name=$csf";
$icc = post($login,$data,$host);
$ic = explode("'," ,explode("html: '", $icc)[1])[0];
echo" \033[1;97m$ic \n";

/**/


a:
$host="lalafaucet.online";
$url="https://lalafaucet.online/faucet/currency/matic";
$rev=get($url,$host);
$toki = explode('">' ,explode('<input type="hidden" name="auto_faucet_token" value="', $rev)[1])[0];
$csf = explode('">' ,explode('<input type="hidden" name="csrf_token_name" id="token" value="', $rev)[1])[0];
$tok = explode('">' ,explode('<input type="hidden" name="token" value="', $rev)[1])[0];
//$csf = explode('">' ,explode('<input type="hidden" name="csrf_token_name" id="token" value="', $rev)[1])[0];

$left = explode('<' ,explode('<p class="lh-1 mb-1 font-weight-bold">', $rev)[3])[0];

/*
$dh = 121;
timer($dh);
*/
if($left == ""){
goto a;
}
$host="lalafaucet.online";
$login = "https://lalafaucet.online/faucet/verify/matic";
$data = "auto_faucet_token=$toki&csrf_token_name=$csf&token=$tok";
$cc = post($login,$data,$host);
$dag = explode("try again in a few seconds.'" ,explode("html: '", $cc)[1])[0];
if($dag == "You have been rate-limited. Please "){goto a;}
$suc = explode("to" ,explode("html: '", $cc)[1])[0];
echo" \033[1;97m[$left] \033[1;92m$suc \n";
if($left == "1/480"){
exit;
}
goto a;
