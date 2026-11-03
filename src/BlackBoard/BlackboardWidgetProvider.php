<?php

namespace CodehqDk\MyDashboard\MyDashboardBlackboardWidget\BlackBoard;

class BlackboardWidgetProvider
{

    private function registerBlackBoardWidgetType(WidgetTypeSuperRegistry $widget_type_super_registry): void
    {
        $widget_type_super_registry->register(
            BlackBoardWidgetType::getTypeId(),
            BlackBoardWidgetType::class,
            BlackBoardWidgetView::class,
            BlackBoardWidgetFormView::class,
            BlackBoardSettings::class
        );
    }



}