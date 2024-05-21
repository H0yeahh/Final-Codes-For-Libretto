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

$cssGen = new CSSGenerator("stylemenu");

// Main menu, sub1, sub2 styles
$mainMenuSubStyles = new CSSFormat("#mainmenu,.sub1,.sub2");
$mainMenuSubStyles->set("list-style", "none")
                   ->finishTemplate();

// Main menu list item styles
$mainMenuListItemStyles = new CSSFormat("#mainmenu li");
$mainMenuListItemStyles->set("width", "125px")
                        ->set("position", "relative")
                        ->set("float", "left")
                        ->set("margin-right", "4px")
                        ->set("text-align", "center")
                        ->finishTemplate();

// Main menu link styles
$mainMenuLinkStyles = new CSSFormat("#mainmenu a");
$mainMenuLinkStyles->set("font-weight", "bold")
                    ->set("background-color", "#fff")
                    ->set("color", "#000")
                    ->set("text-decoration", "none")
                    ->set("display", "block")
                    ->set("width", "125px")
                    ->set("height", "35px")
                    ->set("line-height", "35px")
                    ->finishTemplate();

// Sub1 link styles
$sub1LinkStyles = new CSSFormat("#mainmenu.sub1 a");
$sub1LinkStyles->set("font-size", "12px")
                ->finishTemplate();

// Sub2 link styles
$sub2LinkStyles = new CSSFormat("#mainmenu.sub2 a");
$sub2LinkStyles->finishTemplate(); // No specific styles applied here

// Hover effects on main menu links
$hoverEffects = new CSSFormat("#mainmenu li:hover > a, #mainmenu li:hover a:hover");
$hoverEffects->set("background-color", "#237291")
              ->set("color", "#fff")
              ->finishTemplate();

// Sub1 hover effect
$sub1HoverEffect = new CSSFormat("#mainmenu li:hover.sub1");
$sub1HoverEffect->set("display", "block")
                 ->finishTemplate();

// Sub2 hover effect
$sub2HoverEffect = new CSSFormat("#mainmenu.sub1 li:hover.sub2");
$sub2HoverEffect->set("display", "block")
                 ->finishTemplate();

// Sub1 and sub2 styles
$sub1Styles = new CSSFormat(".sub1");
$sub1Styles->set("display", "none")
             ->set("position", "absolute")
             ->finishTemplate();

$sub2Styles = new CSSFormat(".sub2");
$sub2Styles->set("display", "none")
             ->set("position", "absolute")
             ->set("top", "0px")
             ->set("left", "127px")
             ->finishTemplate();

$cssGen->addFormat($mainMenuSubStyles)
       ->addFormat($mainMenuListItemStyles)
       ->addFormat($mainMenuLinkStyles)
       ->addFormat($sub1LinkStyles)
       ->addFormat($hoverEffects)
       ->addFormat($sub1HoverEffect)
       ->addFormat($sub2HoverEffect)
       ->addFormat($sub1Styles)
       ->addFormat($sub2Styles);

$cssGen->generateFile();
