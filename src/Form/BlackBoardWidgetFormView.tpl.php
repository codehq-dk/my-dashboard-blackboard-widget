<?php

use CodeHqDk\MyDashboard\Widget\BlackboardWidget\Form\BlackBoardWidgetFormView;

/** @var BlackBoardWidgetFormView $view */


?>
<!DOCTYPE html>
<html lang="da" class="pico">
    <head>
        <?= $view->getHelper()->getSetupPageHead() ?>
    </head>
    <body>
        <?= $view->getHelper()->getDesignHeader() ?>
        <main class="container">
            <h1>Indstilling af tavle-widget</h1>
            <hr>
            <form action="<?= $view->getHelper()->getWidgetFormPostUrl() ?>" method="post">
                <?= $view->getHelper()->insertCommonHiddenFormElements() ?>
                <?= $view->getHelper()->insertPredefinedSettingsDropdown(); ?>
                <p>
                    <label for="message">Besked</label>
                    <textarea id="message" name="message" rows="6" placeholder="Skriv din besked her..."><?= htmlspecialchars($view->getBlackBoardSettings()?->getMessage() ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></textarea>
                </p>
                <?= $view->getHelper()->insertCommonSettingsFormElements() ?>
                <p>
                    <input type="submit" name="save_widget_settings" value="Gem widget indstillinger">
                </p>
            </form>
        </main>
    </body>
</html>

