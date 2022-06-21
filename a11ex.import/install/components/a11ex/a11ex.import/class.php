<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use A11ex\Import\Import;
use Bitrix\Main\Loader;


/**
 * Class A11exImport
 */
class A11exImportComponent extends CBitrixComponent
{
    /**
     * @return mixed|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function executeComponent()
    {
        Loader::includeModule('a11ex.import');

        $profile = new Import();

        $this->arResult['LIMIT'] = $profile->getLimitImport();

        $this->includeComponentTemplate();
    }
}