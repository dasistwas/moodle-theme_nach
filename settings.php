<?php
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

	$name = 'theme_nach/fplink1';
	$title = get_string('fplink1','theme_nach');
	$description = get_string('fplink1desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle1';
	$title = get_string('fptitle1','theme_nach');
	$description = get_string('fptitle1desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext1';
	$title = get_string('fptext1','theme_nach');
	$description = get_string('fptext1desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	//block 2
	$name = 'theme_nach/fplink2';
	$title = get_string('fplink2','theme_nach');
	$description = get_string('fplink2desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle2';
	$title = get_string('fptitle2','theme_nach');
	$description = get_string('fptitle2desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext2';
	$title = get_string('fptext2','theme_nach');
	$description = get_string('fptext2desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	//block 3
	$name = 'theme_nach/fplink3';
	$title = get_string('fplink3','theme_nach');
	$description = get_string('fplink3desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle3';
	$title = get_string('fptitle3','theme_nach');
	$description = get_string('fptitle3desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext3';
	$title = get_string('fptext3','theme_nach');
	$description = get_string('fptext3desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	//block 4
	$name = 'theme_nach/fplink4';
	$title = get_string('fplink4','theme_nach');
	$description = get_string('fplink4desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle4';
	$title = get_string('fptitle4','theme_nach');
	$description = get_string('fptitle4desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext4';
	$title = get_string('fptext4','theme_nach');
	$description = get_string('fptext4desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	//block 5
	$name = 'theme_nach/fplink5';
	$title = get_string('fplink5','theme_nach');
	$description = get_string('fplink5desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle5';
	$title = get_string('fptitle5','theme_nach');
	$description = get_string('fptitle5desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext5';
	$title = get_string('fptext5','theme_nach');
	$description = get_string('fptext5desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	//block 6
	$name = 'theme_nach/fplink6';
	$title = get_string('fplink6','theme_nach');
	$description = get_string('fplink6desc', 'theme_nach');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	$name = 'theme_nach/fptitle6';
	$title = get_string('fptitle6','theme_nach');
	$description = get_string('fptitle6desc', 'theme_nach');
	$default = 'Block Title';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	$name = 'theme_nach/fptext6';
	$title = get_string('fptext6','theme_nach');
	$description = get_string('fptext6desc', 'theme_nach');
	$default = 'Block text string for this block.';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);


}