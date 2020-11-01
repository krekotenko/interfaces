<?php

namespace Model;

use Provider\FoodProviderInterface;

class Mother extends Human implements FoodProviderInterface
{

    /**
     * @return string
     */
    public function getFood(): string
    {
        return 'Get food by mom';
    }

    /**
     * @return void
     */
    protected function eat(): void
    {
        // TODO: Implement eat() method.
    }

    /**
     * @return void
     */
    protected function sleep(): void
    {
        // TODO: Implement sleep() method.
    }
}