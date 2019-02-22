<?php

namespace Src;

use Src\Query;

class Model implements Query {

	public function find($id) {
		if ( isset($this->data[$id]) ) {
			return $this->data[$id];
		}
		return NULL;
	}

	public function all() {
		return $this->data;
	}
}