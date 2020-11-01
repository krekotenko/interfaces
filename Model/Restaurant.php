<?php

namespace Model;

use Provider\FoodProviderInterface;

class Restaurant  implements FoodProviderInterface
{

    public function getFood(): string
    {
        return 'Get food by restaurant';
    }

}