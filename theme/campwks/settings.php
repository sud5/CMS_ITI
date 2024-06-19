<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_campwks
 * @copyright 2022 Amit Singh (web.amitsingh@gmail.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Campus WKS provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingcampwks', get_string('configtitle', 'theme_campwks'));

    // Each page is a tab - the first is the "General" tab.
    $page = new admin_settingpage('theme_campwks_general', get_string('generalsettings', 'theme_campwks'));
    
    $name = 'theme_campwks/logo';
    $title = get_string('logo', 'theme_campwks');
    $description = get_string('logodesc', 'theme_campwks');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_campwks_update_settings_images');
    $page->add($setting);

    $name = 'theme_campwks/loginlogo';
    $title = get_string('loginlogo', 'theme_campwks');
    $description = get_string('loginlogodesc', 'theme_campwks');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginlogo');
    $setting->set_updatedcallback('theme_campwks_update_settings_images');
    $page->add($setting);

    $name = 'theme_campwks/loginpageimg';
    $title = get_string('loginpageimg', 'theme_campwks');
    $description = get_string('loginpageimg_desc', 'theme_campwks');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginpageimg');
    $setting->set_updatedcallback('theme_campwks_update_settings_images');
    $page->add($setting);

    $name = 'theme_campwks/loginpageimg2';
    $title = get_string('loginpageimg2', 'theme_campwks');
    $description = get_string('loginpageimg2_desc', 'theme_campwks');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginpageimg2');
    $setting->set_updatedcallback('theme_campwks_update_settings_images');
    $page->add($setting);

    $setting = new admin_setting_confightmleditor('theme_campwks/companyinfo', get_string('companyinfo', 'theme_campwks'),
    get_string('companyinfo_desc', 'theme_campwks'), get_string('companyinfo_default', 'theme_campwks'), PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/headerbg';
    $title = get_string('headerbg', 'theme_campwks');
    $description = get_string('headerbg_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#faefef');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/loginbg';
    $title = get_string('loginbg', 'theme_campwks');
    $description = get_string('loginbg_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#171616');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/blockbg';
    $title = get_string('blockbg', 'theme_campwks');
    $description = get_string('blockbg_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e5e5e5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/primarybtnbg';
    $title = get_string('primarybtnbg', 'theme_campwks');
    $description = get_string('primarybtnbg_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f7931e');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/primarybtnbghover';
    $title = get_string('primarybtnbghover', 'theme_campwks');
    $description = get_string('primarybtnbghover_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#d67708');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/primarybtntextcolor';
    $title = get_string('primarybtntextcolor', 'theme_campwks');
    $description = get_string('primarybtntextcolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#1d2125');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/primarybtnbordercolor';
    $title = get_string('primarybtnbordercolor', 'theme_campwks');
    $description = get_string('primarybtnbordercolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/linkcolor';
    $title = get_string('linkcolor', 'theme_campwks');
    $description = get_string('linkcolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#06a1ac');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/linkcolorhover';
    $title = get_string('linkcolorhover', 'theme_campwks');
    $description = get_string('linkcolorhover_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/dropdownbgcolor';
    $title = get_string('dropdownbgcolor', 'theme_campwks');
    $description = get_string('dropdownbgcolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#06a1ac');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/headerlinkcolor';
    $title = get_string('headerlinkcolor', 'theme_campwks');
    $description = get_string('headerlinkcolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/headerlinkhovercolor';
    $title = get_string('headerlinkhovercolor', 'theme_campwks');
    $description = get_string('headerlinkhovercolor_desc', 'theme_campwks');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#777777');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/controlsborederradius';
    $title = get_string('controlsborederradius', 'theme_campwks');
    $description = get_string('controlsborederradius_desc', 'theme_campwks');
    $setting = new admin_setting_configtext($name, $title, $description, '5px', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_campwks/cardborederradius';
    $title = get_string('cardborederradius', 'theme_campwks');
    $description = get_string('cardborederradius_desc', 'theme_campwks');
    $setting = new admin_setting_configtext($name, $title, $description, '5px', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after defining all the settings!
    $settings->add($page);
    
    // Advanced settings.
    $page = new admin_settingpage('theme_campwks_advanced', get_string('advancedsettings', 'theme_boost'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_campwks/scsspre',
        get_string('rawscsspre', 'theme_boost'), get_string('rawscsspre_desc', 'theme_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_campwks/scss', get_string('rawscss', 'theme_boost'),
        get_string('rawscss_desc', 'theme_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $settings->add($page);
}
