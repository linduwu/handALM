<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAA_Maps'] = array(
	'table'=>'haa_maps',
	'audited'=>true,
    'inline_edit'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
      'map_file' => 
      array (
        'required' => false,
        'name' => 'map_file',
        'vname' => 'LBL_MAP_FILE',
        'type' => 'image',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => 0,
        'audited' => false,
        'inline_edit' => '',
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 255,
        'size' => '20',
        'studio' => 'visible',
        'dbType' => 'varchar',
        'border' => '',
        'width' => '1920',
        'height' => '',
        ),

      'file_url' =>
      array(
        'name' => 'file_url',
        'vname' => 'LBL_FILE_URL',
        'type' => 'function',
        'function_require' => 'include/upload_file.php',
        'function_class' => 'UploadFile',
        'function_name' => 'get_url',
        'function_params' => array('filename', 'id'),
        'source' => 'function',
        'reportable' => false,
        'comment' => 'Path to file (can be URL)'
        ),
      ),
    'relationships'=>array (

        'hat_asset_locations_haa_maps' => 
        array (
            'lhs_module' => 'HAA_Maps',
            'lhs_table'     => 'haa_maps',
            'lhs_key'       => 'id',
            'rhs_module' => 'HAT_Asset_Locations',
            'rhs_table'     => 'hat_asset_locations',
            'rhs_key'       => 'map_layer_id',
            'relationship_type' => 'one-to-many',
            ),

        ),
    'optimistic_locking'=>true,
    'unified_search'=>true,
    );
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAA_Maps','HAA_Maps', array('basic','security_groups'));