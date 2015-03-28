<?php

/**
 * LightboxAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\nivo\lightbox;

use yii\web\AssetBundle;

class LightboxAsset extends AssetBundle {

    public $sourcePath = '@bower/nivo-lightbox';
    public $basePath = '@webroot/assets';
    public $css = ['nivo-lightbox.css'];
    public $js = ['nivo-lightbox.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
