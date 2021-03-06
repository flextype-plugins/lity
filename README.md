# Lity Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.2.3-brightgreen.svg?style=flat-square "Version")
![Flextype](https://img.shields.io/badge/Flextype-0.8.3-green.svg?style=flat-square "Flextype Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-plugins/lity/blob/master/LICENSE.txt)

Lity is a ultra-lightweight, accessible and responsive lightbox plugin which supports images, iframes and inline content out of the box.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

```
[lity-img src="image-small.jpg" target="image-big.jpg" class="img" alt="Image title"]
```

## Usage in the template
```
<img src="image-small.jpg" data-lity-target="image-big.jpg" data-lity />
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/lity/blob/master/LICENSE)
