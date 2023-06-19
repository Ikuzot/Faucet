<?php
error_reporting(0);
const 
script = "avisobiz v1",
url = "https://aviso.bz/",
cookie = 1;


$function = file_get_contents("https://rentry.co/function_ver1/raw");
eval($function);


function h(){
    $ua = ["Host: aviso.bz",
     #       "accept: */*",
            "x-requested-with: XMLHttpRequest",
            "user-agent: ".save("user-agent"),
            "cookie: ".save("cookie")
          ];
    return $ua;
}
function bal(){
    $r = get(url."work-serf", h());
    return x('id="new-money-ballans">', ' ', $r, 1);
}
function get_data(){
    $r = get(url."work-serf", h());
    $ide = x("funcjs['go-serf']('", "')", $r, 1);
    $id = explode("','", $ide);
    file_put_contents('id.txt', $id[0]);
    return "id=".$id[0]."&hash=".$id[1]."&func=go-serf";
}

function get_sid(){
    $r = json_decode(post(url.'ajax/earnings/ajax-serf.php', get_data(), array_merge(h(),["referer: https://aviso.bz/work-serf", "accept: application/json, text/javascript, */*; q=0.01"])), 1);
    $sid = x('sid=', '&', $r['html'],1);
    return $sid;
}

function windowads(){
    while(true){
        $sid = get_sid();
        if($sid){
            $ua = [
            "Host: twiron.com",
            "upgrade-insecure-requests: 1",
            "sec-fetch-dest: frame",
            "user-agent: ".save("user-agent"),
            "sec-fetch-site: same-origin",
            "sec-fetch-mode: navigate",
            "sec-fetch-user: ?1",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
            ];
            $r = get("https://twiron.com/view_surfing?sid=".$sid."&id=".file_get_contents('id.txt'), $ua);
            get("https://twiron.com/vlss?sid=".$sid, $ua);
            a:
            $r2 =  get("https://twiron.com/fraim_start?sid=".$sid, $ua);
            $id = x('https://aviso.bz/go/fraim-link.php?id=', '"', $r2, 1);
                
            $ro =  get("https://aviso.bz/go/fraim-link.php?id=".$id, h());
            $url = x('location.replace("', '"', $ro, 1);
            get($url, []);
            timer(10);
            $ua = array_merge(["referer: https://twiron.com/vlss?sid=".$sid], $ua);
            get("https://twiron.com/vlss?view=ok&sid=".$sid, $ua);
            $ua = array_merge(["referer: https://twiron.com/vlss?view=ok&sid=".$sid], $ua);
            $r = get("https://twiron.com/vlss?view=ok&ds=clicked&sid=".$sid, $ua);
            $suc = x("parent.okno.postMessage('", "'", $r, 1);
                if($suc){
                    echo h.strip_tags(json_decode($suc, 1)['mess']).n;
                    echo p."balance : ".h.bal().n;
                    echo g();
                }else{
                    break;
                }
                    
        }else{
            break;
        }
    }
}

function get_datayt(){
    $r = get(url."work-youtube", h());
    $ide = x("funcjs['start_youtube'](", "')", $r, 1);
    $id = explode(", '", $ide);
    file_put_contents('id.txt', $id[0]);
    return "id=".$id[0]."&hash=".str_replace("'","",$id[1])."&func=ads-start&user_response=&count_captcha_subscribe=&checkStepOneCaptchaSubscribe=false";
}

function yt(){
    while(true){
        $ua = array_merge(['accept:application/json, text/javascript, */*; q=0.01','content-type:application/x-www-form-urlencoded; charset=UTF-8','sec-ch-ua-mobile:?1','sec-fetch-site:same-origin','sec-fetch-mode:cors','sec-fetch-dest:empty',  'referer:https://aviso.bz/work-youtube'], h());
        $r = post(url.'ajax/earnings/ajax-youtube.php', get_datayt(), $ua);
        $json = json_decode($r,true);        
        $getlink = explode('"',explode('data-meta="',$json['html'])[1])[0];
        $id_video = explode('&',explode('video_id=',$json['html'])[1])[0];
        $time_video = explode('"',explode('data-timer="',$json['html'])[1])[0];
        $hash_video = explode('"',explode('hash=',$json['html'])[1])[0];
        $report_id = explode('&',explode('report_id=',$json['html'])[1])[0];
         timer($time_video);
        $id = file_get_contents('id.txt');
        $ua = array_merge(['accept:application/json, text/javascript, */*; q=0.01','content-type:application/x-www-form-urlencoded; charset=UTF-8','sec-ch-ua-mobile:?1','sec-fetch-site:same-origin','sec-fetch-mode:cors','sec-fetch-dest:empty',  'referer:https://skyhome.squarespace.com/'], h());
        $r = json_decode(post(url.'ajax/earnings/ajax-youtube-external.php', "hash=".$hash_video."&report_id=".$report_id."&task_id=".$id."&timer=".$time_video."&player_time=".$time_video.".190681877929688&video_id=".$id_video."&stage=2", $ua), 1)['html'];
        $suc = x("parent.opener.postMessage('", "'", $r, 1);
                if($suc){
                    echo h.strip_tags(json_decode($suc, 1)['mess']).n;
                    echo p."balance : ".h.bal().n;
                    echo g();
            }else{
                break;
            }
    }
}

bn();
echo p."balance : ".h.bal().n.n;
s:
windowads();
yt();
unlink('cookie.txt');
timer(120);
goto s;
