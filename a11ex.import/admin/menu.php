<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

AddEventHandler('main', 'OnBuildGlobalMenu', 'A11exImportModuleMenu');

if (!function_exists('A11exImportModuleMenu')) {
    /**
     * Отображение меню
     * @param $adminMenu
     * @param $moduleMenu
     */
    function A11exImportModuleMenu(&$adminMenu, &$moduleMenu)
    {
        $adminMenu['global_menu_services']['items'][] = [
            'section' => 'a11ex-import-pages',
            'sort' => 110,
            'text' => Loc::getMessage('A11EX_IMPORT_TITLE_PAGE'),
            'items_id' => 'nlmk-hidden-pages',
            'items' => [
                [
                    'parent_menu' => 'a11ex-import-pages',
                    'section' => 'a11ex-import-pages-list',
                    'sort' => 500,
                    'url' => 'a11ex.import_list.php?lang=' . LANG,
                    'text' => Loc::getMessage('A11EX_IMPORT_LIST_PAGE'),
                    'title' => Loc::getMessage('A11EX_IMPORT_LIST_PAGE'),
                    'icon' => 'form_menu_icon',
                    'page_icon' => 'form_page_icon',
                    'items_id' => 'a11ex-import-pages-list'
                ],
                [
                    'parent_menu' => 'a11ex-import-pages',
                    'section' => 'a11ex-import-pages-start',
                    'sort' => 500,
                    'url' => 'a11ex.import_start.php?lang=' . LANG,
                    'text' => Loc::getMessage('A11EX_IMPORT_START_PAGE'),
                    'title' => Loc::getMessage('A11EX_IMPORT_START_PAGE'),
                    'icon' => 'form_menu_icon',
                    'page_icon' => 'form_page_icon',
                    'items_id' => 'a11ex-import-pages-start'
                ]
            ]
        ];
    }

}