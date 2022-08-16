<?php

declare(strict_types=1);

function add_filter(string $tag, callable|Closure $callable, int $prio = 10, int $acceptedArgs = 1): void
{
    echo $tag, ' ', $prio, ' ', $acceptedArgs, ' ', $callable('test');
}

function add_action(string $tag, callable|Closure $callable, int $prio = 10, int $acceptedArgs = 1): void
{
    add_filter($tag, $callable, $prio, $acceptedArgs);
}
