<?php

/*
 * This file is part of Numbers Framework.
 *
 * (c) Volodymyr Volynets <volodymyr.volynets@gmail.com>
 *
 * This source file is subject to the Apache 2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Numbers\Internalization\Internalization\Controller;

use Object\Controller\Permission;

class Missing extends Permission
{
    public function actionIndex()
    {
        $form = new \Numbers\Internalization\Internalization\Form\List2\Missing([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
    public function actionEdit()
    {
        $form = new \Numbers\Internalization\Internalization\Form\Missing([
            'input' => \Request::input()
        ]);
        echo $form->render();
    }
}
