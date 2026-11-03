<?php

use CodeHqDk\MyDashboard\Widget\Types\BlackBoard\View\BlackBoardWidgetView;

/** @var BlackBoardWidgetView $view */
?>
<div class="widget-type-black-board">
    <div class="widget-body">
        <div class="black-board-message">
            <?= nl2br(htmlspecialchars(trim($view->getMessage()) !== '' ? $view->getMessage() : 'Skriv en besked', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')) ?>
        </div>
    </div>
</div>

