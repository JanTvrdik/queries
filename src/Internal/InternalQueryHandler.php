<?php
namespace Librette\Queries\Internal;

use Librette\Queries\IOuterQuery;
use Librette\Queries\IQuery;
use Librette\Queries\IQueryHandler;
use Librette\Queries\IQueryHandlerAccessor;
use Nette\Object;

/**
 * @author David Matejka
 */
class InternalQueryHandler extends Object implements IQueryHandler
{

	/** @var IQueryHandlerAccessor */
	private $queryHandlerAccessor;


	/**
	 * @param IQueryHandlerAccessor
	 */
	public function __construct(IQueryHandlerAccessor $queryHandlerAccessor)
	{
		$this->queryHandlerAccessor = $queryHandlerAccessor;
	}


	public function supports(IQuery $query)
	{
		return $query instanceof IOuterQuery;
	}


	public function fetch(IQuery $query)
	{
		return $query->fetch(new InternalQueryable($this->queryHandlerAccessor->get()));
	}

}
