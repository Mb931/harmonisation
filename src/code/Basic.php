<?php

namespace harmonisation\code;

class Basic
{
    public $name;
    private $structure;
    protected $compilation;

    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param mixed $structure
     * @return Basic
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompilation()
    {
        return $this->compilation;
    }

    /**
     * @param mixed $compilation
     * @return Basic
     */
    public function setCompilation($compilation)
    {
        $this->compilation = $compilation;
        return $this;
    }



}