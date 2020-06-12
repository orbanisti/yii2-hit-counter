<?php
/**
 * HitCounterSearchModel
 */
namespace coderius\hitCounter\models;

use Yii;
use yii\base\Model;
use coderius\hitCounter\Module;
use yii\db\ActiveRecord;

class HitCounterSearchModel extends ActiveRecord {
    // const SCENARIO_CREATE = 'create';
    // const SCENARIO_UPDATE = 'update';
    public static function tableName()
    {
        return 'hit_counter';
    }


    // public function init()
    // {
    //     parent::init();
    //     if ($this->getScenario() === self::SCENARIO_CREATE) {
    //         $this->setAttributes([
    //             'status' => $this->status === null ? CommentEnum::STATUS_ACTIVE : $this->status,
    //         ], false);
    //     }
    // }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['counter_id'], 'required'],
            [['js_cookei_enabled', 'js_java_enabled', 'js_timezone_offset', 'js_screen_width', 'js_screen_height', 'js_color_depth', 'js_history_length', 'js_is_toutch_device', 'js_processor_ram', 'serv_auth_user_id', 'serv_is_proxy_or_vpn', 'serv_port'], 'integer'],
            [['serv_cookies','js_current_url', 'js_referer_url','serv_referer_url','serv_user_agent'], 'string'],
            [['counter_id', 'js_timezone', 'js_connection', 'js_browser_language',  'serv_server_name', 'serv_os', 'serv_client', 'serv_device', 'serv_brand', 'serv_model', 'serv_bot', 'serv_host_by_ip'], 'string', 'max' => 255],
            [['cookie_mark'], 'string', 'max' => 32],
            [['serv_ip'], 'string', 'max' => 20],
            [['cookie_mark', 'js_current_url', 'serv_ip', 'js_timezone_offset','js_timezone', 'js_connection','js_referer_url','js_screen_width','js_screen_height','js_color_depth','js_browser_language','js_history_length','js_processor_ram','serv_user_agent','serv_referer_url','serv_server_name','serv_auth_user_id','serv_port','serv_cookies','serv_os','serv_client','serv_device','serv_brand','serv_model','serv_bot','serv_host_by_ip'], 'default', 'value' => null],
        ];
    }
  
    // public function scenarios()
    // {
    //     $scenarios = parent::scenarios();
    //     $scenarios[self::SCENARIO_CREATE] = ['entity', 'entity_id', 'content', 'parentId', 'status', 'guest_name'];
    //     // $scenarios[self::SCENARIO_UPDATE] = ['entity', 'entity_id', 'content', 'parentId'];
    //     return $scenarios;
    // }

    
}

