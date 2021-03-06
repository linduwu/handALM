<?php
$module_name = 'HAT_Meter_Readings';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'hat_meters_hat_meter_readings_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accumulat',
            'label' => 'LBL_ACCUMULAT',
          ),
          1 => 
          array (
            'name' => 'reading_type',
            'studio' => 'visible',
            'label' => 'LBL_READING_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reading_this_time',
            'label' => 'LBL_READING_THIS_TIME',
          ),
          1 => 
          array (
            'name' => 'reading_uom',
            'studio' => 'visible',
            'label' => 'LBL_READING_UOM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
        5 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
?>
