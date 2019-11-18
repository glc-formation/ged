<?php

class CacheFileReader implements FileReader {
    private $delegate;
    private $cache;

    public function __construct(FileReader $fileReader) {
        $this->delegate = $fileReader;
        $this->cache = new SimpleCache();
    }

    public function lireFichier($file) {
        if(!$this->cache->hasValue()) {
            $fileRead = $this->delegate->lireFichier($file);
            $fileresult = utf8_encode($fileRead);
            $this->cache->setCacheValue($fileresult);
        }
        return $this->cache->getCacheValue();
    }

}