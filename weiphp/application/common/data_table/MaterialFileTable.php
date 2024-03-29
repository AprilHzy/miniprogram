<?php
/**
 * MaterialFile数据模型
 */
class MaterialFileTable {
    // 数据表模型配置
    public $config = [
      'name' => 'material_file',
      'title' => '文件素材',
      'search_key' => '',
      'add_button' => 1,
      'del_button' => 1,
      'search_button' => 1,
      'check_all' => 1,
      'list_row' => 10,
      'addon' => 'core'
  ];

    // 列表定义
    public $list_grid = [ ];

    // 字段定义
    public $fields = [
      'title' => [
          'title' => '素材名称',
          'field' => 'varchar(100) NULL',
          'type' => 'string',
          'is_show' => 1
      ],
      'file_id' => [
          'title' => '上传文件',
          'type' => 'file',
          'field' => 'int(10) NULL',
          'is_show' => 1,
          'validate_file_exts' => 'mp4',
          'validate_file_size' => 10485760
      ],
      'cover_url' => [
          'title' => '本地URL',
          'field' => 'varchar(255) NULL',
          'type' => 'string'
      ],
      'media_id' => [
          'title' => '微信端图文消息素材的media_id',
          'field' => 'varchar(100) NULL',
          'type' => 'string',
          'value' => 0
      ],
      'wechat_url' => [
          'title' => '微信端的文件地址',
          'field' => 'varchar(255) NULL',
          'type' => 'string'
      ],
      'cTime' => [
          'title' => '创建时间',
          'field' => 'int(10) NULL',
          'type' => 'datetime',
          'auto_rule' => 'time',
          'auto_time' => 1,
          'auto_type' => 'function'
      ],
      'manager_id' => [
          'title' => '管理员ID',
          'field' => 'int(10) NULL',
          'type' => 'num',
          'auto_rule' => 'get_mid',
          'auto_time' => 1,
          'auto_type' => 'function'
      ],
      'pbid' => [
          'title' => 'pbid',
          'field' => 'int(10) NOT NULL',
          'type' => 'string',
          'auto_rule' => 'get_pbid',
          'auto_time' => 1,
          'auto_type' => 'function',
          'value' => 0
      ],
      'type' => [
          'title' => '类型',
          'field' => 'int(10) NULL',
          'type' => 'num',
          'extra' => '1:语音素材
2:视频素材'
      ],
      'introduction' => [
          'title' => '描述',
          'type' => 'textarea',
          'field' => 'text NULL',
          'remark' => '可使用动态替换字符， {@nickname}代表粉丝昵称，{@openid}代表粉丝在公众号下的唯一标识openid'
      ],
      'is_use' => [
          'title' => '可否使用',
          'field' => 'int(10) NULL',
          'type' => 'num',
          'extra' => '0:不可用
1:可用',
          'value' => 1
      ],
      'aim_id' => [
          'title' => '添加来源标识id',
          'field' => 'int(10) NULL',
          'type' => 'num'
      ],
      'aim_table' => [
          'title' => '来源表名',
          'field' => 'varchar(255) NULL',
          'type' => 'string'
      ],
      'admin_uid' => [
          'title' => '操作员UID',
          'field' => 'int(11) NULL',
          'type' => 'string'
      ],
      'pub_id' => [
          'title' => '共享素材ID，用于去重',
          'field' => 'int(11) NULL',
          'type' => 'string'
      ]
  ];
}