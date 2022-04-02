#!/usr/bin/env php
<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Output\ConsoleOutput;

try {
    $app = new Application('Console App');

    // include commands here...
    // $app->add(new App\Commands\ExampleCommand());

    $app->run();
} catch (Exception $e) {
    $output = new ConsoleOutput();
    $output->writeln('<error>' . $e->getMessage() . '</error>');
}



