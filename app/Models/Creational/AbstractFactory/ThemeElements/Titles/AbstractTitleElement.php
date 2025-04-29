<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Titles;

abstract class AbstractTitleElement implements TitleElement
{
    public function __construct(
        protected string $text
    )
    {}
}
