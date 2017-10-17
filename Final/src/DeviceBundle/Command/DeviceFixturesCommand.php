<?php

namespace DeviceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use DeviceBundle\Entity\Device;
use UserBundle\Entity\User;
use UserBundle\Entity\Review;


class DeviceFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('device:fixture')
            ->setDescription('...')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $device = new Device();
      $device->setName("Iphone8");
      $device->setMark("Apple");
      $device->setPrice(1500);
      $device->setPicture("image");


      $em = $this->getContainer()->get('doctrine.orm.entity_manager');
      //Met dans une file d'attente
      $em->persist($device);
      //Insère les objets persistés dans la base de donnée
      $em->flush();
    }
}

