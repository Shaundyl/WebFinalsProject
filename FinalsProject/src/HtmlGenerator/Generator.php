<?php

namespace HTMLGenerator;

class Generator {
    public static function generateHeading($text, $level = 1) {
        return "<h$level>$text</h$level>";
    }

    public static function generateParagraph($text) {
        return "<p>$text</p>";
    }

    // You can add more methods to generate other HTML elements...
}
