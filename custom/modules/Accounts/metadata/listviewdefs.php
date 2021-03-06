<?php
$listViewDefs ['Accounts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'FULL_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_FULL_NAME',
    'width' => '25%',
  ),
  'ORGANIZATION_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ORGANIZATION_NUMBER',
    'width' => '10%',
  ),
  'BUSINESS_TYPE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BUSINESS_TYPE',
    'id' => 'HAA_CODES_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'ORG_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ORG_TYPE',
    'width' => '10%',
  ),
  'IS_LE_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_LE',
    'width' => '5%',
  ),
  'IS_CUSTOMER_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_CUSTOMER',
    'width' => '10%',
  ),
  'IS_SUPPLIER_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_SUPPLIER',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => false,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => false,
  ),
  'ANNUAL_REVENUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ANNUAL_REVENUE',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PHONE_FAX',
    'default' => false,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => false,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => false,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '20%',
    'default' => false,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'RATING' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RATING',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'RESPONSIBLE_PERSON_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RESPONSIBLE_PERSON',
    'width' => '10%',
  ),
  'RESPONSIBLE_PERSON_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RESPONSIBLE_PERSON_ID',
    'width' => '10%',
  ),
  'SALES_ORG_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SALES_ORG',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SERVICE_ORG_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SERVICE_ORG',
    'id' => 'ACCOUNT_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'SALES_RESPONSIBLE_PERSON_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SALES_RESPONSIBLE_PERSON',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'SERVICE_RESPONSIBLE_PERSON_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SERVICE_RESPONSIBLE_PERSON',
    'id' => 'CONTACT_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'OWNERSHIP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OWNERSHIP',
    'default' => false,
  ),
  'EMPLOYEES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMPLOYEES',
    'default' => false,
  ),
  'REGISTRATION_ID_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REGISTRATION_ID',
    'width' => '10%',
  ),
  'REGISTRATION_CAPITAL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REGISTRATION_CAPITAL',
    'width' => '10%',
  ),
  'SIC_CODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SIC_CODE',
    'default' => false,
  ),
  'TICKER_SYMBOL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TICKER_SYMBOL',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'ATTRIBUTE1_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ATTRIBUTE1',
    'width' => '10%',
  ),
  'ATTRIBUTE2_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ATTRIBUTE2',
    'width' => '10%',
  ),
  'ATTRIBUTE3_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ATTRIBUTE3',
    'width' => '10%',
  ),
  'ATTRIBUTE4_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ATTRIBUTE4',
    'width' => '10%',
  ),
  'ATTRIBUTE5_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ATTRIBUTE5',
    'width' => '10%',
  ),
);
?>
