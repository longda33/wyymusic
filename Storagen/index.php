<!DOCTYPE html>
<html>
 <head> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
  <title>唯爱音乐接口开放平台 - 网页悬浮音乐播放器</title> 
  <link href="https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/css/buttons.css?v=1.7" rel="stylesheet" /> 
  <style type="text/css">p,strong{
    font: 100 12px/18px monaco,andale mono,courier new;
}
.STYLE1 {color: #000}
.STYLE2 {color: #000000}
.STYLE3 {color: #a50}
.STYLE4 {font-size: 15px;}
.STYLE5 {color: #009688}
.STYLE6 {font-size: 12px}
.STYLE7 {color: #000000}
.STYLE8 {color: #FF0000}
	</style> 
 </head> 
 <body> 
  <div style="margin-left: auto;margin-right: auto;max-width: 1000px;width: 90%;"> 
   <h2 class="h_title log_title"></h2> 
   <p style="text-align: center;"><img src="https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/Adminln.png" /></p> 
   <p class="STYLE7"><strong><span style="font-size:10px;">声明:仅供个人学习研究使用、音乐版权归网易云音乐所有！（ 复制以下三行代码到自己服务器、即可接入播放器 注：第二行代码请修改播放器名称、个人网易云ID、播放器欢迎语）</span></strong></p> 
   <pre class="STYLE6" style="margin:20px 0;font:100 12px/18px monaco, andale mono, courier new;padding:10px 12px;border:#ddd 1px solid;border-left-width:4px;background-color:#fefefe;box-shadow:0 0 4px #eee;word-break:break-all;word-wrap:break-word;color:#444">
<span style="color:#673ab7;">&lt;script type=&quot;text/javascript&quot; src=&quot;https://lib.baomitu.com/jquery/2.1.4/jquery.min.js&quot;&gt;&lt;/script&gt;</span>
<span style="color:#673ab7;">﻿&lt;script&gt;auto=&quot;open&quot;;random=&quot;open&quot;;name=&quot;名称&quot;;geci=&quot;open&quot;;user=&quot;网易云ID&quot;;welcome=&quot;open&quot;;tips=&quot;欢迎语&quot;;&lt;/script&gt;</span>
<span style="color:#673ab7;">&lt;script type=&quot;text/javascript&quot; src=&quot;https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/music.js&quot;&gt;&lt;/script&gt;</span></pre> 
   <p class="STYLE8"><strong><span style="font-size:10px;">配置文档:以下为播放器配置文档，可修改是否自动播放，是否显示歌词，是否启用网站欢迎语！欢迎各位大佬加我QQ共同开发做的更好，大家可以加技术QQ群共同交流学习）</span></strong></p> 
   <pre class="STYLE6" style="margin:20px 0;font:100 12px/18px monaco, andale mono, courier new;padding:10px 12px;border:#ddd 1px solid;border-left-width:4px;background-color:#fefefe;box-shadow:0 0 4px #eee;word-break:break-all;word-wrap:break-word;color:#444">
<span style="color:#000">默认自动播放，随机播放，歌词打开，修改可添加以下参数。</span>
<p></p>
<span style="color:#000">auto</span>           <span style="color:#a50">//colse 不自动播放</span>  <span class="STYLE3">open 自动播放</span>
<span style="color:#000">random</span>         <span style="color:#a50">//colse 顺序播放</span>  <span class="STYLE3">open 随机播放</span>
<span style="color:#000">name</span>           <span style="color:#a50">//播放器名名称</span>  <span class="STYLE3">注：不可为空</span>
<span style="color:#000">geci</span>           <span style="color:#a50">//colse 歌词不显示</span>  <span class="STYLE3">open显示歌词</span>
<span class="STYLE1">user           </span><span style="color:#a50">//网易主页个人ID</span>  <span class="STYLE3">注：不可为空</span>
<span class="STYLE2">welcome </span>  <span class="STYLE3">     //colse  关闭网站欢迎语     open打开</span>
<span class="STYLE2">tips</span>   <span class="STYLE3">        //网站欢迎语      注：不可为空</span>
<p></p>
<span class="STYLE2">为了防止配置发生错误，导致配置文件在服务器无法及时清除，请访问以下链接清理所有用户配置文件。
手动执行删除配置文件链接：https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/index.php</span>
<p></p>
<span class="STYLE2">为了节省资源，所有歌单缓存至服务器，每次添加音乐后，需要手动执行删除缓存，大约一周服务器也可以自动删除缓存。
手动执行更新歌曲链接：https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/wy_list.php?mode=del_cache&amp;parm=网易主页个人ID </span></pre> 
   <p class="STYLE5"><strong><span style="font-size:13px;">音乐播放器演示效果在本页面即可看到，支持所有PHP网站。（请用电脑、IPAD等设备访问本页面，手机访问时默认不加载播放器。）</span></strong></p> 
   <br /> 
  </div> 
  <!--Xiao Zou Network Studio--> 
  <script type="text/javascript" src="https://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script> 
  <script>auto="open";random="open";name="唯爱网络";geci="colse";user="117504348";welcome="open";tips="Welcome to 唯爱网络API";</script> 
  <script type="text/javascript" src="https://<?php echo $_SERVER['HTTP_HOST'];?>/wyplayer/music.js"></script> 
  <!--Xiao Zou Network Studio-->  
 </body>
</html>