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

	private function getWord()
	{
		$specialCharacters = ['.', ',', '$', '?', '&', ' '];

		foreach ($this->words as $key => $word) 
		{
			$wordSplited = str_split($word);
			foreach ($wordSplited as $key => $letter) 
			{
				if (is_numeric($letter)) 
				{
					throw new Exception('Hay palabras incorrectas');
				}

				foreach ($specialCharacters as $key => $character) 
				{
					if ($letter == $character) 
					{
						throw new Exception('Hay palabras incorrectas');
					}
				}
			}
		}

		//return $this->words[rand(0, count($this->words) - 1)]; 
		echo $this->words[rand(0, count($this->words) - 1)]; 
	}



	public function run()
	{
		$this->getWord();
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
