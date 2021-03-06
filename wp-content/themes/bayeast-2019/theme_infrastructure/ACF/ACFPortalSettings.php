<?php
namespace ThemeInfrastructure\ACF;

class ACFPortalSettings
{
    public static function setup()
    {
        self::addPortalOptionsPage();
    }
    private static function addPortalOptionsPage()
    {
      if( function_exists('acf_add_local_field_group') ):
        acf_add_options_page(array(
            'page_title' => 'Staging Member Portal Settings',
            'menu_title' => 'Staging Member Portal Settings',
            'menu_slug'  => 'acf-options-staging-member-portal-settings',
            'capability' => 'manage_options',
            'redirect'   => false,
        ));
        acf_add_local_field_group(array(
        	'key' => 'group_59c05a94e6d7b',
        	'title' => 'Member Portal API URLs',
        	'fields' => array(
        		array(
        			'key' => 'field_59c05ad55f86c',
        			'label' => 'Member Billing API URL',
        			'name' => 'member_billing_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=MemberBilling.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa1857f64f',
        			'label' => 'Member Billing Migration Message',
        			'name' => 'member_billing_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c12816ba4b2',
        			'label' => 'Broker Detail API URL',
        			'name' => 'broker_detail_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=brokerdetail.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa1a27f650',
        			'label' => 'Broker Detail Migration Message',
        			'name' => 'broker_detail_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c12880ba4b3',
        			'label' => 'Payment History API URL',
        			'name' => 'payment_history_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=PaymentHistory.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa1bc67208',
        			'label' => 'Payment History Migration Message',
        			'name' => 'payment_history_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c128b1ba4b4',
        			'label' => 'Update Card API URL',
        			'name' => 'update_card_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=UpdateCard.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa1d867209',
        			'label' => 'Update Card Migration Message',
        			'name' => 'update_card_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c128d6ba4b5',
        			'label' => 'Auto Pay API URL',
        			'name' => 'auto_pay_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=AutoPay.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa1ee50f3e',
        			'label' => 'Auto Pay Migration Message',
        			'name' => 'auto_pay_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c12940ba4b7',
        			'label' => 'Class History API URL',
        			'name' => 'class_history_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=ClassHistory.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3aa21ec71c3',
        			'label' => 'Class History Migration Message',
        			'name' => 'class_history_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_59c12903ba4b6',
        			'label' => 'Member Maintenance API URL',
        			'name' => 'member_maintenance_api_url',
        			'type' => 'text',
        			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/
        http://stagingbayeast.wpengine.com/member-menu/account/?page=MemberMaintenance.html',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3bfbe653396',
        			'label' => 'Member Maintenance Migration Message',
        			'name' => 'member_maintenance_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3d6ef9580db',
        			'label' => 'Find an Affiliate API URL',
        			'name' => 'find_an_affiliate_api_url',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3d7017580dc',
        			'label' => 'Find an Affiliate Migration Message',
        			'name' => 'find_an_affiliate_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3d745ada9a7',
        			'label' => 'Generic Pay API URL',
        			'name' => 'generic_pay_api_url',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5a3d7467da9a8',
        			'label' => 'Generic Pay Migration Message',
        			'name' => 'generic_pay_migration_message',
        			'type' => 'text',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        		array(
        			'key' => 'field_5bbfdb1034104',
        			'label' => 'Class Registration API URL',
        			'name' => 'class_registration_api_url',
        			'type' => 'text',
        			'instructions' => 'https://bayeastwebportaltest.azurewebsites.net',
        			'required' => 1,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'prepend' => '',
        			'append' => '',
        			'maxlength' => '',
        		),
        	),
        	'location' => array(
        		array(
        			array(
        				'param' => 'options_page',
        				'operator' => '==',
        				'value' => 'acf-options-staging-member-portal-settings',
        			),
        		),
        	),
        	'menu_order' => 0,
        	'position' => 'normal',
        	'style' => 'default',
        	'label_placement' => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen' => '',
        	'active' => 1,
        	'description' => '',
        ));


                acf_add_options_page(array(
                    'page_title' => 'Prod Member Portal Settings',
                    'menu_title' => 'Prod Member Portal Settings',
                    'menu_slug'  => 'acf-options-prod-member-portal-settings',
                    'capability' => 'manage_options',
                    'redirect'   => false,
                ));

                acf_add_local_field_group(array(
                	'key' => 'group_5bebeb968db1c',
                	'title' => 'Prod Member Portal API URLs',
                	'fields' => array(
                		array(
                			'key' => 'field_5bebebf257bd8',
                			'label' => 'Prod Member Billing API URL',
                			'name' => 'prod_member_billing_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=MemberBilling.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebec1b57bd9',
                			'label' => 'Prod Member Billing Migration Message',
                			'name' => 'prod_member_billing_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebec4457bda',
                			'label' => 'Prod Broker Detail API URL',
                			'name' => 'prod_broker_detail_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=brokerdetail.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebec6357bdb',
                			'label' => 'Prod Broker Detail Migration Message',
                			'name' => 'prod_broker_detail_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebec7a57bdc',
                			'label' => 'Prod Payment History API URL',
                			'name' => 'prod_payment_history_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=PaymentHistory.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebec8d57bdd',
                			'label' => 'Prod Payment History Migration Message',
                			'name' => 'prod_payment_history_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebeca257bde',
                			'label' => 'Prod Update Card API URL',
                			'name' => 'prod_update_card_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=UpdateCard.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebecb757bdf',
                			'label' => 'Prod Update Card Migration Message',
                			'name' => 'prod_update_card_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebecc457be0',
                			'label' => 'Prod Auto Pay API URL',
                			'name' => 'prod_auto_pay_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=AutoPay.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed1757be1',
                			'label' => 'Prod Auto Pay Migration Message',
                			'name' => 'prod_auto_pay_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed2557be2',
                			'label' => 'Prod Class History API URL',
                			'name' => 'prod_class_history_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/?page=ClassHistory.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed3d57be3',
                			'label' => 'Prod Class History Migration Message',
                			'name' => 'prod_class_history_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed4d57be4',
                			'label' => 'Prod Member Maintenance API URL',
                			'name' => 'prod_member_maintenance_api_url',
                			'type' => 'text',
                			'instructions' => 'http://stagingbayeast.wpengine.com/member-menu/account/ http://stagingbayeast.wpengine.com/member-menu/account/?page=MemberMaintenance.html',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed5f57be5',
                			'label' => 'Prod Member Maintenance Migration Message',
                			'name' => 'prod_member_maintenance_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed7257be6',
                			'label' => 'Prod Find an Affiliate API URL',
                			'name' => 'prod_find_an_affiliate_api_url',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 1,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed8257be7',
                			'label' => 'Prod Find an Affiliate Migration Message',
                			'name' => 'prod_find_an_affiliate_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed9057be8',
                			'label' => 'Prod Generic Pay API URL',
                			'name' => 'prod_generic_pay_api_url',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebed9f57be9',
                			'label' => 'Prod Generic Pay Migration Message',
                			'name' => 'prod_generic_pay_migration_message',
                			'type' => 'text',
                			'instructions' => '',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                		array(
                			'key' => 'field_5bebedad57bea',
                			'label' => 'Prod Class Registration API URL',
                			'name' => 'prod_class_registration_api_url',
                			'type' => 'text',
                			'instructions' => 'https://bayeastwebportaltest.azurewebsites.net',
                			'required' => 0,
                			'conditional_logic' => 0,
                			'wrapper' => array(
                				'width' => '',
                				'class' => '',
                				'id' => '',
                			),
                			'default_value' => '',
                			'placeholder' => '',
                			'prepend' => '',
                			'append' => '',
                			'maxlength' => '',
                		),
                	),
                	'location' => array(
                		array(
                			array(
                				'param' => 'options_page',
                				'operator' => '==',
                				'value' => 'acf-options-prod-member-portal-settings',
                			),
                		),
                	),
                	'menu_order' => 0,
                	'position' => 'normal',
                	'style' => 'default',
                	'label_placement' => 'top',
                	'instruction_placement' => 'label',
                	'hide_on_screen' => '',
                	'active' => 1,
                	'description' => '',
                ));


        endif;
    }
}
