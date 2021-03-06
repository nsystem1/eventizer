<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_users";
$def->class = "erLhcoreClassModelUser";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['password'] = new ezcPersistentObjectProperty();
$def->properties['password']->columnName   = 'password';
$def->properties['password']->propertyName = 'password';
$def->properties['password']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING; 

$def->properties['email'] = new ezcPersistentObjectProperty();
$def->properties['email']->columnName   = 'email';
$def->properties['email']->propertyName = 'email';
$def->properties['email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;
 
$def->properties['name'] = new ezcPersistentObjectProperty();
$def->properties['name']->columnName   = 'name';
$def->properties['name']->propertyName = 'name';
$def->properties['name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING; 

$def->properties['surname'] = new ezcPersistentObjectProperty();
$def->properties['surname']->columnName   = 'surname';
$def->properties['surname']->propertyName = 'surname';
$def->properties['surname']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING; 

$def->properties['disabled'] = new ezcPersistentObjectProperty();
$def->properties['disabled']->columnName   = 'disabled';
$def->properties['disabled']->propertyName = 'disabled';
$def->properties['disabled']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['lastactivity'] = new ezcPersistentObjectProperty();
$def->properties['lastactivity']->columnName   = 'lastactivity';
$def->properties['lastactivity']->propertyName = 'lastactivity';
$def->properties['lastactivity']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['time_zone'] = new ezcPersistentObjectProperty();
$def->properties['time_zone']->columnName   = 'time_zone';
$def->properties['time_zone']->propertyName = 'time_zone';
$def->properties['time_zone']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['activate_hash'] = new ezcPersistentObjectProperty();
$def->properties['activate_hash']->columnName   = 'activate_hash';
$def->properties['activate_hash']->propertyName = 'activate_hash';
$def->properties['activate_hash']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['system'] = new ezcPersistentObjectProperty();
$def->properties['system']->columnName   = 'system';
$def->properties['system']->propertyName = 'system';
$def->properties['system']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['created'] = new ezcPersistentObjectProperty();
$def->properties['created']->columnName   = 'created';
$def->properties['created']->propertyName = 'created';
$def->properties['created']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['org_name'] = new ezcPersistentObjectProperty();
$def->properties['org_name']->columnName   = 'org_name';
$def->properties['org_name']->propertyName = 'org_name';
$def->properties['org_name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['org_description'] = new ezcPersistentObjectProperty();
$def->properties['org_description']->columnName   = 'org_description';
$def->properties['org_description']->propertyName = 'org_description';
$def->properties['org_description']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['org_www'] = new ezcPersistentObjectProperty();
$def->properties['org_www']->columnName   = 'org_www';
$def->properties['org_www']->propertyName = 'org_www';
$def->properties['org_www']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['org_fb'] = new ezcPersistentObjectProperty();
$def->properties['org_fb']->columnName   = 'org_fb';
$def->properties['org_fb']->propertyName = 'org_fb';
$def->properties['org_fb']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['org_tw'] = new ezcPersistentObjectProperty();
$def->properties['org_tw']->columnName   = 'org_tw';
$def->properties['org_tw']->propertyName = 'org_tw';
$def->properties['org_tw']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['file'] = new ezcPersistentObjectProperty();
$def->properties['file']->columnName   = 'file';
$def->properties['file']->propertyName = 'file';
$def->properties['file']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['file_name'] = new ezcPersistentObjectProperty();
$def->properties['file_name']->columnName   = 'file_name';
$def->properties['file_name']->propertyName = 'file_name';
$def->properties['file_name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['variations'] = new ezcPersistentObjectProperty();
$def->properties['variations']->columnName   = 'variations';
$def->properties['variations']->propertyName = 'variations';
$def->properties['variations']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def; 

?>