<?php
namespace extas\interfaces\bv;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasWeight;
use extas\interfaces\IItem;

/**
 * Interface ICategory
 *
 * @package extas\interfaces\bv
 * @author jeyroik@gmail.com
 */
interface ICategory extends IItem, IHasName, IHasDescription, IHasWeight
{
    public const SUBJECT = 'extas.bv.category';

    /**
     * @return ISubcategory[]
     */
    public function getSubcategories(): array;
}
