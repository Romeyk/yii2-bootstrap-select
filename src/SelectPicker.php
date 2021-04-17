<?php
/**
 * @link https://github.com/Romeyk/yii2-bootstrap-select
 * @copyright Copyright (c) 2021 Roman Chuykov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace romeyk\selectpicker;

use yii\bootstrap\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class SelectPicker
 *
 * @author Roman Chuykov <mail@romeyk.org.ua>
 */
class SelectPicker extends InputWidget
{
	/**
	 * @var string the template to render the input.
	 */
	public $template = '{input}';

	/**
	 * @var array the HTML attributes for the input tag.
	 */
	public $options = [
		'class' => 'form-control',
	];

	/**
	 * @var array the option data items.
	 */
	public $items;

	/**
	 * Renders field
	 */
	public function run()
	{
		$this->registerPlugin('selectpicker');

		return strtr($this->template, [
			'{input}' => $this->hasModel()
				? Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options)
				: Html::dropDownList($this->name, $this->value, $this->options),
		]);
	}

	/**
	 * @inheritDoc
	 */
	protected function registerPlugin($name)
	{
		SelectPickerAsset::register($this->view);
		parent::registerPlugin($name);
	}
}