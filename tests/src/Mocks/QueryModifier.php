<?php
namespace LibretteTests\Queries\Mocks;

use Librette\Queries\IQuery;
use Librette\Queries\IQueryModifier;

/**
 * @author David Matejka
 */
class QueryModifier implements IQueryModifier
{
	public $queries = [];


	public function modify(IQuery $query)
	{
		$this->queries[] = $query;
	}

}
