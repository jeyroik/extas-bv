<?php
namespace extas\components\bv;

use extas\components\repositories\Repository;
use extas\interfaces\bv\ICategoryRepository;

/**
 * Class CategoryRepository
 *
 * @package extas\components\bv
 * @author jeyroik@gmail.com
 */
class CategoryRepository extends Repository implements ICategoryRepository
{
    protected string $idAs = '';
    protected string $scope = 'extas';
    protected string $pk = Category::FIELD__NAME;
    protected string $name = 'bv_categories';
    protected string $itemClass = Category::class;
}
