# Blade Try-Catch Directives for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/azmolla/blade-try-catch.svg?style=flat-square)](https://packagist.org/packages/azmolla/blade-try-catch)
[![License](https://img.shields.io/packagist/l/azmolla/blade-try-catch.svg?style=flat-square)](https://opensource.org/licenses/MIT)

---

## Overview

This Laravel package adds native-like `@try`, `@catch`, `@finally`, and `@endtry` directives to Blade templates, allowing you to handle exceptions gracefully inside your views.

You no longer need to clutter your controllers for simple error handling in views — this package provides a clean, elegant syntax for try-catch-finally in Blade.

Compatible with **Laravel 5.8 through 12** and PHP 7.1+.

---

## Installation

You can install the package via Composer:

```bash
composer require azmolla/blade-try-catch
```

The package auto-registers the service provider via Laravel's package discovery. No manual provider registration needed.

---

## Usage

Use the directives in any Blade view:

```blade
@try
    {{-- Code that may throw an exception --}}
    {{ riskyFunction() }}
@catch(\Exception $e)
    {{-- Handle the exception --}}
    <div class="error">Error: {{ $e->getMessage() }}</div>
@finally
    {{-- Code that always runs --}}
    <p>Cleanup completed.</p>
@endtry
```

---

## Testing

This package uses [Pest](https://pestphp.com/) for testing.

To run tests locally:

```bash
composer test
```

Make sure to install development dependencies before running tests:

```bash
composer install --dev
```

---

## Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the repo
2. Create your feature branch (`git checkout -b feature/my-feature`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/my-feature`)
5. Open a pull request

Please ensure your code passes existing tests and write new tests if applicable.

---

## Links & Credits

* Author: Abiruzzaman Molla ([GitHub](https://github.com/abiruzzamanmolla), [Packagist](https://packagist.org/packages/azmolla))
* License: MIT

---

## License

MIT © 2025 Abiruzzaman Molla