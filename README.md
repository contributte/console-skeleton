<h1 align=center>Cindy Project</h1>

<p align=center>
    Cindy Project is a CLI starter kit project for Nette Framework with <a href="https://symfony.com/doc/current/components/console.html">Symfony Console</a> and many useful libraries.
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

<p align=center>
    <code>composer create-project -s dev planette/cindy-project acme</code>
</p>

<p align=center>
    <img src="https://raw.githubusercontent.com/planette/cindy-project/master/.docs/screenshot1.png">
</p>

[![Build Status](https://img.shields.io/travis/planette/cindy-project.svg?style=flat-square)](https://travis-ci.org/planette/cindy-project)
[![Join the chat](https://img.shields.io/gitter/room/contributte/contributte.svg?style=flat-square)](http://bit.ly/ctteg)

-----

## Installation

You will need `PHP 7.2+` and [Composer](https://getcomposer.org/).

Create project using composer.

```
composer create-project -s dev planette/cindy-project acme
```

Now you have application installed. It's time to run it.

## Startup

Console overview is showed up by running this command:

```
bin/console
```

## Backend

It's based on [Contributte](https://contributte.org/) packages.

- [`contributte/bootstrap`](https://github.com/contributte/bootstrap)
- [`contributte/di`](https://github.com/contributte/di)
- [`contributte/utils`](https://github.com/contributte/utils)
- [`contributte/latte`](https://github.com/contributte/latte)
- [`contributte/tracy`](https://github.com/contributte/tracy)
- [`contributte/console`](https://github.com/contributte/console)
- [`nette/robot-loader`](https://github.com/nette/robot-loader)

We use [RobotLoader](https://doc.nette.org/cs/3.0/robotloader) for autoloading .

## Sponsoring

<a href="https://github.com/tlapnet"><img  width="200" src="https://rawcdn.githack.com/f3l1x/xsource/b2663bd230b4ca50521fe6c7c554e484dd91e24d/assets/tlapdev.png"></a>

The development is sponsored by [Tlapnet](https://www.tlapnet.cz).
