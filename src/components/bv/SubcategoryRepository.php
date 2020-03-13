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
    protected string $itemClass = Subcategory::class;
    protected string $name = 'bv_subcategories';
    protected string $pk = Subcategory::FIELD__NAME;
    protected string $scope = 'extas';
    protected string $idAs = '';
}
