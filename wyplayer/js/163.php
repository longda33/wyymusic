<?php
$id = $_GET["id"];
$type = $_GET["type"];
if($type=='mp3'){
    echo get_audio($id);
}elseif($type=='lrc'){
	echo get_lrc($id);
}elseif($type=='pic'){
	echo get_pic($id);
}else{
	die('参数错误！');
}
// get_lrc($id);
function get_audio($id){
	$url = 'http://music.163.com/api/song/detail/?id='.$id.'&ids=['.$id.']';
	$con = curl_163($url,'');
	$json = json_decode($con,true);
	$audio = $json['songs'][0]['mp3Url'];
	if ($audio) {
		return $audio;
	}else {
	    echo "<p style='color: #F00;'>There is no such ID</p>";
	}
}
function get_pic($id){
	$url = 'http://music.163.com/api/song/detail/?id='.$id.'&ids=['.$id.']';
	$con = curl_163($url,'');
	$json = json_decode($con,true);
	$pic = $json["songs"][0]["album"]["picUrl"];
	if ($pic) {
        return $pic;
	}else {
	    echo "<p style='color: #F00;'>There is no such ID</p>";
	}
}
function get_lrc($id){
    $url = "http://music.163.com/api/song/lyric?os=pc&id=".$id."&lv=-1&kv=-1&tv=-1";
    $json_data = curl_163($url);
    $arr = (array) json_decode($json_data,true);
    $lrc = $arr['lrc']['lyric'];
    if ($lrc) {
    	echo "var cont = '" . $lrc . "';";
    }else{
    	return "undefined";
    }
}
function curl_163($url){
    $refer = "http://music.163.com/";
    $header[] = "Cookie: " . "appver=1.5.0.75771;";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, $refer);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
?>