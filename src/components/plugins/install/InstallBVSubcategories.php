<?php
namespace extas\components\plugins\install;

use extas\components\bv\Subcategory;

/**
 * Class InstallBVSubcategories
 *
 * @package extas\components\plugins\install
 * @author jeyroik@gmail.com
 */
class InstallBVSubcategories extends InstallSection
{
    protected string $selfItemClass = Subcategory::class;
    protected string $selfName = 'business value subcategory';
    protected string $selfSection = 'bv_subcategories';
    protected string $selfUID = Subcategory::FIELD__NAME;
    protected string $selfRepositoryClass = 'subcategoryRepository';
}
