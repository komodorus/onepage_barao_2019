# Campanha vestibular 2019 - Barão de Mauá 
Hotsite institucional vestibular barão de mauá 2019

## Instruções de uso:

* no arquivo ```application/config/config.php``` alterar o campo 
```php 
  $config['base_url'] = 'http://urldosite.com.br/';
``` 

* no arquivo ```application/config/database.php``` alterar o ```$active_group``` para ```'dev'```.
```php
  $active_group = 'dev';
```

* ajustar o arquivo ```.htaccess``` no diretório do projeto para ignorar o ```index.php``` na URL.
Ex.: 
``` 
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule (.*) index.php/$1
```

* fora de ambiente de testes, trocar no ```index.php``` a variavel globar ```$_SERVER['CI_ENV']``` para ```'production```:
```php
  [56] define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production');
```
