<?php

namespace app\feedback;
use app\common\controller\InfoBase;

/**
 * Feedback应用
 */
class Info extends InfoBase{
    public $info = array(
            'name'=>'feedback',
            'title'=>'用户反馈',
            'description'=>'',
            'author'=>'hzy',
            'version'=>'0.1',
            'has_adminlist'=>1
        );

    //自定义权限规则
    public $auth_rule = [];

    //自定义积分规则
    public $credit_config = [];

    //自定义入口地址,默认是lists或者config
    public $init_url = [];

    function reply($dataArr, $keywordArr = []) {
        $config = getAddonConfig ( 'Feedback' ); // 获取后台应用的配置参数
        //dump($config);
    }

    public function install() {
        $install_sql = env('app_path').'feedback/install.sql';
        if (file_exists ( $install_sql )) {
            execute_sql_file ( $install_sql );
        }
        return true;
    }
    public function uninstall() {
        $uninstall_sql = env('app_path').'feedback/uninstall.sql';
        if (file_exists ( $uninstall_sql )) {
            execute_sql_file ( $uninstall_sql );
        }
        return true;
    }
}
