<?php
namespace extas\components\bv;

use extas\interfaces\bv\ICategory;
use extas\interfaces\bv\ISubcategory;
use extas\interfaces\repositories\IRepository;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasWeight;

/**
 * Class Category
 *
 * @method IRepository subcategoryRepository()
 *
 * @package extas\components\bv
 * @author jeyroik@gmail.com
 */
class Category extends Item implements ICategory
{
    use THasName;
    use THasDescription;
    use THasWeight;

    /**
     * @return array
     */
    public function getSubcategories(): array
    {
        return $this->subcategoryRepository()->all([ISubcategory::FIELD__CATEGORY_NAME => $this->getName()]);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
