<?php

namespace CodeHqDk\MyDashboard\Widget\Types\BlackBoard\View;

use CodeHqDk\MyDashboard\Layout\Slot\LayoutSlotModel;
use CodeHqDk\MyDashboard\Widget\Settings\WidgetSettingsRepository;
use CodeHqDk\MyDashboard\Widget\Settings\WidgetTypeSettings;
use CodeHqDk\MyDashboard\Widget\Type\WidgetTypeView;
use CodeHqDk\MyDashboard\Widget\Types\BlackBoard\BlackBoardSettings;
use CodeHqDk\MyDashboard\Widget\Types\BlackBoard\BlackBoardWidgetType;
use Exception;

class BlackBoardWidgetView implements WidgetTypeView
{
    private LayoutSlotModel $layout_slot;

    public function __construct(private readonly WidgetSettingsRepository $widget_settings_repository)
    {
    }

    public function setLayoutSlot(LayoutSlotModel $layout_slot): void
    {
        $this->layout_slot = $layout_slot;
    }

    public function getSettings(): ?WidgetTypeSettings
    {
        if ($this->layout_slot->widget_settings_uuid === null) {
            return null;
        }

        $settings = $this->widget_settings_repository->get($this->layout_slot->widget_settings_uuid);

        if ($settings->widget_type_id !== BlackBoardWidgetType::getTypeId()) {
            throw new Exception('Settings do not match the expected widget type. Expected: ' . BlackBoardWidgetType::getTypeId() . ', got: ' . $settings->widget_type_id);
        }

        return BlackBoardSettings::fromArray(json_decode($settings->json_serialized_settings, true));
    }

    public function getMessage(): string
    {
        $settings = $this->getSettings();
        if ($settings instanceof BlackBoardSettings) {
            return $settings->getMessage();
        }

        return '';
    }

    public function areSettingsPresent(): bool
    {
        return $this->layout_slot->widget_settings_uuid !== null;
    }
}

