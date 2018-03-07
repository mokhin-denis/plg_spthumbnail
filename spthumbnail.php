<?php
/**
 * @package		SP Download
 * @subpackage	Plugins
 * @copyright	SP CYEND - All rights reserved.
 * @author		SP CYEND
 * @link		http://www.cyend.com
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * 
 * Bootstrap 3 support: Denis Mokhin, denis@mokhin-tech.ru
*/

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Vote plugin.
 *
 * @package		Joomla.Plugin
 * @subpackage	SPDigitalGoods.show in article
 */
class plgContentSpThumbnail extends JPlugin
{
	/**
	 * Constructor
	 *
	 * @access      protected
	 * @param       object  $subject The object to observe
	 * @param       array   $config  An array that holds the plugin configuration
	 * @since       1.5
	 */
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

        /**
	 * SP Digital Goods prepare content method
	 *
	 * Method is called by the view
	 *
	 * @param	string	The context of the content being passed to the plugin.
	 * @param	object	The content object.  Note $article->text is also available
	 * @param	object	The content params
	 * @param	int		The 'page' number
	 * @since	1.6
	 */
    public function onContentPrepare($context, &$article, &$params, $limitstart=0)
	{
        if (empty($article->text)) return true; //exit if empty article

        return true;
	}

    function onBeforeRender() {
        $titletag = $this->params->get('titletag','h5');
        $p = array('content'=>'<img id="modalImage" src="" class="img-fluid mx-auto d-block" />','name'=>'thumbModal','titletag'=>$titletag);
        JHtml::_('bootstrap.modal',$p);
        JHtml::_('jquery.framework');
        //We oparate with global var imgThumbClass
        $class = $this->params->get('class');        
		$pluginUrl = JURI::base(true) . '/plugins/content/spthumbnail/';
		JFactory::getDocument()->addScript($pluginUrl.'js/thumbs.min.js');
		JFactory::getDocument()->addScriptDeclaration("
            var imgThumbParams = {
                imgThumbClass: '$class'
            };            
			jQuery(document).ready(wrapImages);
		");
    }
}
