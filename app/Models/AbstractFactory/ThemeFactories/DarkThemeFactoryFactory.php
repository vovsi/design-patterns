<?php

namespace App\Models\AbstractFactory\ThemeFactories;

use App\Models\AbstractFactory\ThemeElements\Messages\DarkMessageElement;
use App\Models\AbstractFactory\ThemeElements\Messages\MessageElement;
use App\Models\AbstractFactory\ThemeElements\Notices\DarkNoticeElement;
use App\Models\AbstractFactory\ThemeElements\Notices\NoticeElement;
use App\Models\AbstractFactory\ThemeElements\Titles\DarkTitleElement;
use App\Models\AbstractFactory\ThemeElements\Titles\TitleElement;

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
