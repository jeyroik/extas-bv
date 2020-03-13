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
    protected string $selfRepositoryClass = ICategoryRepository::class;
    protected string $selfUID = Category::FIELD__NAME;
    protected string $selfSection = 'bv_categories';
    protected string $selfName = 'business value category';
    protected string $selfItemClass = Category::class;
}
