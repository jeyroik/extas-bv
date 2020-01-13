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
    protected $selfItemClass = Subcategory::class;
    protected $selfName = 'business value subcategory';
    protected $selfSection = 'bv_subcategories';
    protected $selfUID = Subcategory::FIELD__NAME;
    protected $selfRepositoryClass = ISubcategoryRepository::class;
}
