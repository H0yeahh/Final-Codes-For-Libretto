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

$cssGen = new CSSGenerator("stylecssmenu2");

// Menu Holder Styles
$menuHolderStyles = new CSSFormat(".menuHolder");
$menuHolderStyles->set("width", "650px")
                  ->set("height", "31px")
                  ->set("position", "relative")
                  ->set("margin-left", "10px")
                  ->finishTemplate();

// Menu Styles
$menuStyles = new CSSFormat(".menu,.menu ul");
$menuStyles->set("padding", "0")
            ->set("margin", "0")
            ->set("list-style", "none")
            ->set("position", "relative")
            ->set("font-family", "arial, sans-serif")
            ->finishTemplate();

$menuAbsoluteStyles = new CSSFormat(".menu");
$menuAbsoluteStyles->set("width", "650px")
                    ->set("height", "30px")
                    ->set("overflow", "hidden")
                    ->set("position", "absolute")
                    ->set("left", "0")
                    ->set("top", "0")
                    ->finishTemplate();

// Menu List Item Styles
$menuListItemStyles = new CSSFormat(".menu li");
$menuListItemStyles->set("float", "left")
                    ->set("position", "relative")
                    ->set("z-index", "10")
                    ->finishTemplate();

$menuLinkStyles = new CSSFormat(".menu li a");
$menuLinkStyles->set("float", "left")
                ->set("display", "block")
                ->set("height", "31px")
                ->set("padding", "0 10px")
                ->set("line-height", "30px")
                ->set("position", "relative")
                ->set("z-index", "20")
                ->set("color", "#ddd")
                ->set("text-decoration", "none")
                ->set("font-size", "12px")
                ->set("background", "url(slidemenu/back.png) no-repeat center top")
                ->finishTemplate();

// First Link Style
$firstLinkStyle = new CSSFormat(".menu li.first a");
$firstLinkStyle->set("background", "url(slidemenu/back.png) no-repeat left top")
               ->finishTemplate();

// Padding Link Style
$paddingLinkStyle = new CSSFormat(".menu li.pad");
$paddingLinkStyle->set("width", "90px")
                  ->set("height", "31px")
                  ->finishTemplate();

$paddingLinkBackground = new CSSFormat(".menu li.pad b");
$paddingLinkBackground->set("display", "block")
                       ->set("height", "31px")
                       ->set("width", "90px")
                       ->set("background", "url(slidemenu/back.png) no-repeat right top")
                       ->finishTemplate();

// Submenu Styles
$subMenuStyles = new CSSFormat(".menu ul");
$subMenuStyles->set("width", "180px")
               ->set("height", "auto")
               ->set("position", "absolute")
               ->set("top", "-130px")
               ->set("transition", "0.8s ease-in-out")
               ->set("-o-transition", "0.8s ease-in-out")
               ->set("-moz-transition", "0.8s ease-in-out")
               ->set("-webkit-transition", "all 0.8s ease-in-out")
               ->set("z-index", "1")
               ->set("padding", "10px 0")
               ->set("background", "#000")
               ->set("-webkit-box-shadow", "2px 2px 3px rgba(0, 0, 0, 0.5)")
               ->set("-moz-box-shadow", "2px 2px 3px rgba(0, 0, 0, 0.5)")
               ->set("box-shadow", "2px 2px 3px rgba(0, 0, 0, 0.5)")
               ->set("-webkit-border-radius", "8px")
               ->set("-moz-border-radius", "8px")
               ->set("border-radius", "8px")
               ->finishTemplate();

$subMenuItemWidth = new CSSFormat(".menu ul li");
$subMenuItemWidth->set("width", "180px")
                  ->finishTemplate();

$subMenuItemLink = new CSSFormat(".menu ul li a");
$subMenuItemLink->set("width", "160px")
                 ->set("height", "20px")
                 ->set("line-height", "20px")
                 ->set("background", "transparent")
                 ->finishTemplate();

// Hover Effects
$menuHoverHeight = new CSSFormat(".menu:hover");
$menuHoverHeight->set("height", "200px")
                 ->finishTemplate();

$menuLinkHoverColor = new CSSFormat(".menu a:hover");
$menuLinkHoverColor->set("color", "#0cf")
                    ->finishTemplate();

$menuLinkHoverEffect = new CSSFormat(".menu li:hover > a");
$menuLinkHoverEffect->set("color", "#0cf")
                      ->finishTemplate();

$menuHoverTransform = new CSSFormat(".menu li:hover ul");
$menuHoverTransform->set("-webkit-transform", "translate(0,161px)")
                    ->set("-moz-transform", "translate(0,161px)")
                    ->set("-o-transform", "translate(0,161px)")
                    ->set("transform", "translate(0,161px)")
                    ->finishTemplate();

$cssGen->addFormat($menuHolderStyles)
       ->addFormat($menuStyles)
       ->addFormat($menuAbsoluteStyles)
       ->addFormat($menuListItemStyles)
       ->addFormat($menuLinkStyles)
       ->addFormat($firstLinkStyle)
       ->addFormat($paddingLinkStyle)
       ->addFormat($paddingLinkBackground)
       ->addFormat($subMenuStyles)
       ->addFormat($subMenuItemWidth)
       ->addFormat($subMenuItemLink)
       ->addFormat($menuHoverHeight)
       ->addFormat($menuLinkHoverColor)
       ->addFormat($menuLinkHoverEffect)
       ->addFormat($menuHoverTransform);

$cssGen->generateFile();
