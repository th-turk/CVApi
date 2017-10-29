<p align="center"><img alt="Our Logo" src="#"></p>

[![Packagist](https://img.shields.io/packagist/dt/cv-api/cv-api.svg)](https://packagist.org/packages/cv-api/cv-api)
[![Packagist](https://img.shields.io/packagist/v/cv-api/cv-api.svg)](https://packagist.org/packages/cv-api/cv-api)
[![Packagist](https://img.shields.io/packagist/l/cv-api/cv-api.svg)](https://packagist.org/packages/cv-api/cv-api)

# CVApi
CVAPi library is built entirely in PHP to bring the power of computer vision into web development. Under the hood of CVAPi lies [OpenCV](https://opencv.org/), which is used extensively for computer vision applications.

## Why use CVApi
- Save your time by not having to worry about different versions and implementations of [OpenCV](https://opencv.org/)
- Easily integrate this API into any existing PHP Project, or use it in any popular framework such as [Laravel](https://laravel.com/) or [Symfony](https://symfony.com/)
- Our up-to-date documentation provides thorough instructions for each operations
- Computer Vision related heavy calculations are handled by our servers
- <strong>...and many more</strong>

## Getting Started
Firstly, make sure you have Composer installed in your system. You can acquire it by clicking [here](https://getcomposer.org/)

After that, you can require CVAPi by writing out this command in terminal

```bash
$ composer require cv-api/cv-api
```
As Composer is done fetching necessary dependencies, make sure to register for an account in [CVApi](#)
After the confirmation e-mail, open the <strong>config</strong> file inside <strong>vendor/CVApi</strong> and edit these settings

```bash
	"public_key" => "your-public-key",
	"secret_key" => "your-secret-key",
	"password" => "your-password",
	"path" => "your-path-to-storage"
```
In the end we can test whether CVApi is configured properly by trying out this piece of code
```bash
	require_once __DIR__ . 'path_to_autoload_file.php';
  
  use CVApi/CVApi;
  
  CVApi::test();
```
