<?php

class JsonHeader extends AbstractPicoPlugin
{
    /**
     * API version used by this plugin
     *
     * @var int
     */
    const API_VERSION = 3;


    public function onTwigRegistered(Twig_Environment &$twig)
    {
        $twig->addFilter(new \Twig\TwigFilter('json_header', [$this, 'setJsonHeader']));
    }

    public function setJsonHeader($pages)
    {
        header('Content-Type: application/json');
        return $pages;
    }
}
