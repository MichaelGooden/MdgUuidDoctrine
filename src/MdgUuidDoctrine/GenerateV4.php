<?php
/**
 * Strategy for using UUIDs with Doctrine2.
 *
 * @link      http://github.com/MichaelGooden/MdgUuidDoctrine for the canonical source repository
 * @copyright Copyright (c) 2013 Michael Gooden (http://michaelgooden.github.io)
 * @license   http://michaelgooden.github.io/license/BSD-3-Clause.txt BSD 3-Clause License
 */
namespace MdgUuidDoctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use MdgUuid\Generator;

class GenerateV4 extends AbstractIdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        return Generator::getV4();
    }
}
