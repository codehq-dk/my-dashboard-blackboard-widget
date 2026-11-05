<?php

namespace CodeHqDk\MyDashboard\Widget\BlackboardWidget\View;

use CodeHqDk\MyDashboard\Interfaces\WidgetTypeBaseView;
use CodeHqDk\MyDashboard\Interfaces\WidgetTypeView;
use CodeHqDk\MyDashboard\Widget\BlackboardWidget\BlackBoardSettings;

class BlackBoardWidgetView extends WidgetTypeBaseView implements WidgetTypeView
{
    public function getSettings(): ?BlackBoardSettings
    {
        return $this->getHelper()->getSettings(BlackBoardSettings::class);
    }

    public function getMessage(): string
    {
        $settings = $this->getSettings();
        if ($settings instanceof BlackBoardSettings) {
            return $settings->getMessage();
        }

        return '';
    }
}

