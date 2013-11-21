<?php

class Bootloader
{

    private function registerThemes()
    {
        $themes = array(
            new Themes\Standard\StandardTheme(),
        );

        return $themes;
    }

    public function buildApp()
    {
        $app = new App();
        $app->setThemes($this->registerThemes());

        return $app;
    }

}