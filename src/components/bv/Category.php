<?php
namespace extas\components\bv;

use extas\components\Item;
use extas\components\SystemContainer;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasWeight;
use extas\interfaces\bv\ICategory;
use extas\interfaces\bv\ISubcategory;
use extas\interfaces\bv\ISubcategoryRepository;

/**
 * Class Category
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
        /**
         * @var $subRepo ISubcategoryRepository
         */
        $subRepo = SystemContainer::getItem(ISubcategoryRepository::class);

        return $subRepo->all([ISubcategory::FIELD__CATEGORY_NAME => $this->getName()]);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}