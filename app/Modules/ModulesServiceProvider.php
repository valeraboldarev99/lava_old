<?php

namespace App\Modules;

/** * Сервис провайдер для подключения модулей */
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider {
    public function boot() {
        //получаем список модулей, которые надо подгрузить 
        $modules = config("module.modules"); 
        
        if($modules) {
            foreach ($modules as $module) {
                //Подключаем роуты для модуля 
                if(file_exists(__DIR__.'/'.$module.'/Routes/web.php')) {
                    $this->loadRoutesFrom(__DIR__.'/'.$module.'/Routes/web.php');
                }

                //Загружаем View
                //view('Test::index')
                if(is_dir(__DIR__.'/'.$module.'/Resources/Views')) {
                    $this->loadViewsFrom(__DIR__.'/'.$module.'/Resources/Views', $module);
                }

                //Подгружаем миграции
                if(is_dir(__DIR__.'/'.$module.'/Database/Migrations')) {
                    $this->loadMigrationsFrom(__DIR__.'/'.$module.'/Database/Migrations');
                }

                //Подгружаем переводы
                //trans('Test::test.welcome')
                if(is_dir(__DIR__.'/'.$module.'/Resources/Lang')) {
                    $this->loadTranslationsFrom(__DIR__.'/'.$module.'/Resources/Lang', $module);
                }
            }
        }
    }

    public function register() {

    }
}