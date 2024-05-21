<?php

function autoload($class) {
  $explodedClass = explode('\\', $class);
  $classPath = array_shift($explodedClass). '\\';
  foreach ($explodedClass as $dir) {
    $classPath.= $dir. '\\';
  }
  if ($classPath[strlen($classPath) - 1] === '\\') {
    $classPath = substr($classPath, 0, -1);
  }

  $classPath = str_replace("Generator\\", "", $classPath). '.php';
  if (file_exists($classPath)) {
    require_once $classPath;
    return true;
  } else {
    return false;
  }
}

spl_autoload_register("autoload");
use Generator\CSSGenerator as CSSGenerator;
use Generator\CSSFormat as CSSFormat;

$cssGen = new CSSGenerator("stylecssmenu1");

// Universal Reset
$universalReset = new CSSFormat("*");
$universalReset->set("margin", "0px")
               ->set("padding", "0px")
               ->finishTemplate();

// Body Styles
$bodyStyles = new CSSFormat("body");
$bodyStyles->set("margin-top", "20px")
            ->set("margin-left", "20px")
            ->set("font-family", "verdana, arial, sans-serif")
            ->finishTemplate();

// Main Menu Styles
$mainMenuStyles = new CSSFormat("#mainmenu");
$mainMenuStyles->set("list-style", "none")
                ->finishTemplate();

$mainMenuListItems = new CSSFormat("#mainmenu li");
$mainMenuListItems->set("background-color", "#174557")
                   ->set("width", "125px")
                   ->set("text-align", "center")
                   ->set("float", "left")
                   ->set("border-left", "1px solid #237291")
                   ->set("border-right", "1px solid #D5E1E6")
                   ->finishTemplate();

$mainMenuLinks = new CSSFormat("#mainmenu a");
$mainMenuLinks->set("color", "#fff")
               ->set("text-decoration", "none")
               ->set("display", "block")
               ->set("width", "125px")
               ->set("height", "40px")
               ->set("line-height", "40px")
               ->finishTemplate();

$mainMenuLinkHover = new CSSFormat("#mainmenu a:hover");
$mainMenuLinkHover->set("background-color", "#237291")
                  ->finishTemplate();

$mainMenuLinkActive = new CSSFormat("#mainmenu a:active");
$mainMenuLinkActive->set("background-color", "#f00")
                   ->finishTemplate();

$cssGen->addFormat($universalReset)
       ->addFormat($bodyStyles)
       ->addFormat($mainMenuStyles)
       ->addFormat($mainMenuListItems)
       ->addFormat($mainMenuLinks)
       ->addFormat($mainMenuLinkHover)
       ->addFormat($mainMenuLinkActive);

$cssGen->generateFile();
