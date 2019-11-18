### installer les modules PHP symfony

```bash
composer install
```

### installer les dépendances symfony
selon si npm ou yarn installé

```bash
yarn install
```

```bash
npm install
```

### processer les js, css etc

```bash
webpack encore --watch
```

###générer les entités
https://symfony.com/doc/current/doctrine/reverse_engineering.html

```bash
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```


ajouter les get/set

```bash
php bin/console make:entity --regenerate App
```
