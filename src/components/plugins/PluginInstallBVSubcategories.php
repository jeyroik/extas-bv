<?php
namespace extas\components\plugins;

use extas\components\bv\Subcategory;
use extas\interfaces\bv\ISubcategoryRepository;

/**
 * Class PluginInstallBVSubcategories
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBVSubcategories extends PluginInstallDefault
{
    protected string $selfItemClass = Subcategory::class;
    protected string $selfName = 'business value subcategory';
    protected string $selfSection = 'bv_subcategories';
    protected string $selfUID = Subcategory::FIELD__NAME;
    protected string $selfRepositoryClass = ISubcategoryRepository::class;
}
