# yii2-nivolightbox-widget
```
http://demo.dev7studios.com/nivo-lightbox/
```

composer.json
---------
```json
"require": {
    "xj/yii2-nivolightbox-widget": "*"
},
```

In View
---------
```php

use xj\nivo\lightbox\LightboxAsset;
use xj\nivo\lightbox\DefaultThemeAsset;
LightboxAsset::register($this);
DefaultThemeAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\nivo\lightbox\LightboxAsset',
    'xj\nivo\lightbox\DefaultThemeAsset',
];
```
