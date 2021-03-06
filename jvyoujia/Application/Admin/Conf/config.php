<?php
return array(
    //'配置项'=>'配置值'

    //资源列表
    'TMPL_PARSE_STRING' => array(
        '__ASSETS__' => '/assets/' . strtolower(MODULE_NAME), // 存放js css images 等静态文件
        '__COMMON__' => '/assets/common', // 存放公共js css images 等静态文件
    ),

    'TMPL_ACTION_ERROR' => dirname(__DIR__) . '/Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件

    /**
     * 订单列表 订单状态
     */
    'ORDER_STATUS'  =>  array(
        '1' => '待付款',
        '2' => '待发货',
        '3' => '待收货',
        '4' => '已关闭',
        '5' => '未付款删除',
        '6' => '已付款删除',
        '9' => '交易完成',
    ),

    /**
     * 配送方式
     * 1-只工作日送货(双休日、假日不用送);
     * 2-只双休日、假日送货(工作日不用送);
     * 3-工作日、双休日与假日均可送货;
     * 其他值-返回"任意时间"
     */
    'DELIVERY_TYPE' => array(
        '1' => '只工作日送货(双休日、假日不用送)',
        '2' => '只双休日、假日送货(工作日不用送)',
        '3' => '工作日、双休日与假日均可送货',
        '0' => '任意时间',
    ),

    /**
     * 支付方式
     */
    'PAY_STYLE' => array(
        '0' => '货到付款/到店付款',
        '1' => '微信安全支付',
        '2' => '银行卡支付',
        '3' => '找人代付',
    ),


);