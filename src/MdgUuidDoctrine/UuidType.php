<?php
/**
 * Strategy for using UUIDs with Doctrine2.
 *
 * @link      http://github.com/MichaelGooden/MdgUuidDoctrine for the canonical source repository
 * @copyright Copyright (c) 2013 Michael Gooden (http://michaelgooden.github.io)
 */
namespace MdgUuidDoctrine;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class UuidType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getVarcharTypeDeclarationSQL(array('length'=>32,'fixed'=>true));
    }

    public function getName()
    {
        return 'uuid';
    }
}
