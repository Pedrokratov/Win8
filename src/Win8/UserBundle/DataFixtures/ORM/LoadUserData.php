<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 18.02.15
 * Time: 10:45
 */
namespace Win8\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Win8\UserBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 1;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('demo');
        $user->setPlainPassword('demo');
        $user->setEmail('user@localhost');
        $user->setUsername('demo');
        $user->setRoles(array('ROLE_USER'));
        $user->setLocked(false);
        $user->setExpired(false);
        $user->setEnabled(true);

        $this->addReference('user', $user);

        $admin = new User();

        $admin->setUsername('admin');

        $admin->setPlainPassword('xpRulez');
        $admin->setEmail('admin@localhost');
        $admin->setRoles(array('ROLE_USER','ROLE_ADMIN'));
        $admin->setLocked(false);
        $admin->setExpired(false);
        $admin->setEnabled(true);

        $this->addReference('admin', $admin);

        $manager->persist($user);
        $manager->persist($admin);



        $manager->flush();
    }
}