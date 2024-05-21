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

$cssGen = new CSSGenerator("stylelibretto");

// Universal reset
$universalReset = new CSSFormat("*");
$universalReset->set("margin", "0px")
               ->set("padding", "0px")
               ->finishTemplate();

// Body styles
$bodyStyles = new CSSFormat("body");
$bodyStyles->set("margin-top", "20px")
            ->set("background-color", "#ccc")
            ->set("font-family", "arial, verdana, tahoma, sans-serif")
            ->finishTemplate();

// Header styles
$headerStyles = new CSSFormat("#header");
$headerStyles->set("margin", "0 auto")
              ->set("width", "1000px")
              ->set("min-height", "200px")
              ->finishTemplate();

// Left header styles
$leftheadStyles = new CSSFormat("#lefthead");
$leftheadStyles->set("height", "200px")
                ->set("width", "200px")
                ->set("background", "#fff url('../images/libretto2_200px.png') no-repeat")
                ->set("border-top-left-radius", "25px")
                ->set("float", "left")
                ->finishTemplate();

// Right header styles
$rightheadStyles = new CSSFormat("#righthead");
$rightheadStyles->set("height", "200px")
                 ->set("width", "800px")
                 ->set("background", "#fff url('../images/libretto_banner.png') no-repeat")
                 ->set("border-top-right-radius", "25px")
                 ->set("float", "left")
                 ->finishTemplate();

// Main menu bar styles
$mainmenubarStyles = new CSSFormat("#mainmenubar");
$mainmenubarStyles->set("margin", "0 auto")
                   ->set("width", "1000px")
                   ->set("height", "35px")
                   ->set("background-color", "#fff")
                   ->set("border-bottom", "2px solid black")
                   ->finishTemplate();

// Main container styles
$maincontainerStyles = new CSSFormat("#maincontainer");
$maincontainerStyles->set("overflow", "hidden")
                     ->set("margin", "0 auto")
                     ->set("width", "1000px")
                     ->set("height", "auto")
                     ->set("background-color", "#fff")
                     ->set("border-bottom", "1px solid black")
                     ->finishTemplate();

// Headline styles
$headlineStyles = new CSSFormat("#headline");
$headlineStyles->set("width", "1000px")
                ->set("height", "350px")
                ->finishTemplate();

// Head left image styles
$headlleftImgStyles = new CSSFormat("#headlleft img");
$headlleftImgStyles->set("display", "block")
                    ->set("padding-top", "40px")
                    ->set("margin", "0 auto")
                    ->finishTemplate();

// Head left styles
$headlleftStyles = new CSSFormat("#headlleft");
$headlleftStyles->set("width", "600px")
                 ->set("float", "left")
                 ->finishTemplate();

// Head right styles
$headlrightStyles = new CSSFormat("#headlright");
$headlrightStyles->set("width", "400px")
                  ->set("float", "left")
                  ->finishTemplate();

// Left content styles
$leftContentStyles = new CSSFormat("#left");
$leftContentStyles->set("width", "300px")
                   ->set("min-height", "200px")
                   ->set("height", "auto")
                   ->set("background-color", "#fff")
                   ->set("float", "left")
                   ->finishTemplate();

// Right content styles
$rightContentStyles = new CSSFormat("#right");
$rightContentStyles->set("width", "700px")
                    ->set("height", "auto")
                    ->set("background-color", "#fff")
                    ->set("float", "left")
                    ->finishTemplate();

// Right block headings styles
$rightBlockHeadingsStyles = new CSSFormat("#right.blockheadings");
$rightBlockHeadingsStyles->set("display", "block")
                          ->set("font-family", "\"Arial Narrow\", arial, sans-serif")
                          ->set("font-size", "30px")
                          ->set("color", "#fff")
                          ->set("padding-left", "10px")
                          ->set("background-color", "#65A9D6")
                          ->finishTemplate();

// Placeholder styles
$placeholderStyles = new CSSFormat("#right #placeholder");
$placeholderStyles->set("margin", "0 auto")
                   ->set("height", "auto")
                   ->set("padding-top", "30px")
                   ->set("width", "600px")
                   ->finishTemplate();

// Sections styles
$sectionsStyles = new CSSFormat("#right.sections");
$sectionsStyles->set("padding", "2px")
                ->set("float", "left")
                ->set("margin-right", "50px")
                ->set("margin-bottom", "50px")
                ->set("width", "220px")
                ->set("min-height", "50px")
                ->set("border-top-left-radius", "10px")
                ->set("border-top-right-radius", "10px")
                ->set("border", "1px solid #ccc")
                ->set("font-size", "12px")
                ->finishTemplate();

// Sections paragraph styles
$sectionsParagraphStyles = new CSSFormat("#right.sections p");
$sectionsParagraphStyles->set("border-top-left-radius", "10px")
                         ->set("border-top-right-radius", "10px")
                         ->set("background-color", "#65A9D6")
                         ->set("font-family", "\"Arial Narrow\", arial, sans-serif")
                         ->set("font-size", "30px")
                         ->set("color", "#fff")
                         ->set("padding-left", "5px")
                         ->set("height", "40px")
                         ->finishTemplate();

// Section text styles
$sectionTextStyles = new CSSFormat("#right.sectiontext");
$sectionTextStyles->set("text-align", "justify")
                   ->finishTemplate();

// Footer styles
$footerStyles = new CSSFormat("#footer");
$footerStyles->set("margin", "0 auto")
              ->set("width", "1000px")
              ->set("min-height", "200px")
              ->set("background-color", "#000")
              ->set("border-bottom-left-radius", "25px")
              ->set("border-bottom-right-radius", "25px")
              ->set("position", "relative")
              ->finishTemplate();

// Headline impact styles
$headlineImpactStyles = new CSSFormat("#headlright.headlineimpact");
$headlineImpactStyles->set("display", "block")
                      ->set("font-family", "tahoma, sans-serif")
                      ->set("font-size", "45px")
                      ->set("font-weight", "normal")
                      ->set("color", "#00f")
                      ->set("text-align", "center")
                      ->finishTemplate();

// Headline text styles
$headlineTextStyles = new CSSFormat("#headlright.headlinetext");
$headlineTextStyles->set("display", "block")
                    ->set("font-family", "arial, verdana, sans-serif")
                    ->set("font-size", "30px")
                    ->set("font-weight", "normal")
                    ->set("color", "#f00")
                    ->set("text-align", "center")
                    ->finishTemplate();

// Copyright text styles
$copyrightTextStyles = new CSSFormat("#footer #copyrighttext");
$copyrightTextStyles->set("display", "block")
                     ->set("text-align", "right")
                     ->set("font-size", "13px")
                     ->set("color", "#fff")
                     ->set("position", "absolute")
                     ->set("bottom", "20px")
                     ->set("right", "10px")
                     ->finishTemplate();

$cssGen->addFormat($universalReset)
       ->addFormat($bodyStyles)
       ->addFormat($headerStyles)
       ->addFormat($leftheadStyles)
       ->addFormat($rightheadStyles)
       ->addFormat($mainmenubarStyles)
       ->addFormat($maincontainerStyles)
       ->addFormat($headlineStyles)
       ->addFormat($headlleftImgStyles)
       ->addFormat($headlleftStyles)
       ->addFormat($headlrightStyles)
       ->addFormat($leftContentStyles)
       ->addFormat($rightContentStyles)
       ->addFormat($rightBlockHeadingsStyles)
       ->addFormat($placeholderStyles)
       ->addFormat($sectionsStyles)
       ->addFormat($sectionsParagraphStyles)
       ->addFormat($sectionTextStyles)
       ->addFormat($footerStyles)
       ->addFormat($headlineImpactStyles)
       ->addFormat($headlineTextStyles)
       ->addFormat($copyrightTextStyles);

$cssGen->generateFile();
