<?php

namespace CodeHqDk\MyDashboard\Widget\BlackboardWidget;

use CodeHqDk\MyDashboard\Interfaces\WidgetProvider;
use CodeHqDk\MyDashboard\Widget\BlackboardWidget\Form\BlackBoardWidgetFormView;
use CodeHqDk\MyDashboard\Widget\BlackboardWidget\View\BlackBoardWidgetView;

class BlackboardWidgetProvider implements WidgetProvider
{
    public function returnWidgetType(): string
    {
        return BlackBoardWidgetType::class;
    }

    public function returnWidgetView(): string
    {
        return BlackBoardWidgetView::class;
    }

    public function returnWidgetSettings(): string
    {
        return BlackBoardSettings::class;
    }

    public function returnWidgetFormView(): string
    {
        return BlackBoardWidgetFormView::class;
    }

    public function returnComposerPackageVendorName(): string
    {
        return 'codehq-dk';
    }

    public function returnComposerPackageName(): string
    {
        return 'my-dashboard-blackboard-widget';
    }
}