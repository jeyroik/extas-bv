<?php
namespace extas\components\plugins;

use extas\components\bv\Category;
use extas\interfaces\bv\ICategoryRepository;

/**
 * Class PluginInstallBVCategories
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBVCategories extends PluginInstallDefault
{
    protected $selfRepositoryClass = ICategoryRepository::class;
    protected $selfUID = Category::FIELD__NAME;
    protected $selfSection = 'bv_categories';
    protected $selfName = 'business value category';
    protected $selfItemClass = Category::class;
}
