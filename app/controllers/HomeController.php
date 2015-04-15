<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    /**
     * Set language
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function language($locale)
    {
        if (!is_null($locale)) {
            switch ($locale) {
                case 'en':
                    $language = 'en';
                    break;
                case 'ru':
                    $language = 'ru';
                    break;
                default:
                    $language = 'ru';
                    break;
            }

            if (!empty($language)) {
                Session::set('_locale', $language);
            }
        }

        App::setLocale($language);

        return Redirect::action('IndexController@getIndex');
    }
}
