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
    protected $idAs = '';
    protected $scope = 'extas';
    protected $pk = Category::FIELD__NAME;
    protected $name = 'bv_categories';
    protected $itemClass = Category::class;
}
