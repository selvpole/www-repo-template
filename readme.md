# Laravel Base (5.8)
A website base on Laravel and Bootstrap for HackerSir.

## Required
- PHP 7.1.3+
- Yarn

## Framework
- Laravel 5.8
- Bootstrap 4
- Font Awesome 5
- Vue.js 2

## Including
- Packages
  - [predis/predis](https://github.com/nrk/predis): ^1.1
  - [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar): ^3.2
  - [squizlabs/php_codesniffer](https://github.com/squizlabs/PHP_CodeSniffer): *
  - [cscc/sso](https://gitlab.cs.nctu.edu.tw/www/cscc-sso/sso-sdk): ^0.4.0

## Installation Guide
1. Run the following commands.
```bash
composer install
yarn
```

2. Copy `.env.example` to `.env`.
```bash
cp .env.example .env
```

3. Configure environment variables in `.env`.

4. Generate app key.
```bash
php artisan key:generate
```

5. NCTU CSSSO setting(optional)
https://gitlab.cs.nctu.edu.tw/www/cscc-sso/sso-sdk

## Notice
- If you modify some files which need to be compiled, make sure you have run the following command before commit.
(For testing in local, you can also compile files by using `yarn run dev` instead.)
```bash
yarn run production
```