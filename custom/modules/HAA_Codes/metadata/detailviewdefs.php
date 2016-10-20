<?php
$module_name = 'HAA_Codes';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0=>
        array(
          0=>'framework',
          1=>''
        ),
        1 => 
        array (
          0 => 'code_module',
          1 => 
          array (
            'name' => 'code_type',
            'studio' => 'visible',
            'label' => 'LBL_CODE_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'name',
          1 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'haa_ff',
            'studio' => 'visible',
            'label' => 'LBL_HAA_FF',
          ),
          1 => 
          array (
            'name' => 'code_tag',
            'label' => 'LBL_CODE_TAG',
          ),
        ),
      ),
    ),
  ),
);
?>
