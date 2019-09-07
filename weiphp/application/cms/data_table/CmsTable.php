<?php
/**
 * Cms数据模型
 */
class CmsTable {
    // 数据表模型配置
    public $config = [
      'name' => 'cms',
      'title' => 'cms内容',
      'search_key' => 'title:请输入标题进行搜索',
      'add_button' => 1,
      'del_button' => 1,
      'search_button' => 1,
      'check_all' => 1,
      'list_row' => 20,
      'addon' => 'cms'
  ];

    // 列表定义
    public $list_grid = [
      'title' => [
          'title' => '文章标题'
      ],
      'img' => [
          'title' => '封面图'
      ],
      'cTime' => [
          'title' => '发布时间'
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
                  'title' => '删除',
                  'url' => '[DELETE]'
              ]
          ]
      ]
  ];

    // 字段定义
    public $fields = [
      'title' => [
          'title' => '标题',
          'type' => 'string',
          'field' => 'varchar(255) NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ],
      'img' => [
          'title' => '封面图',
          'type' => 'picture',
          'field' => 'int(10) unsigned NOT NULL',
          'remark' => '上传图片大小建议不超过500K',
          'is_show' => 1,
          'is_must' => 1
      ],
      'content' => [
          'title' => '正文内容',
          'type' => 'textarea',
          'field' => 'text NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ],
      'cTime' => [
          'title' => '发布时间',
          'type' => 'datetime',
          'field' => 'int(10) NULL',
          'auto_type' => 'function',
          'auto_rule' => 'time',
          'auto_time' => 1
      ],
      'content_f' => [
          'title' => '富文本内容',
          'type' => 'editor',
          'field' => 'text  NOT NULL',
          'is_show' => 1,
          'is_must' => 1
      ]
  ];
}