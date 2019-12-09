<?php declare(strict_types = 1);

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class InfoCommand extends Command
{

	/** @var string */
	protected static $defaultName = 'app:info';

	protected function configure(): void
	{
		$this->setName(self::$defaultName);
		$this->setDescription('This is info command. Just dump info');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$output->writeln("I'm info command");
		return 0;
	}

}
