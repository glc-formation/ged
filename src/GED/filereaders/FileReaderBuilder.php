<?php

namespace App\GED\filereaders;

class FileReaderBuilder {
    private $fileReader;
    private $source;

    public function fromSource(string $source) {
        $this->source = $source;
        if (strpos($source, "http") == 0) {
            $this->fileReader = new UrlFileReader();
        }
        $this->fileReader = new SimpleFileReader();
        return $this;
    }

    public function withUtf8() {
        $this->fileReader = new UTF8FileReader($this->fileReader);
        return $this;
    }

    public function withCache() {
        $this->fileReader = new CacheFileReader($this->fileReader);
        return $this;
    }

    public function build(): FileReader {
        return $this->fileReader;
    }

    public function read(): string {
        return $this->fileReader->lireFichier($this->source);
    }
}