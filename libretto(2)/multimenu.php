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

$cssGen = new CSSGenerator("stylemultimenu");

// Universal reset
$universalReset = new CSSFormat("*");
$universalReset->set("margin", "0px")
               ->set("padding", "0px")
               ->finishTemplate();

// Body styles
$bodyStyles = new CSSFormat("body");
$bodyStyles->set("margin-top", "30px")
            ->set("margin-left", "40px")
            ->set("font-family", "arial, verdana, tahoma, sans-serif")
            ->finishTemplate();

// Main menu styles
$mainMenuStyles = new CSSFormat("#mainmenu");
$mainMenuStyles->set("list-style-type", "none")
                ->set("position", "absolute")
                ->set("bottom", "0")
                ->finishTemplate();

$mainMenuLiStyles = new CSSFormat("#mainmenu li");
$mainMenuLiStyles->set("width", "125px")
                  ->set("position", "relative")
                  ->set("float", "left")
                  ->set("margin-right", "4px")
                  ->set("text-align", "center")
                  ->finishTemplate();

$mainMenuLinkStyles = new CSSFormat("#mainmenu a");
$mainMenuLinkStyles->set("background-color", "#ccc")
                    ->set("color", "#000")
                    ->set("text-decoration", "none")
                    ->set("display", "block")
                    ->set("width", "125px")
                    ->set("height", "35px")
                    ->set("line-height", "35px")
                    ->finishTemplate();

$mainMenuSub1Styles = new CSSFormat("#mainmenu.sub1 a");
$mainMenuSub1Styles->set("margin-top", "3px")
                    ->finishTemplate();

$mainMenuSub2Styles = new CSSFormat("#mainmenu.sub2 a");
$mainMenuSub2Styles->set("margin-left", "5px")
                    ->finishTemplate();

$mainMenuHoverStyles = new CSSFormat("#mainmenu li:hover > a");
$mainMenuHoverStyles->set("background-color", "#237291")
                     ->finishTemplate();

$mainMenuLinkHoverStyles = new CSSFormat("#mainmenu li:hover a:hover");
$mainMenuLinkHoverStyles->set("background-color", "aqua")
                         ->finishTemplate();

$mainMenuSub1Display = new CSSFormat("#mainmenu li:hover.sub1");
$mainMenuSub1Display->set("display", "block")
                     ->finishTemplate();

$mainMenuSub2Display = new CSSFormat("#mainmenu.sub1 li:hover.sub2");
$mainMenuSub2Display->set("display", "block")
                     ->finishTemplate();

$footerStyles = new CSSFormat("footer");
$footerStyles->set("position", "absolute")
             ->set("bottom", "0")
             ->set("height", "30vh")
             ->set("width", "100%")
             ->set("background-color", "#000")
             ->finishTemplate();

$copyrightBoxStyles = new CSSFormat("#copyright-box");
$copyrightBoxStyles->set("position", "absolute")
                   ->set("bottom", "0")
                   ->set("text-align", "center")
                   ->set("color", "#fff")
                   ->set("width", "100%")
                   ->set("height", "1.2rem")
                   ->set("line-height", "1.2rem")
                   ->finishTemplate();

$cssGen->addFormat($universalReset)
       ->addFormat($bodyStyles)
       ->addFormat($mainMenuStyles)
       ->addFormat($mainMenuLiStyles)
       ->addFormat($mainMenuLinkStyles)
       ->addFormat($mainMenuSub1Styles)
       ->addFormat($mainMenuSub2Styles)
       ->addFormat($mainMenuHoverStyles)
       ->addFormat($mainMenuLinkHoverStyles)
       ->addFormat($mainMenuSub1Display)
       ->addFormat($mainMenuSub2Display)
       ->addFormat($footerStyles)
       ->addFormat($copyrightBoxStyles);

$cssGen->generateFile();
