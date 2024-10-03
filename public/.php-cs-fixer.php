<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        // Agrega otras reglas aquí
    ])
    ->setFinder($finder);

// comando para funcionar 'vendor/bin/php-cs-fixer fix'