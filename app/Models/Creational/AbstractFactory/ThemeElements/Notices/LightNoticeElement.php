<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Notices;

class LightNoticeElement extends AbstractNoticeElement
{
    public function render()
    {
        echo "\033[30;91m " . $this->text . " \033[0m\n";
    }
}
