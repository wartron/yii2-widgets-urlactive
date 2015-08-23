<?php

namespace wartron\yii2widgets\urlactive;

/**
 * Class Menu isItemActive Overload
 * @package common\widgets
 * Theme menu widget.
 */
class Menu extends \yii\widgets\Menu
{
    /**
     * Checks whether a menu item is active.
     * This is done by checking if [[route]] and [[params]] match that specified in the `url` option of the menu item.
     * When the `url` option of a menu item is specified in terms of an array, its first element is treated
     * as the route for the item and the rest of the elements are the associated parameters.
     * Only when its route and parameters match [[route]] and [[params]], respectively, will a menu item
     * be considered active.
     * @param array $item the menu item to be checked
     * @return boolean whether the menu item is active
     */
    protected function isItemActive($item)
    {
        if (isset($item['urlActive']) && is_array($item['urlActive']) ){
            foreach($item['urlActive'] as $auxUrl){
                $auxItem = $item;
                $auxItem['url'] = $auxUrl;
                if(parent::isItemActive($auxItem))
                    return true;
            }
        }
        return parent::isItemActive($item);
    }
}
