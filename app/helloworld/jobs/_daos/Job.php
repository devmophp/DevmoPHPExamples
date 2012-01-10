<?php
namespace helloworld\jobs\daos;
class Job extends \common\daos\devmoPhpExample {
	
	public function getAll () {
		return $this->query("SELECT id, title, department, description FROM Job ORDER BY id");
	}
	
}
