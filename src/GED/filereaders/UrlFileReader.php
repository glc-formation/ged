<?php

class UrlFileReader implements FileReader
{
    private FileReader $delegate;

    public function __construct() {
        $this->delegate = new SimpleFileReader();
    }

    public function lireFichier(string $url):string {
        // il se trouve que file_get_contents() lit aussi les URL  mais... on a besoin d'un petit traitement en plus,
        // pour formater la sortie proprement.
        // C'est pourquoi on utilise ici la composition : UrlFileReader délègue une partie du travail à un objet précis,
        // une instance de SimpleFileReader.
        // Ce SimpleFileReader est référencé comme étant un FileReader pour pouvoir le changer ensuite si besoin, sans
        // changer le code car tout ce qui nous intéresse est d'avoir un 'truc qui lireFichier()'.
        // La différence entre Composition et Decorator est simplement l'utilisation d'un objet externe dans le dernier.
        $remoteContent = $this->delegate->lireFichier($url);
        // on formatte avec par exemple https://github.com/gajus/dindent
        // non implémenté car hors scope de l'exercice
        return $remoteContent ;
    }
}