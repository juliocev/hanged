<?php

class View
{
    private $message;

    function __construct($message)
    {
        $this->message = $message;
    }

    public function printForm($uri, $verb)
    {
        echo "
            <form action='$uri' method='$verb'>
                <label>$this->message</label>
                <input type='text' name='letter'\>
                <input type='submit' value='enviar'\>
            </form>
        ";
    }
}
