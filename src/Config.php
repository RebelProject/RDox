<?php namespace RebelProject\RDox;


class Config {

	//-------------------------------------------------------------------------

	protected $defaults = [];
	protected $config   = [];

	//-------------------------------------------------------------------------

	public function __construct($default_config = null) {

		if ($default_config) {
			$this->loadDefaults($default_config);
		}
	}

	//-------------------------------------------------------------------------

	public function load($file) {

	}

	//-------------------------------------------------------------------------

	public function loadDefaults($file) {
		$this->defaults = $this->loadFile($file);
		$this->config   = $this->defaults;
	}

	//-------------------------------------------------------------------------

	protected function loadFile($file) {
		if (file_exists($file)) {
			echo $ext = pathinfo($file, PATHINFO_EXTENSION);
			exit;
			$config = file_get_contents($file);
		}
	}

	//-------------------------------------------------------------------------

}