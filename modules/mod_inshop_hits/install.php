<?php

// ========================================================================== //

    function info_module_mod_inshop_hits(){

        //
        // Описание модуля
        //

        //Заголовок (на сайте)
        $_module['title']        = 'InstantShop: Хиты продаж';

        //Название (в админке)
        $_module['name']         = 'InstantShop: Хиты продаж';

        //описание
        $_module['description']  = 'Показывает товары с отметой хит продаж InstantShop';
        
        //ссылка (идентификатор)
        $_module['link']         = 'mod_inshop_hits';
        
        //позиция
        $_module['position']     = 'maintop';

        //автор
        $_module['author']       = 'soft-solution.ru';

        //текущая версия
        $_module['version']      = '1.0';

        //
        // Настройки по-умолчанию
        //
        $_module['config'] = array();

        return $_module;

    }

// ========================================================================== //

    function install_module_mod_inshop_hits(){

        return true;

    }

// ========================================================================== //

    function upgrade_module_mod_inshop_hits(){

        return true;
        
    }

// ========================================================================== //

?>