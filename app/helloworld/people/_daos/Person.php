<?php
namespace helloworld\people\daos;
class Person extends \common\daos\DevmoPhpExample {
	
	public function getAll () {
		return $this->query("SELECT id, firstName, lastName FROM Person ORDER BY id");
	}
	
}
