<?php

declare(strict_types=1);

namespace Jascha030\Hooks\Attributes;

use ReflectionClass;
use ReflectionMethod;

trait HookableTrait
{
    public function addHooks(): void
    {
        $object  = new ReflectionClass($this);
        $methods = $object->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($methods as $method) {
            $attributes = array_merge($method->getAttributes(Action::class), $method->getAttributes(Filter::class));

            foreach ($attributes as $attribute) {
                $filter = $attribute->newInstance();

                $filter->add([$this, $method->getName()], $method->getNumberOfParameters());
            }
        }
    }
}
