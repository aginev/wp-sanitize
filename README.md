# Transliterate WordPress post slugs and media file names

If you are dealing with content data have non Ascii character like Bulgarian, Russian, German etc. and want to have all 
characters transliterated in slugs and file names you can use this package.

## Install

```bash
composer require aginev/wp-sanitize
```

## Usage

### Transliterate post slugs

```php
wp_sanitize_title();
// Имало едно време в Мексико -> imalo-edno-vreme-v-meksiko
```

### Transliterate media library file names

```php
wp_sanitize_filenames();
// Имало едно време в Мексико.jpg -> imalo-edno-vreme-v-meksiko.jpg
```

## License
Everything in this repository is MIT License unless otherwise specified.

MIT © 2018 Atanas Ginev