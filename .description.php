<?
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentDescription = array(
    "NAME"        => 'Название компонента',
    "DESCRIPTION" => 'Собственный компонент',
    "ICON"        => "/images/icon.gif",
    "SORT"        => 10,
    "CACHE_PATH"  => "Y",
    "PATH"        => array(
        "ID" => "Персональные решения", // for example "my_project"
        // "CHILD" => array(
        // 	"ID" => "", // for example "my_project:services"
        // 	"NAME" => "",  // for example "Services"
        // ),
    ),
    // "COMPLEX" => "N",
);
