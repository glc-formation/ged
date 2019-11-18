<?php


class SimpleCache implements Cached {

    private $valeurEnCache = null;
    private $hits = 0;

    public function __construct() {
    }

    public function setCacheValue($value) {
        $this->valeurEnCache = $value;
    }

    public function getCacheValue() {
        $this->hits ++ ;
        return $this->valeurEnCache;
    }

    /**
     * @return int le nombre de fois où le cache a évité de refaire le traitement (= nombre d'appels)
     */
    public function getPerformance(): int {
        return $this->hits;
    }

    public function hasValue(): bool {
        return $this->valeurEnCache!==null;
    }
}