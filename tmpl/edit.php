<?php
/**
* @version 			SEBLOD 3.x Core
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2009 - 2016 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

JCckDev::forceStorage();
// $lang = JFactory::getLanguage();
// $extension = 'plg_cck_field_icon';
// $base_dir = JPATH_ADMINISTRATOR;
// $language_tag = $lang->getTag();
// $reload = true;
// //$lang->load($extension, $base_dir, $language_tag, $reload);
$options2	=	JCckDev::fromJSON( $this->item->options2 );
?>

<div class="seblod">
	<?php echo JCckDev::renderLegend( JText::_( 'COM_CCK_CONSTRUCTION' ), JText::_( 'PLG_CCK_FIELD_'.$this->item->type.'_DESC' ) ); ?>
    <ul class="adminformlist adminformlist-2cols">
        <?php
		echo JCckDev::renderForm( 'core_icons', $this->item->location, $config, array( 'storage_field'=>'location' ) );
		// Static
		echo JCckDev::renderForm( 'core_bool2', $this->item->bool2, $config, array( 'label'=>'Format', 'options'=>'Default Joomla=0||Font Awesome=1' ) );
		echo JCckDev::renderForm( 'core_bool3', $this->item->bool3, $config, array( 'label'=>'Icon Placement', 'options'=>'Icon Only=0||Icon Before Text=1||Icon After Text=2' ) );
		echo JCckDev::renderForm( 'core_defaultvalue', @$options2['iconText'], $config, array( 'label'=>'Default Text', 'storage_field'=>'json[options2][iconText]'  ) );
		echo JCckDev::renderForm( 'core_defaultvalue', @$options2['customIcon'], $config, array( 'label'=>'Custom Class Icon', 'storage_field'=>'json[options2][customIcon]'  ) );
        echo JCckDev::renderBlank();

        echo JCckDev::renderSpacer( JText::_( 'COM_CCK_STORAGE' ), JText::_( 'COM_CCK_STORAGE_DESC' ) );
        echo JCckDev::getForm( 'core_storage', $this->item->storage, $config );
        ?>
    </ul>
</div>