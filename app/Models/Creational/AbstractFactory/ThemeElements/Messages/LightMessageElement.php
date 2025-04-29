<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Messages;

class LightMessageElement extends AbstractMessageElement
{
    public function render()
    {
        echo "\033[30;107m " . $this->text . " \033[0m\n";
    }
}
