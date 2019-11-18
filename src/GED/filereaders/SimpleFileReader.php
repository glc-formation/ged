<?php

/**
 * Class SimpleFileReader
 * Ce reader est juste une "fonction", il sert uniquement à réaliser la lecture à chaque fois
 */
class SimpleFileReader implements FileReader {
    public function lireFichier(string $file): string {
        $fileresult = file_get_contents($file, true);
        return $fileresult;
    }

}