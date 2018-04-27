<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      //  $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
       // echo C('name'),'<br>';

       // echo C('sex');
        /*
         * URL模式有四中，需要配置URL_MODEL
         * 配置为1，默认模式，即pathinfo模式
         * /think/index.php/Home/Index/user/id/1.html
         * 配置为0，普通模式
         * /think/index.php?m=Home&c=Index&a=user&id=1
         * 配置为2，重写模式
         * /think/Home/Index/user/id/1.html
         * 配置为3，兼容模式
         * /think/index.php?s=/Home/Index/user/id/1.html
         */
        echo C('URL_MODEL').'<br/>';
        //U('模块/方法', array('id'=>1), 'xxx html htm shtml',true/false, 'localhost')
        echo U('Index/user', array('id'=>1), 'html', false, 'localhost');
    }
    public function user(){
        echo 'id is:'.$_GET['id'].'<br/>';
        echo '这里是INDEX模块的user方法';
    }
}

