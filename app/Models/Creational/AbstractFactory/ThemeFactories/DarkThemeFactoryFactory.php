<?php

namespace App\Models\Creational\AbstractFactory\ThemeFactories;

use App\Models\Creational\AbstractFactory\ThemeElements\Messages\DarkMessageElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Messages\MessageElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Notices\DarkNoticeElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Notices\NoticeElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Titles\DarkTitleElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Titles\TitleElement;

class DarkThemeFactoryFactory implements ThemeFactoryInterface
{
    public function getTitle(string $text): TitleElement
    {
        return new DarkTitleElement($text);
    }

    public function getMessage(string $text): MessageElement
    {
        return new DarkMessageElement($text);
    }

    public function getNotice(string $text): NoticeElement
    {
        return new DarkNoticeElement($text);
    }
}
