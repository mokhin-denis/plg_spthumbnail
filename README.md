# SP Thumbnail ![](https://img.shields.io/badge/joomla-3.x-yellow.svg?style=plastic) ![](https://img.shields.io/badge/joomla-2.5-ff69b4.svg?style=plastic) ![](https://img.shields.io/badge/bootstrap-3-563d7c.svg?style=plastic) #
What if you need one, or some, or all your images to be clickable and zoomed? With this plugin it is done automatic. When visitors click on your images default Joomla modal window is appeared.

## Description ##
Insert the normal way to your article, or module, or anywhere your image, re-size (if you want) and that's it.

## Requirements ##
### Joomla ###
It works with Joomla 1.6, 1.7, 2.5 or 3.0
### Bootstrap ###
You should use [Bootstrap 3](//getbootstrap.com/docs/3.3/) on your website.
### Bootstrap plugin for Joomla ###
You should take [plg_system_bootstrap3](//github.com/mokhin-denis/bs3-demo/tree/master/plg_system_bootstrap3). It helps for **SP Thumbnail** work.

## How to use ##
### Installation ###
Just install the plugin as any other Joomla extension. Activate it, and define whether you want all your images to be clickable, or distinguish with class. See below image:

![](http://cyend.com/extensions/images/stories/extensions/sp-thumbnail/sp-thumbnail-1.jpg)

*Only class* - Choose if you want only specific classes to be clickable. You have to define the name of the class. (e.g. my-class).
*Except class* - Choose if you want all to be clickable except a class. Again you have to define the name of the class.
*All images* - Turns all your images in your site to be clickable.

### How to define ###
Just insert any image in your article, and resize if you want. If you chose to be clickable only for a specific class, just go to image properties and define to the appropriate field the name of the class you defined. For example:

![](http://cyend.com/extensions/images/stories/extensions/sp-thumbnail/sp-thumbnail-2.jpg)

You can also add additional class names along with the defined separated with space. For example: 'my-class another-class1 another-class2'
> Tip: It would be for the best to avoid using a class name that is might used someplace in your site, for example 'modal'.

## Modal width ##
In Bootstrap 4 there are 3 wides of modal: `modal-sm`, `default` and `modal-lg`. By default you do not need to anything. If you want to popup modal in `modal-lg`, put into your `<img/>` tag attribute `data-modal-dialog-class="modal-lg"`. For `modal-sm`: `data-modal-dialog-class="modal-sm"`.

## Authors ##
* [SP CYEND](//cyend.com) - *Initial work*
* [Denis Mokhin](//github.com/mokhin-denis) - *Update for Bootstrap 3 and 4*

## License ##
This project is licensed under the GNU/GPL v3 license. Please visit http://www.gnu.org/licenses/gpl-3.0.html or view [gpl-3.0.txt](gpl-3.0.txt)