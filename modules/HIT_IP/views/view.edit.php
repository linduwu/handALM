<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class HIT_IPViewEdit extends ViewEdit
{

    function Display() {

        global $db;
        global $current_user;

        //0.处理头与行的语言包
        $modules = array('HIT_IP', 'HIT_IP_Subnets');

        foreach ($modules as $module) {
            if (!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once 'include/language/jsLanguage.php';
                jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
            }
            echo '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['js_version_key'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
        };



        //1、初始化Framework-Site信息
        require_once('modules/HAA_Frameworks/orgSelector_class.php');
        $current_site_id = empty($this->bean->ham_maint_sites_id)?"":$this->bean->ham_maint_sites_id;
        $current_module = $this->module;
        $current_action = $this->action;
        $this->ss->assign('MAINT_SITE',set_site_selector($current_site_id,$current_module,$current_action));

        parent::Display();
    }
}