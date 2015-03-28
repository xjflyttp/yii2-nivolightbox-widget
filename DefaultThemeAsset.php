<?php

/**
 * DefaultThemeAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\nivo\lightbox;

use yii\web\AssetBundle;

class DefaultThemeAsset extends AssetBundle {

    public $sourcePath = '@bower/nivo-lightbox';
    public $basePath = '@webroot/assets';
    public $css = ['themes/default/default.css'];
    public $depends = ['xj\nivo\lightbox\LightboxAsset'];

}
