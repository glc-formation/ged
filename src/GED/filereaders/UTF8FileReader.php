<?php

class UTF8FileReader implements FileReader {
    private FileReader $delegate;

    public function __construct(FileReader $fileReader) {
        $this->delegate = $fileReader;
    }

    public function lireFichier(string $file): string {
        $fileRead = $this->delegate->lireFichier($file);
        $fileresult = utf8_encode($fileRead);
        return $fileresult;
    }
}