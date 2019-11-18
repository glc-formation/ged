<?php

namespace App\GED\cache;

interface Cached {
    // Mhmh... je pense que si l'on nomme cette méthode comme ceci, on risque de se scier la branche du
    // pattern Decorator sur laquelle on code...
    public function getCacheValue();

    public function setCacheValue($value);

    /**
     * @return int le nombre de fois où le cache a évité de refaire le traitement (= nombre d'appels)
     */
    public function getPerformance();

    public function hasValue();
}