<?php
require_once "Autoloader.php";
  
spl_autoload_register("autoload");
use Generator\CSSGenerator as CSSGenerator;
use Generator\CSSFormat as CSSFormat;

$cssGen = new CSSGenerator("styleslibretto");

$universalSelector = new CSSFormat('*');
$universalSelector->set('margin', '0px')
                  ->set('padding', '0px');
$universalSelector->finishTemplate();

$bodyStyles = new CSSFormat('body');
$bodyStyles->set('margin-top', '20px')
           ->set('background-color', '#ccc')
           ->set('font-family', 'arial, verdana, tahoma, sans-serif');
$bodyStyles->finishTemplate();

$headerStyles = new CSSFormat('#header');
$headerStyles->set('margin', '0 auto')
             ->set('width', '1000px')
             ->set('min-height', '200px');
$headerStyles->finishTemplate();


$leftheadStyles = new CSSFormat('#lefthead');
$leftheadStyles->set('height', '200px')
               ->set('width', '200px')
               ->set('background', '#fff url("images/libretto2_200px.png") no-repeat')
               ->set('border-top-left-radius', '25px')
               ->set('float', 'left');
$leftheadStyles->finishTemplate();

$rightheadStyles = new CSSFormat('#righthead');
$rightheadStyles->set('height', '200px')
                 ->set('width', '800px')
                 ->set('background', '#fff url("images/libretto_banner.png") no-repeat')
                 ->set('border-top-right-radius', '25px')
                 ->set('float', 'left');
$rightheadStyles->finishTemplate();

$mainmenubarStyles = new CSSFormat('#mainmenubar');
$mainmenubarStyles->set('margin', '0 auto')
                   ->set('width', '1000px')
                   ->set('height', '35px')
                   ->set('background-color', '#fff')
                   ->set('border-bottom', '2px solid black');
$mainmenubarStyles->finishTemplate();

$maincontainerStyles = new CSSFormat('#maincontainer');
$maincontainerStyles->set('overflow', 'hidden')
                     ->set('margin', '0 auto')
                     ->set('width', '1000px')
                     ->set('height', 'auto')
                     ->set('background-color', '#fff')
                     ->set('border-bottom', '1px solid black');
$maincontainerStyles->finishTemplate();

$headlineStyles = new CSSFormat('#headline');
$headlineStyles->set('width', '1000px')
                ->set('height', '350px');
$headlineStyles->finishTemplate();

$headlleftImgStyles = new CSSFormat('#headlleft img');
$headlleftImgStyles->set('display', 'block')
                    ->set('padding-top', '40px')
                    ->set('margin', '0 auto');
$headlleftImgStyles->finishTemplate();

$headlleftStyles = new CSSFormat('#headlleft');
$headlleftStyles->set('width', '600px')
                 ->set('float', 'left');
$headlleftStyles->finishTemplate();

$headlrightStyles = new CSSFormat('#headlright');
$headlrightStyles->set('width', '400px')
                  ->set('float', 'left');
$headlrightStyles->finishTemplate();

$leftStyles = new CSSFormat('#left');

$leftStyles->set('width', '300px')
            ->set('min-height', '200px')
            ->set('height', 'auto')
            ->set('background-color', '#fff')
            ->set('float', 'left');
$leftStyles->finishTemplate();

$rightStyles = new CSSFormat('#right');
$rightStyles->set('width', '700px')
             ->set('height', 'auto')
             ->set('background-color', '#fff')
             ->set('float', 'left');
$rightStyles->finishTemplate();

$rightBlockheadingsStyles = new CSSFormat('#right .blockheadings');
$rightBlockheadingsStyles->set('display', 'block')
                          ->set('font-family', '"Arial Narrow", arial, sans-serif')
                          ->set('font-size', '30px')
                          ->set('color', '#fff')
                          ->set('padding-left', '10px')
                          ->set('background-color', '#65A9D6');
$rightBlockheadingsStyles->finishTemplate();

$rightPlaceholderStyles = new CSSFormat("#right .placeholder");
$rightPlaceholderStyles->set("margin", "0 auto")
                         ->set("height", "auto")
                         ->set("padding-top", "30px")
                         ->set("width", "600px");
$rightPlaceholderStyles->finishTemplate();

$rightSectionsStyles = new CSSFormat("#right .sections");
$rightSectionsStyles->set("padding", "2px")
                     ->set("float", "left")   
                     ->set("margin-right", "50px")
                     ->set("margin-bottom", "50px")
                     ->set("width", "220px")
                     ->set("min-height", "50px")
                     ->set("border-top-left-radius", "10px")
                     ->set("border-top-right-radius", "10px")
                     ->set("border", "1px solid #ccc")
                     ->set("font-size", "12px");
$rightSectionsStyles->finishTemplate();

$rightSectionsParagraphStyles = new CSSFormat("#right .sections p");
$rightSectionsParagraphStyles->set("border-top-left-radius", "10px")
                              ->set("border-top-right-radius", "10px")
                              ->set("background-color", "#65A9D6")
                              ->set("font-family", "\"Arial Narrow\", arial, sans-serif")
                              ->set("font-size", "30px")
                              ->set("color", "#fff")
                              ->set("padding-left", "5px")
                              ->set("height", "40px");
$rightSectionsParagraphStyles->finishTemplate();

$rightSectionTextStyles = new CSSFormat("#right.sectiontext");
$rightSectionTextStyles->set("text-align", "justify");
$rightSectionTextStyles->finishTemplate();

$footerStyles = new CSSFormat("#footer");
$footerStyles->set("margin", "0 auto")
              ->set("width", "1000px")
              ->set("min-height", "200px")
              ->set("background-color", "#000")
              ->set("border-bottom-left-radius", "25px")
              ->set("border-bottom-right-radius", "25px")
              ->set("position", "relative");
$footerStyles->finishTemplate();

$headlrightHeadlineImpactStyles = new CSSFormat("#headlright .headlineimpact");
$headlrightHeadlineImpactStyles->set("display", "block") 
                                 ->set("font-family", "tahoma, sans-serif")
                                 ->set("font-size", "45px")
                                 ->set("font-weight", "normal")
                                 ->set("color", "#00f")
                                 ->set("text-align", "center");
$headlrightHeadlineImpactStyles->finishTemplate();

$headlrightHeadlinetextStyles = new CSSFormat("#headlright .headlinetext");
$headlrightHeadlinetextStyles->set("display", "block")
                               ->set("font-family", "arial, verdana, sans-serif")
                               ->set("font-size", "30px")
                               ->set("font-weight", "normal")
                               ->set("color", "#f00")
                               ->set("text-align", "center");
$headlrightHeadlinetextStyles->finishTemplate();

$footerCopyrighttextStyles = new CSSFormat("#footer #copyrighttext");
$footerCopyrighttextStyles->set("display", "block")
                            ->set("text-align", "right")
                            ->set("font-size", "13px")
                            ->set("color", "#fff")
                            ->set("position", "absolute")
                            ->set("bottom", "20px")
                            ->set("right", "10px");
$footerCopyrighttextStyles->finishTemplate();

$cssGen->addFormat($universalSelector)
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
       ->addFormat($leftStyles)
       ->addFormat($rightStyles)
       ->addFormat($rightBlockheadingsStyles)
       ->addFormat($rightPlaceholderStyles)
       ->addFormat($rightSectionsStyles)
       ->addFormat($rightSectionsParagraphStyles)
       ->addFormat($rightSectionTextStyles)
       ->addFormat($footerStyles)
       ->addFormat($headlrightHeadlineImpactStyles)
       ->addFormat($headlrightHeadlinetextStyles)
       ->addFormat($footerCopyrighttextStyles);

$cssGen->generateFile();