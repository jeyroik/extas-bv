<?php
namespace extas\components\plugins\uninstall;

use extas\components\bv\Subcategory;

/**
 * Class UninstallBVSubcategories
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik@gmail.com
 */
class UninstallBVSubcategories extends UninstallSection
{
    protected string $selfItemClass = Subcategory::class;
    protected string $selfName = 'business value subcategory';
    protected string $selfSection = 'bv_subcategories';
    protected string $selfUID = Subcategory::FIELD__NAME;
    protected string $selfRepositoryClass = 'subcategoryRepository';
}
