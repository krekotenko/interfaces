<?php

namespace Model;

use Provider\FoodProviderInterface;
use Traits\EatingTimeLoggerTrait;

class Man extends Human
{
    use EatingTimeLoggerTrait;

    protected $foodProvider;

    public function __construct(string $name, int $age, int $height, int $weigh, FoodProviderInterface $foodProvider)
    {
        parent::__construct($name, $age, $height, $weigh);
        $this->foodProvider = $foodProvider;
    }

    /**
     * @return void
     */
    public function eat(): void
    {
        $food = $this->foodProvider->getFood();
        $this->eatingLog();
        $this->eatingLogEcho($food);
    }

    /**
     * @return void
     */
    public function sleep(): void
    {
        // TODO: Implement sleep() method.
    }
}