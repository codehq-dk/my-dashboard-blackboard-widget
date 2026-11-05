<?php

namespace CodeHqDk\MyDashboard\Widget\BlackboardWidget\Form;

use CodeHqDk\MyDashboard\Interfaces\WidgetTypeFormHelperInterface;
use CodeHqDk\MyDashboard\Interfaces\WidgetTypeFormView;
use CodeHqDk\MyDashboard\Interfaces\WidgetTypeSettings;
use CodeHqDk\MyDashboard\Widget\BlackboardWidget\BlackBoardSettings;

class BlackBoardWidgetFormView implements WidgetTypeFormView
{
    public function getBlackBoardSettings(): BlackBoardSettings|WidgetTypeSettings|null
    {
        return $this->helper->getTypeSpecificSettings();
    }

    public function __construct(private WidgetTypeFormHelperInterface $helper)
    {
    }

    public function getHelper(): WidgetTypeFormHelperInterface
    {
        return $this->helper;
    }
}

