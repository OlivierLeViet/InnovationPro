<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'UserBundle\Repository\ReviewRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'note',
   'fieldName' => 'note',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'user',
   'fieldName' => 'user',
   'type' => 'object',
  ));
$metadata->mapField(array(
   'columnName' => 'device',
   'fieldName' => 'device',
   'type' => 'object',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);