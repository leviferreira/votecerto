<?php
/**
 * Command for update the deputies list at mongodb
 */
namespace VoteCerto\WebBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class updateParliamentariansCommand
 * @package VoteCerto\WebBundle\Command
 */
class UpdateParliamentarianCommand extends Command
{
    /**
     * Configure the command
     */
    protected function configure()
    {
        $this
            ->setName('votecerto:update:parliamentarian')
            ->setDescription('Updates Deputies at MongoDB')
        ;
    }

    /**
     * Executes the command
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
       $container = $this->getApplication()->getKernel()->getContainer();
       $output->writeln('Updating...');
       $container->get('webservice_manager')->updateParliamentarians();
       $output->writeln('Updated Sucessfuly');
    }
}