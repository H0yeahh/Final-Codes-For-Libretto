<?php

namespace HtmlGenerator;

require_once __DIR__ . '/../../html/src/HtmlGenerator/HTMLGenerator.php';

use HtmlGenerator\HtmlGenerator;


// Create HTML elements using the HtmlGenerator class
$html = HtmlGenerator::create('html');

// Head section
$head = HtmlGenerator::create('head')
    ->addChild(
        HtmlGenerator::create('meta')
            ->setAttribute('charset', 'UTF-8')
        )
        ->addChild(
            HtmlGenerator::create('meta')
                ->setAttribute('name', 'author')
                ->setAttribute('content', 'Roderick A. Bandalan')
        )
        ->addChild(
            HtmlGenerator::create('title')
                ->setContent('Libretto Books')
        )
        ->addChild(
            HtmlGenerator::create('link')
                ->setAttribute('rel', 'stylesheet')
                ->setAttribute('type', 'text/css')
                ->setAttribute('href', 'styles/libretto.css')
        )
        ->addChild(
            HtmlGenerator::create('link')
            ->setAttribute('rel', 'stylesheet')
            ->setAttribute('type', 'text/css')
            ->setAttribute('href', 'styles/libmenu.css')
        );

// Body section
$body = HtmlGenerator::create('body');

// Header section
    $header = HtmlGenerator::create('section')
                ->setAttribute('id', 'header');

    $lefthead = HtmlGenerator::create('section')
                ->setAttribute('id', 'lefthead');

    $righthead = HtmlGenerator::create('section')
                ->setAttribute('id', 'righthead');

    $header->addChild($lefthead);
    $header->addChild($righthead);


// Main menu bar
    $mainmenubar = HtmlGenerator::create('section')
                    ->setAttribute('id', 'mainmenubar');

    $mainmenu = HtmlGenerator::create('ul')
                    ->setAttribute('id', 'mainmenu')

                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                                ->setAttribute('href', '#')
                                ->setContent('Home')
                            )
                        );

    $reading = HtmlGenerator::create('li')
                ->addChild(
                    HtmlGenerator::create('a')
                        ->setAttribute('href', '#')
                        ->setContent('Reading')
                    );

    $readingSub1 = HtmlGenerator::create('ul')
                    ->setAttribute('class', 'sub1')
                    
                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                                ->setAttribute('href', '#')
                                ->setContent('Novels')
                                )
                        )

                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                                ->setAttribute('href', '#')
                                ->setContent('Hardbound')
                                )
                        )

                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                                ->setAttribute('href', '#')
                                ->setContent('Paperback')
                                )
                        )

                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                                ->setAttribute('href', '#')
                                ->setContent('Comics')
                                )
                        )

                ->addChild(
                    HtmlGenerator::create('li')
                        ->addChild(
                            HtmlGenerator::create('a')
                            ->setAttribute('href', '#')
                            ->setContent('Categories')
                                )
                        );

    $reading->addChild($readingSub1);
    $mainmenu->addChild($reading);

    $mainmenu
        ->addChild(
            HtmlGenerator::create('li')

        ->addChild(
            HtmlGenerator::create('a')
                ->setAttribute('href', '#')
                ->setContent('Featured')
            )
        )

        ->addChild(
            HtmlGenerator::create('li')
                ->addChild(HtmlGenerator::create('a')
                ->setAttribute('href', '#')
                ->setContent('Orders')
            )
        )

        ->addChild(
            HtmlGenerator::create('li')
            ->addChild(HtmlGenerator::create('a')
            ->setAttribute('href', '#')
            ->setContent('Deal & Offers')
            )
        );

    $mainmenubar->addChild($mainmenu);

// Main container
    $maincontainer = HtmlGenerator::create('section')
                    ->setAttribute('id', 'maincontainer');

    $headline = HtmlGenerator::create('section')
                    ->setAttribute('id', 'headline');

    $headlleft = HtmlGenerator::create('section')
                    ->setAttribute('id', 'headlleft')
        ->addChild(
            HtmlGenerator::create('img')
                ->setAttribute('src', 'images/hunger_games_trilogy.jpg')
                ->setAttribute('title', 'The Hunger Games Trilogy')
                ->setAttribute('alt', 'The Hunger Games Trilogy')
        );

    $headlright = HtmlGenerator::create('section')
                    ->setAttribute('id', 'headlright')
        ->setContent('<br /><br /><span class="headlineimpact">Special Offer!!!</span><br /><span class="headlinetext">Limited stocks only!!!</span><br />');
    
        $headline->addChild($headlleft);
        $headline->addChild($headlright);

        $left = HtmlGenerator::create('section')
                ->setAttribute('id', 'left');

        $right = HtmlGenerator::create('section')
                    ->setAttribute('id', 'right')
        
            ->addChild(
                HtmlGenerator::create('span')
                    ->setAttribute('class', 'blockheadings')
                    ->setContent('Book News')
            );

        $placeholder = HtmlGenerator::create('section')
                    ->setAttribute('id', 'placeholder');

    $sections = [
            'Literature', 'Arts', 'Drama', 'Science/Fiction', 'Horror', 'Love Story'
        ];

foreach ($sections as $section) {
    $sec = HtmlGenerator::create('section')
            ->setAttribute('class', 'sections')
        
        ->addChild(
            HtmlGenerator::create('p')
                ->setContent($section)
            )

        ->addChild(
            HtmlGenerator::create('span')
                ->setAttribute('class', 'sectiontext')
                ->setContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
            );

    $placeholder->addChild($sec)
        ->addChild(
            HtmlGenerator::create('br')
        );
}

    $right->addChild($placeholder);

    $maincontainer->addChild($headline);
    $maincontainer->addChild($left);
    $maincontainer->addChild($right);

// Footer
    $footer = HtmlGenerator::create('section')
                ->setAttribute('id', 'footer')

        ->addChild(
            HtmlGenerator::create('span')
                ->setAttribute('id', 'copyrighttext')
                ->setContent('Copyright &copy; International Web Development, All rights reserved 2013')
            )

        ->addChild(
            HtmlGenerator::create('br')
        );

    $body->addChild($header);

    $body->addChild($mainmenubar);

    $body->addChild($maincontainer);

    $body->addChild($footer);

// Combine head and body into html
    $html->addChild($head);

    $html->addChild($body);

// Render the final HTML
echo "<!DOCTYPE html>\n" . $html->render();

?>

