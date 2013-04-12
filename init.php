<?php
$hookContainer->registerElementHook(
        'issues/form',
        '../../Plugin/CcFibonacciWorker/View/Element/fibonacci',
        false
);

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('Fibonacci Worker','0.1');


