<?php

namespace App\GED\filereaders;

/**
 * Class SimpleFileReader
 * Ce reader est juste une "fonction", il sert uniquement à réaliser la lecture à chaque fois
 */
class SimpleFileReader implements FileReader {
    public function lireFichier($file) {
        $fileresult = file_get_contents($file, true);
        return $fileresult;
    }

}