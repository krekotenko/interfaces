<?php

namespace Model;

abstract class Human
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int;
     */
    protected $age;

    /**
     * @var int;
     */
    protected $height;

    /**
     * @var int;
     */
    protected $weigh;

    /**
     * @return void
     */

    /**
     * Human constructor.
     * @param string $name
     * @param int $age
     * @param int $height
     * @param int $weigh
     */
    public function __construct(string $name, int $age, int $height, int $weigh) {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weigh = $weigh;
    }

    /**
     * @return void
     */
    abstract protected function sleep(): void;
}