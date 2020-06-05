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
 * Class Subcategory
 *
 * @method IRepository categoryRepository()
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
        return $this->categoryRepository()->one([ICategory::FIELD__NAME => $this->getCategoryName()]);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
