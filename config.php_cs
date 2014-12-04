<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in("./src");

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->finder($finder);