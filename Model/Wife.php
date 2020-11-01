<?php

namespace Model;

use Provider\FoodProviderInterface;

class Wife extends Human implements FoodProviderInterface
{

    public function getFood(): string
    {
        return 'Get food by wife';
    }

    protected function eat(): void
    {
        // TODO: Implement eat() method.
    }

    protected function sleep(): void
    {
        // TODO: Implement sleep() method.
    }
}