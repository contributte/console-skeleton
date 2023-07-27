<?php declare(strict_types = 1);

namespace App\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: self::NAME)]
final class InfoCommand extends Command
{

	public const NAME = 'app:info';

	protected function configure(): void
	{
		$this->setName(self::NAME);
		$this->setDescription('This is info command. Just dump info');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$output->writeln("I'm info command");

		return 0;
	}

}
