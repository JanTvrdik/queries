<?php
namespace Librette\Queries\Internal;

use Librette\Queries\IQueryable;
use Librette\Queries\IQueryHandler;

/**
 * @author David Matejka
 */
class InternalQueryable implements IQueryable
{

	/** @var IQueryHandler */
	private $queryHandler;


	public function __construct(IQueryHandler $queryHandler)
	{
		$this->queryHandler = $queryHandler;
	}


	/**
	 * @return IQueryHandler
	 */
	public function getHandler()
	{
		return $this->queryHandler;
	}

}
