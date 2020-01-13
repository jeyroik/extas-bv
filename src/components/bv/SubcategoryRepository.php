<?php
namespace extas\components\bv;

use extas\components\repositories\Repository;
use extas\interfaces\bv\ISubcategoryRepository;

/**
 * Class SubcategoryRepository
 *
 * @package extas\components\bv
 * @author jeyroik@gmail.com
 */
class SubcategoryRepository extends Repository implements ISubcategoryRepository
{
    protected $itemClass = Subcategory::class;
    protected $name = 'bv_subcategories';
    protected $pk = Subcategory::FIELD__NAME;
    protected $scope = 'extas';
    protected $idAs = '';
}
