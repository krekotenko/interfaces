<?php

namespace Model;

use Provider\FoodProviderInterface;

class  GirlFriend extends Human implements FoodProviderInterface
{
    /**
     * @return string
     */
    public function getFood(): string
    {
        return 'Get food by girlfriend';
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