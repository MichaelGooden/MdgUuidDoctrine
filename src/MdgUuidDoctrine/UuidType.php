<?php

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
