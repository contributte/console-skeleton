<?php declare(strict_types = 1);

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class TlapnetInfoCommand extends Command
{

	protected function configure(): void
	{
		$this->setName('tlapnet:info');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$output->writeln("I'm info command");
		return 0;
	}

}
