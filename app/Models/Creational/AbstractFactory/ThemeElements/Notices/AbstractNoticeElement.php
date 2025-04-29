<?php

namespace App\Models\Creational\AbstractFactory\ThemeElements\Notices;

abstract class AbstractNoticeElement implements NoticeElement
{
    public function __construct(
        protected string $text
    )
    {}
}
