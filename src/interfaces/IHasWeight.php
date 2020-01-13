<?php
namespace extas\interfaces;

/**
 * Interface IHasWeight
 *
 * @package extas\interfaces
 * @author jeyroik@gmail.com
 */
interface IHasWeight
{
    const FIELD__WEIGHT = 'weight';

    /**
     * @return int
     */
    public function getWeight(): int;

    /**
     * @param int $weight
     *
     * @return $this
     */
    public function setWeight(int $weight);
}
