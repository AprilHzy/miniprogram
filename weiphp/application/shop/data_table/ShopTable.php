<?php
/**
 * Shop数据模型
 */
class ShopTable {
    // 数据表模型配置
    public $config = [
      'name' => 'shop',
      'title' => '微商城',
      'search_key' => 'title:请输入商店名称',
      'add_button' => 1,
      'del_button' => 1,
      'search_button' => 1,
      'check_all' => 1,
      'list_row' => 20,
      'addon' => 'shop'
  ];

    // 列表定义
    public $list_grid = [
      'title' => [
          'title' => '商店名称'
      ],
      'logo' => [
          'title' => '商店LOGO',
          'function' => 'get_img_html',
          'raw' => 1
      ],
      'urls' => [
          'title' => '操作',
          'come_from' => 1,
          'href' => [
              '0' => [
                  'title' => '编辑',
                  'url' => '[EDIT]'
              ],
              '1' => [
                  'title' => '商品分类',
                  'url' => 'Category/lists&target=_blank&wpid=[id]'
              ],
              '2' => [
                  'title' => '幻灯片',
                  'url' => 'Slideshow/lists&target=_blank&wpid=[id]'
              ],
              '3' => [
                  'title' => '商品管理',
                  'url' => 'Goods/lists&target=_blank&wpid=[id]'
              ],
              '4' => [
                  'title' => '订单管理',
                  'url' => 'Order/lists&target=_blank&wpid=[id]'
              ],
              '5' => [
                  'title' => '支付配置',
                  'url' => 'Payment/Payment/lists&target=_blank&wpid=[id]'
              ],
              '6' => [
                  'title' => '模板选择',
                  'url' => 'Template/lists&target=_blank&wpid=[id]'
              ],
              '7' => [
                  'title' => '删除',
                  'url' => '[DELETE]'
              ],
              '8' => [
                  'title' => '预览',
                  'url' => 'Wap/index&target=_blank&wpid=[id]'
              ]
          ]
      ]
  ];

    // 字段定义
    public $fields = [
      'title' => [
          'title' => '商店名称',
          'field' => 'varchar(255) NOT NULL',
          'type' => 'string',
          'is_show' => 1,
          'is_must' => 1
      ],
      'logo' => [
          'title' => '商店LOGO',
          'type' => 'picture',
          'field' => 'int(10) NULL',
          'remark' => '建议上传100X100的正方形图片'
      ],
      'api_key' => [
          'title' => '快递接口的APPKEY',
          'field' => 'varchar(100) NULL',
          'type' => 'string',
          'remark' => '申请地址：http://www.juhe.cn/docs/api/id/43',
          'is_show' => 1
      ],
      'order_payok_messageid' => [
          'title' => '交易完成通知的模板ID',
          'type' => 'string',
          'field' => 'varchar(100) NULL',
          'remark' => '为空时不发模板消息; 请先在公众号先添加模板再把模板id配置到这边（搜索模板标题：交易完成通知，模板编号：OPENTM207287582，行业：IT科技 - 互联网|电子商务）'
      ],
      'wpid' => [
          'title' => 'wpid',
          'field' => 'int(11) NULL',
          'type' => 'string',
          'auto_rule' => 'get_wpid',
          'auto_time' => 1,
          'auto_type' => 'function'
      ],
      'tcp' => [
          'title' => '客户协议',
          'type' => 'editor',
          'field' => 'text NULL',
          'is_show' => 1
      ],
      'intro' => [
          'title' => '店铺简介',
          'field' => 'text NULL',
          'type' => 'string'
      ],
      'mobile' => [
          'title' => '联系电话',
          'field' => 'varchar(30) NULL',
          'type' => 'string'
      ],
      'qq' => [
          'title' => 'QQ',
          'field' => 'int(10) NULL',
          'type' => 'string'
      ],
      'wechat' => [
          'title' => '微信',
          'field' => 'varchar(50) NULL',
          'type' => 'string'
      ],
      'template' => [
          'title' => '模板',
          'field' => 'varchar(30) NULL',
          'type' => 'string'
      ],
      'content' => [
          'title' => '店铺介绍',
          'field' => 'text NULL',
          'type' => 'string'
      ],
      'manager_id' => [
          'title' => '管理员ID',
          'field' => 'int(10) NULL',
          'type' => 'string'
      ],
      'parent_shop' => [
          'title' => '分销上级商店',
          'field' => 'varchar(255) NULL',
          'type' => 'string'
      ],
      'address' => [
          'title' => '详细地址',
          'field' => 'varchar(255) NULL',
          'type' => 'string'
      ],
      'gps' => [
          'title' => 'GPS经纬度',
          'field' => 'varchar(55) NULL',
          'type' => 'string'
      ],
      'custom_tip' => [
          'title' => '联系客服提示内容',
          'field' => 'text NULL',
          'type' => 'string'
      ]
  ];
}