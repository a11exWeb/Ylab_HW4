<?php

AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("NewElemLogger", "OnAfterIBlockElementAddHandler"));

class NewElemLogger
{
	
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
		global $USER;
		
		$dir = $_SERVER["DOCUMENT_ROOT"]."/local/log";
		
		if (!file_exists($dir)) { 
			mkdir($dir, 0777, true);
		}
				
		define("LOG_FILENAME",$dir."/log.txt");
		
        if($arFields["ID"]>0)
             AddMessage2Log("Элемент ".$arFields["NAME"]." с id = ".$arFields["ID"]." добавлен пользователем с id = ".$USER->GetID());
        else
             AddMessage2Log("Ошибка добавления записи (".$arFields["RESULT_MESSAGE"].").");
    }
}

?>