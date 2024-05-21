<?php
require_once "Autoloader.php";
  
spl_autoload_register("autoload");
use Generator\CSSGenerator as CSSGenerator;
use Generator\CSSFormat as CSSFormat;

$cssGen = new CSSGenerator("styleslibmenu");

$mainMenuSubSelectors = new CSSFormat('#mainmenu, .sub1, .sub2');
$mainMenuSubSelectors->set('list-style', 'none');
$mainMenuSubSelectors->finishTemplate();

$mainMenuListItems = new CSSFormat('#mainmenu li');
$mainMenuListItems->set('width', '125px')
                   ->set('position', 'relative')
                   ->set('float', 'left')
                   ->set('margin-right', '4px')
                   ->set('text-align', 'center');
$mainMenuListItems->finishTemplate();

$mainMenuLinks = new CSSFormat('#mainmenu a');
$mainMenuLinks->set('font-weight', 'bold')
               ->set('background-color', '#fff')
               ->set('color', '#000')
               ->set('text-decoration', 'none')
               ->set('display', 'block')
               ->set('width', '125px')
               ->set('height', '35px')
               ->set('line-height', '35px');
$mainMenuLinks->finishTemplate();

$sub1Links = new CSSFormat('#mainmenu .sub1 a');
$sub1Links->set('font-size', '12px');
$sub1Links->finishTemplate();

$sub2Links = new CSSFormat('#mainmenu .sub2 a');
/* $sub2Links->set('margin-left', '5px') // Commented out
             ->set('border', '1px solid #000'); // Commented out */
$sub2Links->finishTemplate();

$hoverLink = new CSSFormat('#mainmenu li:hover > a');
$hoverLink->set('background-color', '#237291')
          ->set('color', '#fff');
$hoverLink->finishTemplate();

$hoverHoverLink = new CSSFormat('#mainmenu li:hover a:hover');
$hoverHoverLink->set('background-color', 'aqua')
               ->set('color', '#000');
$hoverHoverLink->finishTemplate();

$sub1Display = new CSSFormat('#mainmenu .sub1');
$sub1Display->set('display', 'none')
             ->set('position', 'absolute');
$sub1Display->finishTemplate();

$sub2Properties = new CSSFormat('#mainmenu .sub2');
$sub2Properties->set('display', 'none')
                ->set('position', 'absolute')
                ->set('top', '0px')
                ->set('left', '127px');
$sub2Properties->finishTemplate();

$hoverSub1Display = new CSSFormat('#mainmenu li:hover .sub1');
$hoverSub1Display->set('display', 'block');
$hoverSub1Display->finishTemplate();

$hoverSub2Display = new CSSFormat('#mainmenu .sub1 li:hover .sub2');
$hoverSub2Display->set('display', 'block');
$hoverSub2Display->finishTemplate();

$cssGen->addFormat($mainMenuSubSelectors)
       ->addFormat($mainMenuListItems)
       ->addFormat($mainMenuLinks)
       ->addFormat($sub1Links)
       ->addFormat($sub2Links)
       ->addFormat($hoverLink)
       ->addFormat($hoverHoverLink)
       ->addFormat($sub1Display)
       ->addFormat($sub2Properties)
       ->addFormat($hoverSub1Display)
       ->addFormat($hoverSub2Display);
       
$cssGen->generateFile();