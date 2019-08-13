<?php
/**
 * Created by PhpStorm.
 * User: yuanshaozhuang
 * Date: 2019/1/22
 * Time: 12:39
 */

class per
{
    private $b;

    public function a($a)
    {
        echo "";
        $b = array('a', 'bb');
        echo '$b';
        for ($i = 1; $i <= 5; $i++) {
            echo '4';
        }
    }

    public function b()
    {
        $a = 4;
        $b = 5;
        $c = max($a, $b);
        echo '$c';
    }
}