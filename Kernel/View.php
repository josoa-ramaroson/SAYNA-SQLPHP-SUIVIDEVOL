<?php

namespace Kernel;

class View {
    private string $filename;
    private $params;
    public function __construct($filename, $params=[]) {
        $this->filename = $filename;
        $this->params = $params;
    }

    public function display(){
        include('../app/Views/'.$this->filename);
    }

}