<?php

/**
 * Created by PhpStorm.
 * User: csikibalazs
 * Date: 2016. 11. 08.
 * Time: 19:30
 */
class PatternReplacer
{
    private $patterns;

    private $replacements;

    public function __construct()
    {
        $this->patterns = array(
            0 => "/\*\*(.*)\*\*/ms",
            1 => "/ _([^_]*)_ /ms",
            2 => "/\!\[([^]]*)\]\(([^)]*)\)/ms",
            3 => "/\[([^]]*)\]\(([^)]*)\)/ms",
        );

        $this->replacements = array(
            0 => "<strong>$1</strong>",
            1 => " <i>$1</i> ",
            2 => "<img src='$1' alt='$2' />",
            3 => "<a href='$1'>$2</a>",
        );
    }

    public function replace($string)
    {
        return preg_replace($this->patterns,$this->replacements,$string);
    }
}