<?php

namespace App\Models\AbstractFactory\ThemeElements\Titles;

class LightTitleElement extends AbstractTitleElement
{
    public function render()
    {
        echo "          \033[30;107m " . $this->text . " \033[0m\n";
    }
}
