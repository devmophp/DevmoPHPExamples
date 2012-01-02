<?php
namespace common\daos;
class DevmoPhpExample extends \devmo\daos\Database {
	public function __construct () {
		parent::__construct(
			'localhost',					// database host
			'DevmoPhpExample',		// database name
			'DevmoPhpExample',		// database user name
			'DevmoPhpExample'			// database user password
			);
	}
}
