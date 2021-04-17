<?php
/**
 * @link https://github.com/Romeyk/yii2-bootstrap-select
 * @copyright Copyright (c) 2021 Roman Chuykov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace romeyk\selectpicker;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class SelectPickerAsset
 *
 * @author Roman Chuykov <mail@romeyk.org.ua>
 *
 * @see https://github.com/snapappointments/bootstrap-select
 */
class SelectPickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-select/dist';
    public $js = [
        'js/bootstrap-select.js',
    ];
    public $css = [
        'css/bootstrap-select.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}