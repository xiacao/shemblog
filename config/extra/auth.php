<?php
// +----------------------------------------------------------------------
// | 青春博客 thinkphp5 版本
// +----------------------------------------------------------------------
// | Copyright (c) 2013~2016 http://loveteemo.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: long <admin@loveteemo.com>
// +----------------------------------------------------------------------
return [

	// +----------------------------------------------------------------------
	// | 常用配置 这里的对其方式需要改成 tab
	// +----------------------------------------------------------------------
	'qqgroup'		=>	'4554660101',
	'qqjoin'		=>	'http://jq.qq.com/?_wv=1027&k=dSjBgy',
	'baiduurl'		=>	'http://koubei.baidu.com/w/loveteemo.com',
	'githuburl'		=>	'https://github.com/loveteemo',
	'weibourl'		=>	'http://weibo.com/iteemo',
	'blogname'		=>	'青春博客',
	'framework'		=>	'ThinkPHP 5',
	'author'		=>	'long',
	'docurl'		=>	'http://doc.loveteemo.com/',
	'adminname'		=>	'隆航',
	'comview'		=>	1,
	'dehits'		=>	5,
    'baiduapi'      =>  '73df7bf1e7ee3b02e8c1bf77c3f7c281',

	// 后台授权用户
	'access'		=>	[
		'7C8F797F30B08554A6E39A537F9A324B'
	],

	// QQ 互联配置
	'qqconnect' => [
		'appid'		=>	'101489824',
		'appkey'	=>	'c897b9a52d3830e628de2c6cc4f0d6c7',
        // log www 和 不带www 会有一个出现域名不匹配
        'callback'  =>  'http://'.$_SERVER['HTTP_HOST'].'/index/base/callback',
		'scope'		=>	'get_user_info'
	],

];