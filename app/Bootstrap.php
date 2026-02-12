<?php declare(strict_types = 1);

namespace App;

use Contributte\Bootstrap\ExtraConfigurator;
use Nette\Bootstrap\Configurator;
use Nette\DI\Compiler;
use Symfony\Component\Console\Application as SymfonyApplication;
use Tracy\Debugger;

final class Bootstrap
{

	public static function boot(): ExtraConfigurator
	{
		$configurator = new ExtraConfigurator();
		$configurator->setTempDirectory(__DIR__ . '/../var/tmp');

		$configurator->onCompile[] = function (Configurator $configurator, Compiler $compiler): void {
			if ($configurator instanceof ExtraConfigurator) {
				$compiler->addConfig(['parameters' => $configurator->getEnvironmentParameters()]);
			}
		};

		// According to NETTE_DEBUG env
		$configurator->setEnvDebugMode();

		// Enable tracy and configure it
		$configurator->enableTracy(__DIR__ . '/../var/log');
		Debugger::$errorTemplate = __DIR__ . '/../resources/tracy/500.phtml';

		// Provide some parameters
		$configurator->addStaticParameters([
			'rootDir' => realpath(__DIR__ . '/..'),
			'appDir' => __DIR__,
			'wwwDir' => realpath(__DIR__ . '/../www'),
		]);

		$configurator->addConfig(__DIR__ . '/../config/config.neon');
		$configurator->addConfig(__DIR__ . '/../config/local.neon');

		return $configurator;
	}

	public static function runCli(): void
	{
		self::boot()
			->addStaticParameters([
				'scope' => 'cli',
			])
			->createContainer()
			->getByType(SymfonyApplication::class)
			->run();
	}

}
