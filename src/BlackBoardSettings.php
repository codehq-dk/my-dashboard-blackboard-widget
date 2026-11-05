<?php

namespace CodeHqDk\MyDashboard\Widget\BlackboardWidget;

use CodeHqDk\MyDashboard\Interfaces\WidgetTypeSettings;

class BlackBoardSettings implements WidgetTypeSettings
{
    private string $message = '';

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function jsonSerialize(): array
    {
        return [
            'message' => $this->message,
        ];
    }

    public static function fromArray(array $data): self
    {
        $widgetSettings = new self();
        $widgetSettings->setMessage((string) ($data['message'] ?? ''));
        return $widgetSettings;
    }

    public function getSetupHelperText(): string
    {
        return $this->message !== '' ? $this->message : 'Tavle';
    }
}

