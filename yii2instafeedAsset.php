<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2instafeed;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class yii2instafeedAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2instafeed/assets';
    public $css = array(
      'css/jquery.fullPage.css'
    );
    public $js = array(
        'js/jquery.fullPage.js'        
    );
    public $depends = array(
        'yii\web\JqueryAsset'
    );
}
