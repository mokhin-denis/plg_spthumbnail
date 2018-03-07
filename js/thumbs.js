/**
 * @package		SP Download
 * @subpackage	Plugins
 * @copyright	Denis Mokhin - All rights reserved.
 * @author		Denis Mokhin
 * @link		http://mokhin-tech.ru
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * 
 * JavaScript for Bootstrap 3 support. Install https://github.com/mokhin-denis/bs3-demo/tree/master/plg_system_bootstrap3 before use!
*/

function wrapImages(jQuery) {
    /////////////
    //bind params
    var imgThumbClass = imgThumbParams.imgThumbClass;    
    ////////////
    
    var idNum = 0;
    jQuery('.'+imgThumbClass).find('img').andSelf().each(function () {        
        idNum++;
        //it maybe be a figure with img as child
        var txtAlt = jQuery(this).attr('alt');
        jQuery(this).wrap('<a class="popup" title="' + txtAlt + '" id="id' + imgThumbClass + idNum + '" href="javascript:void(0);" ></a>');
    });
}

jQuery(document).ready(function(){
    jQuery(document).on('click','.popup',function() {
        jQuery('#thumbModal').children('div').attr('class','modal-dialog').addClass(jQuery(this).find('img').attr('data-modal-dialog-class'));
        jQuery('#modalImage').attr('src',jQuery(this).find('img').attr('src'));
        jQuery('#thumbModalLabel').html(jQuery(this).find('img').attr('alt'));
        jQuery('#thumbModal').modal('show');
    });
});
