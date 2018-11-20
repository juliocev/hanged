<?php

class Generator
{
    private $words;
    private $word;

    function __constructor($words)
    {
        $this->words = $words;
    }

    public function selectWord()
    {
        $_SESSION['wordToPlay'] = $this->getWord();
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

		return $this->words[rand(0, count($this->words) - 1)];  
	}
}
