<?php
namespace extas\components\bv;

use extas\components\Item;
use extas\components\SystemContainer;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasWeight;
use extas\interfaces\bv\ICategory;
use extas\interfaces\bv\ICategoryRepository;
use extas\interfaces\bv\ISubcategory;

/**
 * Class Subcategory
 *
 * @package extas\components\bv
 * @author jeyroik@gmail.com
 */
class Subcategory extends Item implements ISubcategory
{
    use THasName;
    use THasDescription;
    use THasWeight;

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->config[static::FIELD__CATEGORY_NAME] ?? '';
    }

    /**
     * @return ICategory|null
     */
    public function getCategory(): ?ICategory
    {
        /**
         * @var $catRepo ICategoryRepository
         */
        $catRepo = SystemContainer::getItem(ICategoryRepository::class);

        return $catRepo->one([ICategory::FIELD__NAME => $this->getCategoryName()]);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
