<?php

namespace Provider;

interface FoodProviderInterface
{
    /**
     * @return string
     */
    public function getFood(): string;
}