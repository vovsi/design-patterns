<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Messages;

abstract class AbstractMessageElement implements MessageElement
{
    public function __construct(
        protected string $text
    )
    {}
}
