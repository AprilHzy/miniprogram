<?php
/**
 * Feedback数据模型
 */
class FeedbackTable {
    // 数据表模型配置
    public $config = [
      'name' => 'feedback',
      'title' => '用户反馈',
      'search_key' => 'username:请输入姓名搜索',
      'add_button' => 0,
      'del_button' => 1,
      'search_button' => 1,
      'check_all' => 1,
      'list_row' => 20,
      'addon' => 'feedback'
  ];

    // 列表定义
    public $list_grid = [
      'username' => [
          'title' => '姓名'
      ],
      'product' => [
          'title' => '产品'
      ],
      'channel' => [
          'title' => '渠道'
      ],
      'area' => [
          'title' => '地区'
      ],
      'score' => [
          'title' => '打分',
          'width' => 10
      ],
      'is_dev' => [
          'title' => '前端',
          'width' => 10
      ],
      'cTime' => [
          'title' => '反馈时间'
      ]
  ];

    // 字段定义
    public $fields = [
      'username' => [
          'title' => '姓名',
          'type' => 'string',
          'field' => 'varchar(255) NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ],
      'product' => [
          'title' => '关注的产品',
          'type' => 'checkbox',
          'field' => 'varchar(100) NOT NULL',
          'extra' => '0:微商城
1:微社区
2:小程序
3:公众号',
          'is_show' => 1,
          'is_must' => 1
      ],
      'channel' => [
          'title' => '来源渠道',
          'type' => 'radio',
          'field' => 'char(10) NOT NULL',
          'extra' => '0:微商城
1:微社区
2:小程序
3:公众号',
          'is_show' => 1,
          'is_must' => 1
      ],
      'area' => [
          'title' => '你所在地区',
          'type' => 'dynamic_select',
          'field' => 'varchar(100) NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ],
      'score' => [
          'title' => '打分',
          'type' => 'num',
          'field' => 'int(10) NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ],
      'is_dev' => [
          'title' => '是否是前端开发人员',
          'type' => 'bool',
          'field' => 'tinyint(2) NOT NULL',
          'extra' => '0:否
1:是',
          'is_show' => 1,
          'is_must' => 1
      ],
      'cTime' => [
          'title' => '反馈时间',
          'type' => 'datetime',
          'field' => 'int(10) NULL'
      ]
  ];
}