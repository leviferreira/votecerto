<?php

namespace VoteCerto\WebBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateDeputiesCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('votecerto:update:deputies')
            ->setDescription('Updates Deputies at MongoDB')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getApplication()->getKernel()->getContainer();
        $output->writeln('Updating...');
        $updated = $container->get('deputies_webservice_manager')->updateDeputies();
        $output->writeln('Updated Sucessfuly');
    }
}