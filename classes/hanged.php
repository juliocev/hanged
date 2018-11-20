<?php

class Hanged
{
	const ERRORS_TO_FINISH = 5;

	private $errors;
	private $letterSelected;

	function __construct($errors, $letterSelected)
	{
		$this->errors = $errors;
		$this->letterSelected = $letterSelected;
	}

	public function run()
	{
		$view = new View('Escribe una letra: ');
		$view->printForm(Config::get('base_url') . '/controllers/getLetterController.php', 'POST');
	}

	private function isFinished()
	{
		return $this->errors >= self::ERRORS_TO_FINISH;
	}

	public function getLetter()
	{

	}

	

	public function updateErrors()
	{
		if (!$this->isLetterInWord()) 
		{
			$this->errors = $this->errors++;
		}
	}

	public function isLetterInWord()
	{

	}
}
