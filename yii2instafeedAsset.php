<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2instafeed;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <philipp@gfrenzel.net>
 * @since 2.0
 */
class yii2instafeedAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2instafeed/assets';
    public $css = [];
    public $js = [
        'js/instafeed.js'  
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
