# Certificate-Generator
Generate X number of Certificates with One Click &nbsp;
Demo Link (May go offline or get suspended anytime 😅 ): &nbsp;
http://webi.epizy.com/ 

[![Maintenance](https://img.shields.io/badge/Maintained%3F-YES-blueviolet.svg)](#)
[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Generic badge](https://img.shields.io/badge/Stable-YES-<COLOR>.svg)](#)
[![Open Source Love svg1](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)](#)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](#)

[![forthebadge](https://forthebadge.com/images/badges/made-with-java.svg)](#)
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](#)
[![forthebadge](https://forthebadge.com/images/badges/built-for-android.svg)](#)
[![forthebadge](https://forthebadge.com/images/badges/makes-people-smile.svg)](#)

[![forthebadge](https://forthebadge.com/images/badges/winter-is-coming.svg)](#)
[![forthebadge](https://forthebadge.com/images/badges/powered-by-oxygen.svg)](#)
[![forthebadge](https://forthebadge.com/images/badges/ages-12.svg)](#)

* One Click Certificates Generator 

## Screens

<img src="/Screenshots/ss1.png" height="583" width="350" />&nbsp;

### Some Points to Wrap up

* In the Demo Link don't generate high number of Certificates it will *fuck* my free hosted page with high CPU usage.
* Scripts are not optimised 🥱
* Very easy to understand 
* Add Validations yourself ( I am lazy ) 😅
* It can generate the certificates from the names separeted with comma
* Easy to add more texts ❤
* Used imagettftext and imagecreatefrompng methods of PHP

* In order to center a text you do something like (Center with X-axis) :

```php
$imageX = imagesx($image); //retrieve the image’s width
$textWidth = imagettfbbox($fontSize, 0,$font, $text_to_enter); //we get the edges of the text
$textWidth = $textWidth[0] + $textWidth[2]; //add the left edge to the right edge to get the text’s width
imagettftext($image, $fontSize, 0, ($imageX-$textWidth)/2, 575, $black, $font, $text_to_enter); //Wrtie with the X position
```


[![saythanks](https://img.shields.io/badge/say-thanks-ff69b4.svg)](https://linkedin.com/in/satyajiit/)
