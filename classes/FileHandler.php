<?php

class FileHandler
{
    private string $file;
    private string $method;
    private int $size = 8;
    private $handle;
    private array $arrayMethod = array('r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e');

    public function __construct(string $file, string $method)
    {
        $this->file = $file;
        if (in_array($method, $this->arrayMethod))
        {
            $this->method = $method;

            if ($this->handle = fopen($file, $method))
                $this->size = filesize($this->file);

            else
                return false;
        }

        else
            return false;
    }

    function lecture(int $size = null)
    {
        if ($size !== null) 
            $size = abs($size);

        if ($size > 0 && $size <= $this->size)
            return fread($this->handle, $size);
        else if ($size === null || $size > $this->size || $size === 0)
            return fread($this->handle, $this->size);
        else
            return false;   
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}
