<?php

namespace App\Models\AbstractFactory\ThemeFactories;

use App\Models\AbstractFactory\ThemeElements\Messages\MessageElement;
use App\Models\AbstractFactory\ThemeElements\Notices\NoticeElement;
use App\Models\AbstractFactory\ThemeElements\Titles\TitleElement;

interface ThemeFactoryInterface
{
    public function getTitle(string $text): TitleElement;
    public function getMessage(string $text): MessageElement;
    public function getNotice(string $text): NoticeElement;
}
