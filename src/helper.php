<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2021 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types=1);

use Think\Component\Response\Response;
use Think\Component\Response\Driver\File;
use Think\Component\Response\Driver\Json;
use Think\Component\Response\Driver\Jsonp;
use Think\Component\Response\Driver\Redirect;
use Think\Component\Response\Driver\View;
use Think\Component\Response\Driver\Xml;

if (!function_exists('download')) {
    /**
     * 获取Download对象实例
     * @param string $filename 要下载的文件
     * @param string $name     显示文件名
     * @param bool   $content  是否为内容
     * @param int    $expire   有效期（秒）
     * @return File
     */
    function download(string $filename, string $name = '', bool $content = false, int $expire = 180): File
    {
        return Response::create($filename, 'file')->name($name)->isContent($content)->expire($expire);
    }
}

if (!function_exists('json')) {
    /**
     * 获取Json对象实例
     * @param mixed $data    返回的数据
     * @param int   $code    状态码
     * @param array $header  头部
     * @param array $options 参数
     * @return Json
     */
    function json($data = [], $code = 200, $header = [], $options = []): Json
    {
        return Response::create($data, 'json', $code)->header($header)->options($options);
    }
}

if (!function_exists('jsonp')) {
    /**
     * 获取Jsonp对象实例
     * @param mixed $data    返回的数据
     * @param int   $code    状态码
     * @param array $header  头部
     * @param array $options 参数
     * @return Jsonp
     */
    function jsonp($data = [], $code = 200, $header = [], $options = []): Jsonp
    {
        return Response::create($data, 'jsonp', $code)->header($header)->options($options);
    }
}

if (!function_exists('redirect')) {
    /**
     * 获取Redirect对象实例
     * @param string $url  重定向地址
     * @param int    $code 状态码
     * @return Redirect
     */
    function redirect(string $url = '', int $code = 302): Redirect
    {
        return Response::create($url, 'redirect', $code);
    }
}

if (!function_exists('response')) {
    /**
     * 创建普通 Response 对象实例
     * @param mixed      $data   输出数据
     * @param int|string $code   状态码
     * @param array      $header 头信息
     * @param string     $type
     * @return Response
     */
    function response($data = '', $code = 200, $header = [], $type = 'html'): Response
    {
        return Response::create($data, $type, $code)->header($header);
    }
}

if (!function_exists('view')) {
    /**
     * 渲染模板输出
     * @param string   $template 模板文件
     * @param array    $vars     模板变量
     * @param int      $code     状态码
     * @param callable $filter   内容过滤
     * @return View
     */
    function view(string $template = '', $vars = [], $code = 200, $filter = null): View
    {
        return Response::create($template, 'view', $code)->assign($vars)->filter($filter);
    }
}

if (!function_exists('display')) {
    /**
     * 渲染模板输出
     * @param string   $content 渲染内容
     * @param array    $vars    模板变量
     * @param int      $code    状态码
     * @param callable $filter  内容过滤
     * @return View
     */
    function display(string $content, $vars = [], $code = 200, $filter = null): View
    {
        return Response::create($content, 'view', $code)->isContent(true)->assign($vars)->filter($filter);
    }
}

if (!function_exists('xml')) {
    /**
     * 获取Xml对象实例
     * @param mixed $data    返回的数据
     * @param int   $code    状态码
     * @param array $header  头部
     * @param array $options 参数
     * @return Xml
     */
    function xml($data = [], $code = 200, $header = [], $options = []): Xml
    {
        return Response::create($data, 'xml', $code)->header($header)->options($options);
    }
}