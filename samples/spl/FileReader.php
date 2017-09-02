<?php

/**
 * Class FileReader
 */
class FileReader implements Iterator
{
    /**
     * @var bool|resource
     */
    protected $fileHandle;

    /**
     * @var string
     */
    protected $line;

    /**
     * @var int
     */
    protected $i;

    /**
     * FileReader constructor.
     * @param string $fileName
     */
    public function __construct($fileName) {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
        }
    }

    /**
     * @return string
     */
    public function current()
    {
        return trim($this->line);
    }

    public function next()
    {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->i++;
        }
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->i;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return false !== $this->line;
    }

    public function rewind()
    {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->i = 0;
    }

    function __destruct()
    {
        fclose($this->fileHandle);
    }
}
