<?php

namespace App\Models\AbstractFactory\ThemeElements\Titles;

class DarkTitleElement extends AbstractTitleElement
{
    public function render()
    {
        echo "          \033[97;40m " . $this->text . " \033[0m\n";
    }
}
