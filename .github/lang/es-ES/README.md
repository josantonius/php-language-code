# PHP LanguageCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/language-code/v/stable)](https://packagist.org/packages/josantonius/language-code)
[![License](https://poser.pugx.org/josantonius/language-code/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/language-code/downloads)](https://packagist.org/packages/josantonius/language-code)
[![CI](https://github.com/josantonius/php-language-code/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-language-code/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-language-code/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-language-code)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Traducciones**: [English](/README.md)

Librería PHP para obtener el nombre del lenguaje a partir del código.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Listado en formato JSON](#listado-en-formato-json)
- [Tests](#tests)
- [Tareas pendientes](#tareas-pendientes)
- [Registro de Cambios](#registro-de-cambios)
- [Contribuir](#contribuir)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta biblioteca es compatible con las versiones de PHP: 8.0 | 8.1.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP LanguageCode library**, simplemente escribe:

```console
composer require josantonius/language-code
```

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

```console
composer require josantonius/language-code --prefer-source
```

También puedes **clonar el repositorio** completo con Git:

```console
clone https://github.com/josantonius/php-language-code.git
```

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### Obtener array con todos los códigos de idioma

```php
$languageCode->all(): array
```

### Obtener código de idioma desde el nombre del idioma

```php
$languageCode->getCode(string $languageName): string|null
```

### Obtener el nombre del idioma desde código de idioma

```php
$languageCode->getName(string $languageCode): string|null
```

## Cómo empezar

Para utilizar esta biblioteca, simplemente:

### Utilizando objetos

```php
use Josantonius\LanguageCode\LanguageCode;

$mimeType = new LanguageCode();
```

### Utilizando colección estática

Alternativamente puedes utilizar la colección para acceder a los métodos estáticamente:

```php
use Josantonius\LanguageCode\LanguageCodeCollection;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - Obtener array con todos los códigos de idioma

[Utilizando objetos](#utilizando-objetos):

```php
$languageCode->all();
```

[Utilizando la colección estática](#utilizando-colección-estática):

```php
MimeTypeCollection::all();
```

Resultado:

```php
[
    'aa' => 'Afar',
    'ab' => 'Abkhazian',
    'af' => 'Afrikaans',
    'am' => 'Amharic',
    'ar' => 'Arabic',
    'ar-ae' => 'Arabic (U.A.E.)',
    'ar-bh' => 'Arabic (Bahrain)',
    'ar-dz' => 'Arabic (Algeria)',
    'ar-eg' => 'Arabic (Egypt)',
    'ar-iq' => 'Arabic (Iraq)',
    (...)
]
```

### - Obtener código de idioma desde el nombre del idioma

[Utilizando objetos](#utilizando-objetos):

```php
$languageCode->getCode('Spanish'); // es
```

[Utilizando la colección estática](#utilizando-colección-estática):

```php
LanguageCodeCollection::getCode('Turkish'); // tr
```

### - Obtener el nombre del idioma desde código de idioma

[Utilizando objetos](#utilizando-objetos):

```php
$languageCode->getName('eo'); // Esperanto
```

[Utilizando la colección estática](#utilizando-colección-estática):

```php
LanguageCodeCollection::getName('de'); // German
```

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/)
y seguir los siguientes pasos:

```console
git clone https://github.com/josantonius/php-language-code.git
```

```console
cd php-language-code

```

```console
composer install
```

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Ejecutar pruebas de estándares de código con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias
en el estilo de codificación:

```console
composer phpmd
```

Ejecutar todas las pruebas anteriores:

```console
composer tests
```

## Tareas pendientes

- [ ] Añadir nueva funcionalidad
- [ ] Mejorar pruebas
- [ ] Mejorar documentación
- [ ] Mejorar la traducción al inglés en el archivo README
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas
(ver [phpmd.xml](phpmd.xml) y [phpcs.xml](phpcs.xml))

## Registro de Cambios

Los cambios detallados de cada versión se documentan en las
[notas de la misma](https://github.com/josantonius/XXXX/releases).

## Contribuir

Por favor, asegúrate de leer la [Guía de contribución](CONTRIBUTING.md) antes de hacer un
_pull request_, comenzar una discusión o reportar un _issue_.

¡Gracias por [colaborar](https://github.com/josantonius/XXXX/graphs/contributors)! :heart:

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © XXXX, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
