<?php

namespace App\Models\AbstractFactory\ThemeElements\Notices;

class DarkNoticeElement extends AbstractNoticeElement
{
    public function render()
    {
        echo "\033[91;40m " . $this->text . " \033[0m\n";
    }
}
