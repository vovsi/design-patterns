<?php

namespace App\Models\Creational\AbstractFactory\ThemeFactories;

use App\Models\Creational\AbstractFactory\ThemeElements\Messages\LightMessageElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Messages\MessageElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Notices\LightNoticeElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Notices\NoticeElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Titles\LightTitleElement;
use App\Models\Creational\AbstractFactory\ThemeElements\Titles\TitleElement;

class LightThemeFactoryFactory implements ThemeFactoryInterface
{
    public function getTitle(string $text): TitleElement
    {
        return new LightTitleElement($text);
    }

    public function getMessage(string $text): MessageElement
    {
        return new LightMessageElement($text);
    }

    public function getNotice(string $text): NoticeElement
    {
        return new LightNoticeElement($text);
    }
}
