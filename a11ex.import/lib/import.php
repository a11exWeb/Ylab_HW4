<?php

namespace A11ex\Import;

use Bitrix\Main\Localization\Loc;

/**
 * Class Import
 * @package A11ex\Import
 */
class Import
{
    private $moduleId = 'a11ex.import';

    /**
     * @return string
     */
    public function getLimitImport(): string
    {
        return Loc::getMessage('A11EX_IMPORT_LIMIT_TEXT') . \COption::GetOptionString($this->moduleId, "limit_to_import", '0');
    }
}