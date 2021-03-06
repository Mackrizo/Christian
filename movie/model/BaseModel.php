<?php

namespace model;

class BaseModel {
	protected $id;

	/**
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	// Methods
	public function properties() {
		return get_objectVars ( $this );
	}
	public function propertiesNames() {
		return arrayKeys ( getObjectVars ( $this ) );
	}
	public function toString() {
		return $this - id;
	}
}

