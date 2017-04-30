<?php

namespace Numbers\Internalization\Internalization\Controller;
class Groups extends \Object\Controller\Permission {
	public function actionIndex() {
		$form = new \Numbers\Users\Users\Form\List2\Users([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
	public function actionEdit() {
		$form = new \Numbers\Users\Users\Form\Users([
			'input' => \Request::input()
		]);
		echo $form->render();
	}
}