<?php

require_once 'src/HTMLGenerator/Generator.php';

use HTMLGenerator\Generator;

// Generate some HTML elements
$heading = Generator::generateHeading('Welcome to my website', 1);
$paragraph = Generator::generateParagraph('This is a sample paragraph.');

// Output the generated HTML
echo $heading;
echo $paragraph;
