<?php

namespace App\Models\Creational\AbstractFactory\ThemeFactories;

use App\Models\Creational\AbstractFactory\ThemeElements\Messages\MessageElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Notices\NoticeElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Titles\TitleElement;

interface ThemeFactoryInterface
{
    public function getTitle(string $text): TitleElement;
    public function getMessage(string $text): MessageElement;
    public function getNotice(string $text): NoticeElement;
}
