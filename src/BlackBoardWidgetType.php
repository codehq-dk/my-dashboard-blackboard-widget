<?php

namespace CodeHqDk\MyDashboard\Widget\BlackboardWidget;

use CodeHqDk\MyDashboard\Interfaces\WidgetType;

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
        return 'black-board-widget.svg';
    }

    public function requireAuth(): bool
    {
        return false;
    }
}

