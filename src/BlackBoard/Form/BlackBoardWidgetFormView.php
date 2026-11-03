<?php

namespace CodeHqDk\MyDashboard\Widget\Types\BlackBoard\Form;

use CodeHqDk\MyDashboard\Miscellaneous\BaseView;
use CodeHqDk\MyDashboard\Widget\Settings\WidgetTypeSettings;
use CodeHqDk\MyDashboard\Widget\Type\WidgetTypeFormBaseView;
use CodeHqDk\MyDashboard\Widget\Type\WidgetTypeFormView;
use CodeHqDk\MyDashboard\Widget\Types\BlackBoard\BlackBoardSettings;

class BlackBoardWidgetFormView extends WidgetTypeFormBaseView implements WidgetTypeFormView
{
    use BaseView;

    public function getBlackBoardSettings(): BlackBoardSettings|WidgetTypeSettings|null
    {
        return $this->getTypeSpecificSettings();
    }
}

