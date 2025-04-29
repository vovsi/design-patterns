<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Messages;

class DarkMessageElement extends AbstractMessageElement
{
    public function render()
    {
        echo "\033[97;40m " . $this->text . " \033[0m\n";
    }
}
