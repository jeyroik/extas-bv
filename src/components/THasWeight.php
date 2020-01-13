<?php
namespace extas\components;

use extas\interfaces\IHasWeight;

/**
 * Trait THasWeight
 *
 * @property $config
 *
 * @package extas\components
 * @author jeyroik@gmail.com
 */
trait THasWeight
{
    /**
     * @return int
     */
    public function getWeight(): int
    {
        return (int) ($this->config[IHasWeight::FIELD__WEIGHT] ?? 0);
    }

    /**
     * @param int $weight
     *
     * @return $this
     */
    public function setWeight(int $weight)
    {
        $this->config[IHasWeight::FIELD__WEIGHT] = $weight;

        return $this;
    }
}
