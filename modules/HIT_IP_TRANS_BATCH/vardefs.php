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

$dictionary['HIT_IP_TRANS_BATCH'] = array (
	'table' => 'hit_ip_trans_batch',
	'audited' => false,
	'inline_edit' => false,
	'duplicate_merge' => false,
	'fields' => array (
		'name' => array (
			'name' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'name',
			'link' => true,
			'dbType' => 'varchar',
			'len' => '255',
			'unified_search' => true,
			'full_text_search' => array (
				'boost' => 3,

				
			),
			'required' => true,
			'importable' => 'required',
			'duplicate_merge' => 'disabled',
			'merge_filter' => 'disabled',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'size' => '20',

			
		),
		'tracking_number' => array (
			'name' => 'tracking_number',
			'vname' => 'LBL_TRACKING_NUMBER',
			'type' => 'varchar',
			'len' => '255',
			'unified_search' => true,
			'required' => false,
			'importable' => 'required',
			'duplicate_merge' => 'disabled',
			'merge_filter' => 'disabled',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'size' => '20',

			
		),
		'asset_trans_status' => array (
			'required' => true,
			'name' => 'asset_trans_status',
			'vname' => 'LBL_ASSET_TRANS_STATUS',
			'type' => 'enum',
			'massupdate' => '1',
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
			'len' => 100,
			'size' => '20',
			'options' => 'asset_trans_status',
			'studio' => 'visible',
			'dependency' => false,
			'default' => 'DRAFT',

			
		),
		'hat_asset_status' => array (
			'source' => 'non-db', //从EventType映射
	'name' => 'hat_asset_status',
			'vname' => 'LBL_TARGET_ASSET_STATUS',
			'type' => 'enum',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible',
			'options' => 'hat_asset_status_list',

			
		),

		'haa_frameworks_id' => array (
			'required' => false,
			'name' => 'haa_frameworks_id',
			'vname' => 'LBL_FRAMEWORKS_ID',
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
		'framework' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'framework',
			'vname' => 'LBL_FRAMEWORKS',
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
		'hat_eventtype_id' => array (
			'required' => false,
			'name' => 'hat_eventtype_id',
			'vname' => 'LBL_HAT_EVENTTYPE_ID',
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
		'event_type' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'event_type',
			'vname' => 'LBL_EVENT_TYPE',
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
			'id_name' => 'hat_eventtype_id',
			'ext2' => 'HAT_EventType',
			'module' => 'HAT_EventType',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'current_owning_org_id' => array (
			'required' => false,
			'name' => 'current_owning_org_id',
			'vname' => 'LBL_CURRENT_OWNING_ORG_ID',
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
		'current_owning_org' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'current_owning_org',
			'vname' => 'LBL_CURRENT_OWNING_ORG',
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
			'id_name' => 'current_owning_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'target_owning_org_id' => array (
			'required' => false,
			'name' => 'target_owning_org_id',
			'vname' => 'LBL_TARGET_OWNING_ORG_ID',
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
		'target_owning_org' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'target_owning_org',
			'vname' => 'LBL_TARGET_OWNING_ORG',
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
			'id_name' => 'target_owning_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'source_wo_id' => array (
			'required' => false,
			'name' => 'source_wo_id',
			'vname' => 'LBL_SOURCE_WO_ID',
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
		'source_wo' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'source_wo',
			'vname' => 'LBL_SOURCE_WO',
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
			'id_name' => 'source_wo_id',
			'ext2' => 'HAM_WO',
			'module' => 'HAM_WO',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'source_woop_id' => array (
			'required' => false,
			'name' => 'source_woop_id',
			'vname' => 'LBL_SOURCE_WOOP_ID',
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
		'source_woop' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'source_woop',
			'vname' => 'LBL_SOURCE_WOOP',
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
			'id_name' => 'source_woop_id',
			'ext2' => 'HAM_WOOP',
			'module' => 'HAM_WOOP',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'owner_id' => array (
			'required' => false,
			'name' => 'owner_id',
			'vname' => 'LBL_OWNER_ID',
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
		'owner_contacts' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'owner_contacts',
			'vname' => 'LBL_OWNER',
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
			'id' => 'owner_id',
			'id_name' => 'owner_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'line_items' => array (
			'required' => false,
			'name' => 'line_items',
			'vname' => 'LBL_LINE_ITEMS',
			'type' => 'function',
			'source' => 'non-db',
			'massupdate' => 0,
			'importable' => 'false',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'reportable' => false,
			'function' => array (
				'name' => 'display_lines',
				'returns' => 'html',
				'include' => 'modules/HIT_IP_TRANS_BATCH/Render_Line_Items.php'
			),

			
		),

		'hit_ip_trans_batch_hit_ip_trans' => array (
			'name' => 'hit_ip_trans_batch_hit_ip_trans',
			'type' => 'link',
			'relationship' => 'hit_ip_trans_batch_hit_ip_trans',
			'source' => 'non-db',
			'module' => 'HIT_IP_TRANS',
			'bean_name' => 'HIT_IP_TRANS',
			'side' => 'right',
			'vname' => 'LBL_HIT_IP_TRANS_BATCH_HIT_IP_TRANS_FROM_HIT_IP_TRANS_TITLE',

			
		),

		'service_date' => array (
			'required' => true,
			'name' => 'service_date',
			'vname' => 'LBL_SERVICE_DATE',
			'type' => 'datetimecombo',
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
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',

			
		),

		'send_to_customer' => array (
			'required' => false,
			'name' => 'send_to_customer',
			'vname' => 'LBL_SEND_TO_CUSTOMER',
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

		'account_id' => array (
			'required' => false,
			'name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_ID',
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

		'contact_name' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'contact_name',
			'vname' => 'LBL_CONTACT_NAME',
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
			'id_name' => 'account_id', //返回的值 显示name存储id
	'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name', //在界面上面显示其他模块的 HAT_Assets的Name字段 也就是前台显示
	'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		'email' => array (
			'source' => 'non-db',
			'name' => 'email',
			'vname' => 'LBL_EMAIL',
			'type' => 'varchar',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible'
		),

		'attribute1' => array (
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
		'attribute2' => array (
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
		'attribute3' => array (
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
		'attribute4' => array (
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
		'attribute5' => array (
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
		'attribute6' => array (
			'required' => false,
			'name' => 'attribute6',
			'vname' => 'LBL_ATTRIBUTE6',
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
		
		'wo_lines' =>
		array (
			'source' => 'non-db', //从EventType映射
			'name' => 'wo_lines',
			'vname' => 'LBL_WO_LINES',
			'type' => 'varchar',
			'default'=>'',
			'reportable' => true,
			'studio' => 'visible',
			),

		
	),
	'relationships' => array (
		'hit_ip_trans_batch_hit_ip_trans' => array (
			'lhs_module' => 'HIT_IP_TRANS_BATCH',
			'lhs_table' => 'hit_ip_trans_batch',
			'lhs_key' => 'id',
			'rhs_module' => 'HIT_IP_TRANS',
			'rhs_table' => 'hit_ip_trans',
			'rhs_key' => 'hit_ip_trans_batch_id',
			'relationship_type' => 'one-to-many',

			
		),

		
	),
	'optimistic_locking' => true,
	'unified_search' => true,

	
);
if (!class_exists('VardefManager')) {
	require_once ('include/SugarObjects/VardefManager.php');
}
VardefManager :: createVardef('HIT_IP_TRANS_BATCH', 'HIT_IP_TRANS_BATCH', array (
	'basic',
	'assignable',
	'security_groups'
));