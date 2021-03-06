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

$dictionary['HAT_Asset_QUAL'] = array(

	'table'=>'hat_asset_qual',
	'audited'=>true,
	'inline_edit'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
		'haa_frameworks_id' => 
		array (
			'required' => false,
			'name' => 'haa_frameworks_id',
			'vname' => 'LBL_DOMAIN_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'domain' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'domain',
			'vname' => 'LBL_DOMAIN',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'haa_frameworks_id',
			'ext2' => 'HAA_Frameworks',
			'module' => 'HAA_Frameworks',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'code_asset_qualification_type_id' =>
		array (
			'inline_edit' => 1,
			'required' => false,
			'name' => 'code_asset_qualification_type_id',
			'vname' => 'LBL_ASSET_QUALIFICATION_TYPE_ID',
			'type' => 'id',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '36',
			'size' => '20',
			'id' => 'code_asset_qualification_type_id',
			),
		'code_asset_qualification_type' =>
		array (
			'inline_edit' => '',
			'required' => true,
			'source' => 'non-db',
			'name' => 'code_asset_qualification_type',
			'vname' => 'LBL_ASSET_QUALIFICATION_TYPE',
			'type' => 'relate',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'code_asset_qualification_type_id',
			'ext2' => 'HAA_Codes',
			'module' => 'HAA_Codes',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			'id' => 'code_asset_location_type_id',
			),		

		'hat_assets_id' => 
		array (
			'required' => false,
			'name' => 'hat_assets_id',
			'vname' => 'LBL_HAT_ASSETS_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'asset' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'asset',
			'vname' => 'LBL_ASSET',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'hat_assets_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'asset_desc' =>
		array (
        'source' => 'non-db', //显示当前资产的说明
        'name' => 'asset_desc',
        'vname' => 'LBL_ASSET_DESC',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
		'location' =>
		array (
        'source' => 'non-db', //显示当前地点的说明
        'name' => 'location',
        'vname' => 'LBL_LOCATION',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
		'location_desc' =>
		array (
        'source' => 'non-db', //显示当前地点的说明
        'name' => 'location_desc',
        'vname' => 'LBL_LOCATION_DESC',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
		'interval_period' => 
		array (
			'required' => true,
			'name' => 'interval_period',
			'vname' => 'LBL_INTERVAL',
			'type' => 'int',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => '',
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'enable_range_search' => false,
			'disable_num_format' => '',
			'min' => false,
			'max' => false,
			),
		'interval_uom' =>
		array (
			'required' => true,
			'default' => "DAY",
			'name' => 'interval_uom',
			'vname' => 'LBL_INTERVAL_UOM',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'haa_interval_uom',
			),
					'qual_range' =>
		array (
			'required' => false,
			'name' => 'qual_range',
			'vname' => 'LBL_QUAL_RANGE',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'measure_precision' =>
		array (
			'required' => false,
			'name' => 'measure_precision',
			'vname' => 'LBL_MEASURE_PRESION',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'delicated' => 
		array (
			'required' => false,
			'name' => 'delicated',
			'vname' => 'LBL_DELICATED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'enforced' => 
		array (
			'required' => false,
			'name' => 'enforced',
			'vname' => 'LBL_ENFORCED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'standard' => 
		array (
			'required' => false,
			'name' => 'standard',
			'vname' => 'LBL_STANDARD',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'on_site_service' => 
		array (
			'required' => false,
			'name' => 'on_site_service',
			'vname' => 'LBL_ON_SITE_SERVICE',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'mgmt_criticality' => 
		array (
			'required' => false,
			'name' => 'mgmt_criticality',
			'vname' => 'LBL_MGMT_CRITICALITY',
			'type' => 'enum',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 100,
			'size' => '20',
			'options' => 'asset_criticality_list',
			'studio' => 'visible',
			'dependency' => false,
			),
		'lastest_qual_org_id' => 
		array (
			'required' => false,
			'name' => 'lastest_qual_org_id',
			'vname' => 'LBL_LASTEST_QUAL_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'lastest_qual_org' => 
		array (
			'required' => false,
            'source' => 'non-db', //显示最新监测单位
            'name' => 'lastest_qual_org',
            'vname' => 'LBL_LASTEST_QUAL_ORG',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'lastest_qual_org_id',
            'ext2' => 'Accounts',
            'module' => 'Accounts',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            ),
		'first_qual_org_id' => 
		array (
			'required' => false,
			'name' => 'first_qual_org_id',
			'vname' => 'LBL_FIRST_QUAL_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'first_qual_org' => 
		array (
			'required' => false,
            'source' => 'non-db', //显示最新监测单位
            'name' => 'first_qual_org',
            'vname' => 'LBL_FIRST_QUAL_ORG',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'first_qual_org_id',
            'ext2' => 'Accounts',
            'module' => 'Accounts',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            ),
		'second_qual_org_id' => 
		array (
			'required' => false,
			'name' => 'second_qual_org_id',
			'vname' => 'LBL_SECOND_QUAL_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'second_qual_org' => 
		array (
			'required' => false,
            'source' => 'non-db', //显示最新监测单位
            'name' => 'second_qual_org',
            'vname' => 'LBL_SECOND_QUAL_ORG',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'second_qual_org_id',
            'ext2' => 'Accounts',
            'module' => 'Accounts',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            ),
		'third_qual_org_id' => 
		array (
			'required' => false,
			'name' => 'third_qual_org_id',
			'vname' => 'LBL_THIRD_QUAL_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'third_qual_org' => 
		array (
			'required' => false,
            'source' => 'non-db', //显示最新监测单位
            'name' => 'third_qual_org',
            'vname' => 'LBL_THIRD_QUAL_ORG',
            'type' => 'relate',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'inline_edit' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
            'id_name' => 'third_qual_org_id',
            'ext2' => 'Accounts',
            'module' => 'Accounts',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
            ),
		'last_qual_result_passed' => 
		array (
			'required' => false,
			'name' => 'last_qual_result_passed',
			'vname' => 'LBL_LAST_QUAL_RESULT_PASSED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'last_qual_result_desc' => 
		array (
			'required' => false,
			'name' => 'last_qual_result_desc',
			'vname' => 'LBL_LAST_QUAL_RESULT_DESC',
			'type' => 'text',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			), 
		'latest_qual_date' => 
		array (
			'required' => false,
			'name' => 'latest_qual_date',
			'vname' => 'LBL_LATEST_QUAL_DATE',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false
			),

		'effective_end_date' => 
		array (
			'required' => false,
			'name' => 'effective_end_date',
			'vname' => 'LBL_EFFECTIVE_END_DATE',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false
			),
    'attribute1' => 
    array (
      'required' => false,
      'name' => 'attribute1',
      'vname' => 'LBL_ATTRIBUTE1',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ),
    'attribute2' => 
    array (
      'required' => false,
      'name' => 'attribute2',
      'vname' => 'LBL_ATTRIBUTE2',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ),
    'attribute3' => 
    array (
      'required' => false,
      'name' => 'attribute3',
      'vname' => 'LBL_ATTRIBUTE3',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ),
    'attribute4' => 
    array (
      'required' => false,
      'name' => 'attribute4',
      'vname' => 'LBL_ATTRIBUTE4',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ), 
    'attribute5' => 
    array (
      'required' => false,
      'name' => 'attribute5',
      'vname' => 'LBL_ATTRIBUTE5',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ),
		'hat_asset_qual_details_link' =>
		array(
			'name' => 'hat_asset_qual_details_link',
			'type' => 'link',
			'relationship' => 'hat_asset_qual_details_hat_asset_qual',
      //'vname' => 'LBL_UOM',
			'link_type' => 'many',
			'module' => 'HAT_Asset_QUAL_Details',
			'bean_name' => 'HAT_Asset_QUAL_Details',
			'source' => 'non-db',
			),

		),
'relationships'=>array (
	'hat_asset_qual_details_hat_asset_qual' => 
	array (
		'lhs_module' => 'HAT_Asset_QUAL',
		'lhs_table' => 'hat_asset_qual',
		'lhs_key' => 'id',
		'rhs_module' => 'HAT_Asset_QUAL_Details',
		'rhs_table' => 'hat_asset_qual_details',
		'rhs_key' => 'hat_asset_qual_id',
		'relationship_type' => 'one-to-many',
		),
	),
'optimistic_locking'=>true,
'unified_search'=>true,
);
if (!class_exists('VardefManager')){
	require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Asset_QUAL','HAT_Asset_QUAL', array('basic','assignable','security_groups'));