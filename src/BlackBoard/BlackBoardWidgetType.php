<?php

namespace CodeHqDk\MyDashboard\Widget\Types\BlackBoard;

use CodeHqDk\MyDashboard\Widget\Type\WidgetType;

class BlackBoardWidgetType implements WidgetType
{
    public static function getTypeId(): string
    {
        return 'black-board';
    }

    public function getName(): string
    {
        return 'Tavle til beskeder';
    }

    public function getDescription(): string
    {
        return 'Skriv en kort besked på en tavle';
    }

    public function getIcon(): string
    {
        return '/images/widget-type/black-board-widget.svg';
    }

    public function requireAuth(): bool
    {
        return false;
    }
}

