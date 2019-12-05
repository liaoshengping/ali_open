<?php


namespace Liaosp\AliOpen\core;


/**
 * Class BaseClient
 * @package Liaosp\AliOpen\core
 * @property \Liaosp\AliOpen\AliOpen app
 */
class BaseClient
{
    protected $app;

    public $base_url = 'http://gw.open.1688.com/openapi/';

    public $url_info;

    public $res_url;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }


    public function sign(){
        //url 因子
        if(empty($this->url_info)){
            throw new Exception('url因子为空，如无配置，请配置');
        }
        $arr = explode(':',$this->url_info);
        $spacename = $arr[0];
        $arr = explode('-',$arr[1]);
        $version = $arr[1];
        $apiname = $arr[0];
        $url_info = 'param2/'.$version.'/'.$spacename.'/'.$apiname.'/';

        //参数因子
        $appKey = $this->app->appkey;
        $appSecret =$this->app->appsecret;
        $apiInfo = $url_info. $appKey;//此处请用具体api进行替换
        //配置参数，请用apiInfo对应的api参数进行替换
        $code_arr = array_merge([
            'access_token' => $this->app->access_token
        ],$this->app->params);
        $aliParams = array();
        $url_pin = '';
        foreach ($code_arr as $key => $val) {
            $url_pin .=$key.'='.$val.'&';
            $aliParams[] = $key . $val;
        }
        sort($aliParams);
        $sign_str = join('', $aliParams);
        $sign_str = $apiInfo . $sign_str;

        //签名
        $code_sign = strtoupper(bin2hex(hash_hmac("sha1", $sign_str, $appSecret, true)));

        $this->res_url =  $this->base_url.$apiInfo.'?'.$url_pin.'_aop_signature='.$code_sign;
    }

    /**
     * 请求方式
     */
    public function get(){
        $this->sign();
        $file =  file_get_contents($this->res_url);
        return json_decode($file,true);
    }
    /**
     * 请求方式
     */
    public function post(){

    }

    //设置地址
    public function setApi($comalibabatradealibabatradegetbuyerView){
        $this->url_info = $comalibabatradealibabatradegetbuyerView;
        return $this;
    }

}
