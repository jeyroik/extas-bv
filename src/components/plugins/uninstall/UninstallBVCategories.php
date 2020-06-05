<?php
namespace extas\components\plugins\uninstall;

use extas\components\bv\Category;

/**
 * Class UninstallBVCategories
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik@gmail.com
 */
class UninstallBVCategories extends UninstallSection
{
    protected string $selfRepositoryClass = 'categoryRepository';
    protected string $selfUID = Category::FIELD__NAME;
    protected string $selfSection = 'bv_categories';
    protected string $selfName = 'business value category';
    protected string $selfItemClass = Category::class;
}
