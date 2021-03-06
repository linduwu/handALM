<?php
$module_name = 'AOS_Invoices';
$_object_name = 'aos_invoices';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/AOS_Invoices/js/AOS_Invoices_editview.js',
          ),
        ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          ),
        ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
          ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
          ),
        ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PANEL_OVERVIEW' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
          ),
        'LBL_INVOICE_TO' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
          ),
        'LBL_LINE_ITEMS' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
          ),
        'LBL_BUS_SOURCE' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
          ),
        ),
      ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'framework_c',
            'studio' => 'visible',
            'label' => 'LBL_FRAMEWORK',
            'customCode' => '{$FRAMEWORK_C}',
            ),
          1 => 
          array (
            'name' => 'event_type_c',
            'label' => 'LBL_EVENT_TYPE',
            'displayParams' => 
            array (
              'initial_filter' => '&basic_type_advanced=INVOICE',
              'field_to_name_array' => 
              array (
                'name' => 'event_type_c',
                'id' => 'hat_eventtype_id_c',
                'haa_ff_id' => 'haa_ff_id',
                ),
              'call_back_function' => 'setEventTypeReturn',
              ),
            ),
          ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'source_code_c',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE_CODE',
            'customCode' => '<select name="{$fields.source_code_c.name}" onchange="resetParentInfo();" id="{$fields.source_code_c.name}" title="" tabindex="s">{if isset($fields.source_code_c.value) && $fields.source_code_c.value != ""}{html_options options=$fields.source_code_c.options selected=$fields.source_code_c.value}{else}{html_options options=$fields.source_code_c.options selected="Manual"}{/if}</select><input name="source_id_c"  id="source_id_c"  type="hidden" value="{$fields.source_id_c.value}">',
            ),
          1 => 
          array (
            'name' => 'source_reference_c',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE_REFERENCE',
            ),
          ),
        ),
      'LBL_PANEL_OVERVIEW' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
              ),
            'label' => 'LBL_NAME',
            ),
          1 => 
          array (
            'name' => 'number',
            'label' => 'LBL_INVOICE_NUMBER',
            'customCode' => '{$fields.number.value}',
            ),
          ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quote_number',
            'label' => 'LBL_QUOTE_NUMBER',
            ),
          1 => 
          array (
            'name' => 'quote_date',
            'label' => 'LBL_QUOTE_DATE',
            ),
          ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'due_date',
            'displayParams' => 
            array (
              'required' => true,
              ),
            'label' => 'LBL_DUE_DATE',
            ),
          1 => 
          array (
            'name' => 'invoice_date',
            'label' => 'LBL_INVOICE_DATE',
            ),
          ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'clear_date_c',
            'label' => 'LBL_CLEAR_DATE',
            ),
          1 => 
          array (
            'name' => 'closed_date_c',
            'label' => 'LBL_CLOSED_DATE',
            ),
          ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'late_days_c',
            'label' => 'LBL_LATE_DAYS',
            'customCode' => '{$fields.late_days_c.value}',
            ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
            ),
          ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
      'LBL_INVOICE_TO' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_account',
            'label' => 'LBL_BILLING_ACCOUNT',
            'displayParams' => 
            array (
              'key' => 
              array (
                0 => 'billing',
                1 => 'shipping',
                ),
              'copy' => 
              array (
                0 => 'billing',
                1 => 'shipping',
                ),
              'billingKey' => 'billing',
              'shippingKey' => 'shipping',
              ),
            ),
          ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_contact',
            'label' => 'LBL_BILLING_CONTACT',
            'displayParams' => 
            array (
              'initial_filter' => '&account_name="+this.form.{$fields.billing_account.name}.value+"',
              'field_to_name_array' => 
              array (
                'name' => 'billing_contact',
                'id' => 'billing_contact_id',
                'employee_number_c' => 'billing_contact_number',
                ),
              ),
            ),
          1 => 
          array (
            'name' => 'billing_contact_number',
            'label' => 'LBL_BILLING_CONTACT_NUMBER',
            'customCode' => '<input type="text" readonly="readonly" name="billing_contact_number" id="billing_contact_number" value="{$fields.billing_contact_number.value}">',
            ),
          ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
              ),
            'label' => 'LBL_BILLING_ADDRESS_STREET',
            ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
              ),
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
            ),
          ),
        ),
      'lbl_line_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
            ),
          ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
            ),
          ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
            ),
          ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
            ),
          ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_amount',
            'label' => 'LBL_SUBTOTAL_AMOUNT',
            ),
          ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'shipping_amount',
            'label' => 'LBL_SHIPPING_AMOUNT',
            'displayParams' => 
            array (
              'field' => 
              array (
                'onblur' => 'calculateTotal(\'lineItems\');',
                ),
              ),
            ),
          ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'shipping_tax_amt',
            'label' => 'LBL_SHIPPING_TAX_AMT',
            ),
          ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tax_amount',
            'label' => 'LBL_TAX_AMOUNT',
            ),
          ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
            ),
          ),
        ),
      'LBL_BUS_SOURCE' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent_number',
            'label' => 'LBL_PARENT_NUMBER',
            'customCode' => '<input value="{$fields.parent_number.value}" class="sqsEnabled" autocomplete="off" type="text" name="parent_number" id="parent_number"><button type="button" tabindex="116" class="button" name="btn1" onclick="openParentPopup();"><img src="themes/default/images/id-ff-select.png"></button><input type="hidden"  name="parent_id" id="parent_id" value="{$fields.parent_id.value}">',
            ),
          1=> array (
            'name' => 'parent_name',
            'label' => 'LBL_PARENT_NAME',
            'customCode' => '<input type="text" readonly="readonly" name="parent_name" id="parent_name" value="{$fields.parent_name.value}">',
            ),
          ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_class',
            'label' => 'LBL_PARENT_CLASS',
            'customCode' => '<input type="text" readonly="readonly" name="parent_class" id="parent_class" value="{$fields.parent_class.value}">',
            ),
          1 => 
          array (
            'name' => 'parent_sub_type',
            'label' => 'LBL_PARENT_SUB_TYPE',
            'customCode' => '<input type="text" readonly="readonly" name="parent_sub_type" id="parent_sub_type" value="{$fields.parent_sub_type.value}">',
            ),
          ),
        ),
      ),
),
);
?>
