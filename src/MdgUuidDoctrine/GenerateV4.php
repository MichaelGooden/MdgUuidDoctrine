<?php
namespace MdgUuidDoctrine;

use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\EntityManager;
use MdgUuid\Generator;

class GenerateV4 extends AbstractIdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        return Generator::getV4();
    }
}
