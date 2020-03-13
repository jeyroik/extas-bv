<?php
namespace extas\interfaces\bv;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasWeight;
use extas\interfaces\IItem;

/**
 * Interface ISubcategory
 *
 * @package extas\interfaces\bv
 * @author jeyroik@gmail.com
 */
interface ISubcategory extends IItem, IHasName, IHasDescription, IHasWeight
{
    public const SUBJECT = 'extas.bv.subcategory';

    public const FIELD__CATEGORY_NAME = 'category_name';

    /**
     * @return string
     */
    public function getCategoryName(): string;

    /**
     * @return ICategory|null
     */
    public function getCategory(): ?ICategory;
}
