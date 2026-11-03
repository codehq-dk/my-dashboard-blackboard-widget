<?php

use CodeHqDk\MyDashboard\Widget\Types\BlackBoard\Form\BlackBoardWidgetFormView;
use CodeHqDk\MyDashboard\Widget\WidgetsProvider;

/** @var BlackBoardWidgetFormView $view */
?>
<!DOCTYPE html>
<html lang="da" class="pico">
    <head>
        <?= $view->common->getSetupPageHead() ?>
    </head>
    <body>
        <?= $view->common->getDesignHeader() ?>
        <main class="container">
            <h1>Indstilling af tavle-widget</h1>
            <hr>
            <form action="<?= WidgetsProvider::SAVE_WIDGET_SETTINGS_URL ?>" method="post">
                <?= $view->insertCommonHiddenFormElements() ?>
                <?= $view->insertPredefinedSettingsDropdown(); ?>
                <p>
                    <label for="message">Besked</label>
                    <textarea id="message" name="message" rows="6" placeholder="Skriv din besked her..."><?= htmlspecialchars($view->getBlackBoardSettings()?->getMessage() ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></textarea>
                </p>
                <?= $view->insertCommonSettingsFormElements() ?>
                <p>
                    <input type="submit" name="save_widget_settings" value="Gem widget indstillinger">
                </p>
            </form>
        </main>
    </body>
</html>

