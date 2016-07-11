<?php

require_once dirname(__FILE__).'/vendor/autoload.php';

$markdown = new \RayRutjes\AryaMarkdown\AryaMarkdown();

$arya = new \RayRutjes\Arya\Arya(dirname(__FILE__).'/src/');
$arya->use($markdown);
$arya->setClean(true);
$arya->build();
