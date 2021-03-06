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

$dictionary['HMM_Trans_History'] = array(
	'table'=>'hmm_trans_history',
	'audited'=>false,
    'inline_edit'=>false,
		'duplicate_merge'=>false,
		'fields'=>array (
	'hmm_trans_lines_id' => 
		array (
			'required' => false,
			'name' => 'hmm_trans_lines_id',
			'vname' => 'LBL_HMM_TRANS_LINES_ID',
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
		'hmm_trans_lines' =>
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'hmm_trans_lines',
			'vname' => 'LBL_TRANS_LINES',
			'type' => 'relate',
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
			'id_name' => 'hmm_trans_lines_id',
			'ext2' => 'HMM_Trans_Lines',
			'module' => 'HMM_Trans_Lines',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),

		'ham_maint_sites_id' =>
		array (
			'required' => false,
			'name' => 'ham_maint_sites_id',
			'vname' => 'LBL_SITE_HAM_MAINT_SITES_ID',
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
		'site' => 
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'site',
			'vname' => 'LBL_SITE',
			'type' => 'relate',
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
			'id_name' => 'ham_maint_sites_id',
			'ext2' => 'HAM_Maint_Sites',
			'module' => 'HAM_Maint_Sites',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'hat_event_type_id' => 
		array (
			'required' => false,
			'name' => 'hat_event_type_id',
			'vname' => 'LBL_EVENT_TYPE_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'event_type' =>
		array (
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
			'id_name' => 'hat_event_type_id',
			'ext2' => 'HAT_EventType',
			'module' => 'HAT_EventType',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'item_id' =>
		array (
			'required' => false,
			'name' => 'item_id',
			'vname' => 'LBL_ITEM_ID',
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
		'inventory_item' =>
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'inventory_item',
			'vname' => 'LBL_ITEM',
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
			'id_name' => 'item_id',
			'ext2' => 'AOS_Products',
			'module' => 'AOS_Products',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'hmm_mo_requests_id' =>
		array (
			'required' => false,
			'name' => 'hmm_mo_requests_id',
			'vname' => 'LBL_HMM_MO_REQUESTS_ID',
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
		'hmm_mo_request' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'hmm_mo_request',
			'vname' => 'LBL_HMM_MO_REQUESTS',
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
			'id_name' => 'hmm_mo_requests_id',
			'ext2' => 'HMM_MO_Requests',
			'module' => 'HMM_MO_Requests',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'ham_woop_id' =>
		array (
			'required' => false,
			'name' => 'ham_woop_id',
			'vname' => 'LBL_WOOP_ID',
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
		'ham_woop' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'ham_woop',
			'vname' => 'LBL_WOOP',
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
			'id_name' => 'ham_woop_id',
			'ext2' => 'HAM_WOOP',
			'module' => 'HAM_WOOP',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'primary_qty' =>
		array(
			'required' => true,
			'name' => 'primary_qty',
			'vname' => 'LBL_PRIMARY_QTY',
			'type' => 'decimal',
			'len' => '18,6',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => 1,
			'reportable' => true,
			'enable_range_search' => true,
			'options' => 'numeric_range_search_dom',
			),
		'secondary_qty' =>
		array(
			'required' => '0',
			'name' => 'secondary_qty',
			'vname' => 'LBL_SECONDARY_QTY',
			'type' => 'currency',
			'len' => '18,6',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => 1,
			'reportable' => true,
			'enable_range_search' => true,
			'options' => 'numeric_range_search_dom',
			),
		'trans_date' =>
		array (
			'required' => true,
			'name' => 'trans_date',
			'vname' => 'LBL_TRANS_DATE',
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
			'display_default' => 'now',
			),
		'primary_uom_id' =>
		array (
			'required' => false,
			'name' => 'primary_uom_id',
			'vname' => 'LBL_PRIMARY_UOM_ID',
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
		'primary_uom' =>
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'primary_uom',
			'vname' => 'LBL_PRIMARY_UOM',
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
			'id_name' => 'primary_uom_id',
			'ext2' => 'HAA_UOM',
			'module' => 'HAA_UOM',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'secondary_uom_id' =>
		array (
			'required' => false,
			'name' => 'secondary_uom_id',
			'vname' => 'LBL_SECONDARY_UOM_ID',
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
		'secondary_uom' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'secondary_uom',
			'vname' => 'LBL_SECONDARY_UOM',
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
			'id_name' => 'secondary_uom_id',
			'ext2' => 'HAA_UOM',
			'module' => 'HAA_UOM',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'from_location_id' =>
		array (
			'required' => false,
			'name' => 'from_location_id',
			'vname' => 'LBL_FROM_LOCATION_ID',
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
		'from_location' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'from_location',
			'vname' => 'LBL_FROM_LOCATION',
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
			'id_name' => 'from_location_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'location_id' =>
		array (
			'required' => false,
			'name' => 'location_id',
			'vname' => 'LBL_LOCATION_ID',
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
		'location' =>
		array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'location',
			'vname' => 'LBL_LOCATION',
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
			'id_name' => 'location_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'locator_id' =>
		array (
			'required' => false,
			'name' => 'locator_id',
			'vname' => 'LBL_LOCATOR_ID',
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
		'locator' =>
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'locator',
			'vname' => 'LBL_LOCATOR',
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
			'id_name' => 'locator_id',
			'ext2' => 'HMM_Locators',
			'module' => 'HMM_Locators',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),

  'basic_type' => 
  array (
    'required' => true,
    'name' => 'basic_type',
    'vname' => 'LBL_BASIC_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'AT_MOVE',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cux_event_type_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
		'tracking_uom_lov' =>
		array (
			'source' => 'non-db',
			'name' => 'tracking_uom_lov',
			'vname' => 'LBL_TRACKING_UOM',
			  'type' => 'enum',// 'enum',
			  'reportable' => true,
			  'studio' => 'visible',
			  'options' => 'cux_products_uom_usage_list',
			  ),
		'tracking_uom' =>
		array (
			'source' => 'non-db',
			'name' => 'tracking_uom',
			'vname' => 'LBL_TRACKING_UOM',
			'type' => 'varchar',
			'reportable' => true,
			'studio' => 'visible',
			),


),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HMM_Trans_History','HMM_Trans_History', array('basic','assignable','security_groups'));