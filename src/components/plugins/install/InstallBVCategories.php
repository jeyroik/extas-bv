<?php
namespace extas\components\plugins\install;

use extas\components\bv\Category;

/**
 * Class InstallBVCategories
 *
 * @package extas\components\plugins\install
 * @author jeyroik@gmail.com
 */
class InstallBVCategories extends InstallSection
{
    protected string $selfRepositoryClass = 'categoryRepository';
    protected string $selfUID = Category::FIELD__NAME;
    protected string $selfSection = 'bv_categories';
    protected string $selfName = 'business value category';
    protected string $selfItemClass = Category::class;
}
