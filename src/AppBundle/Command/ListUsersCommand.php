<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class ListUsersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('phpcanada:list-users')
            ->setDescription('Lists all registered users.')
            ->setHelp("This command allows you to see all users users.");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $style = new OutputFormatterStyle('black', 'red', ['bold']);
        $output->getFormatter()->setStyle('phpcanadaBold', $style);

        $output->writeln('<phpcanadaBold>   PHPCANADA.CA  >>  List All Registered Users   </phpcanadaBold>');
        $userManager = $this->getContainer()->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        if (sizeof($users) > 0) {
            foreach ($users as $user) {
                $output->writeln(
                    sprintf("\t[%d] %s", $user->getId(), $user->getEmail())
                );
            }
        } else {
            $output->writeln('No users yet.');
        }

        $output->writeln([
            '',
            'done.',
            ''
        ]);
    }
}
