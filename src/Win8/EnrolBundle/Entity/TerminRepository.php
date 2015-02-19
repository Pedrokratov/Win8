<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 17.02.15
 * Time: 19:10
 */

namespace Win8\EnrolBundle\Entity;
use Doctrine\ORM\EntityRepository;


class TerminRepository extends EntityRepository
{
    public function findFree()
    {
        $freeTermins = $this->getDoctrine()
            ->getRepository('Win8EnrolBundle:Termin')->findAll();

        $termins=new \Doctrine\Common\Collections\ArrayCollection();
        foreach($freeTermins as $obj)
        {
            if($obj->getRegisters()->count() < $obj->getAvailableplaceno())
            {
                $termins->add($obj);
            }
        }

        return $termins;
    }
} 