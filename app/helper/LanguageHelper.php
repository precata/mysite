<?php

class LanguageHelper
{
    /**
     * Return all locales
     *
     * @return array
     */
    public static function all()
    {
        return array(
            'en',
            'ru',
        );
    }

    /**
     * Get current locale
     *
     * @return string
     */
    public static function getCurrent()
    {
        $language = Session::get('_locale');

        if (empty($language)) {
            $language = App::getLocale();
        }

        return $language;
    }
}