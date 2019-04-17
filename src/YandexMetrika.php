<?php
namespace andrewdanilov\yandexmetrika;

class YandexMetrika extends \yii\base\Widget
{
	public $id;
	public $clickmap = true;
	public $trackLinks = true;
	public $accurateTrackBounce = true;
	public $webvisor = true;

	public function run()
	{
		if (!$this->id) {
			return false;
		}
		if (YII_ENV === 'dev') {
			return false;
		}
		return $this->render('template', [
			'id' => $this->id,
			'clickmap' => $this->clickmap,
			'trackLinks' => $this->trackLinks,
			'accurateTrackBounce' => $this->accurateTrackBounce,
			'webvisor' => $this->webvisor,
		]);
	}
}