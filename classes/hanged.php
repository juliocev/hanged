<?php

class Hanged
{
	const ERRORS_TO_FINISH = 5;

	private $words;
	private $errors;

	function __construct($words)
	{
		$this->words = $words;
	}


	public function run()
	{
	
	}


	public function getLetter()
	{

	}

	public function isFinished()
	{
		return $this->errors >= self::ERRORS_TO_FINISH;
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
