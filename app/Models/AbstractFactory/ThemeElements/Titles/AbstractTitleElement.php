<?php

namespace App\Models\AbstractFactory\ThemeElements\Titles;

abstract class AbstractTitleElement implements TitleElement
{
    public function __construct(
        protected string $text
    )
    {}
}
