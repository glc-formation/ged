<?php

namespace App\GED\filereaders;

class UTF8FileReader implements FileReader {
    private $delegate;

    public function __construct(FileReader $fileReader) {
        $this->delegate = $fileReader;
    }

    public function lireFichier($file): string {
        $fileRead = $this->delegate->lireFichier($file);
        $fileresult = utf8_encode($fileRead);
        return $fileresult;
    }
}