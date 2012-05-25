<?php
namespace Blocks;

/**
 *
 */
class Site extends BaseModel
{
	protected $tableName = 'sites';

	protected $attributes = array(
		'language'    => AttributeType::Language,
		'name'        => AttributeType::Name,
		'handle'      => AttributeType::Handle,
		'url'         => array('type' => AttributeType::Url, 'required' => true),
		'license_key' => AttributeType::LicenseKey,
		'primary'     => array('type' => AttributeType::Boolean, 'required' => false, 'default' => null, 'unique' => true),
		'enabled'     => array('type' => AttributeType::Boolean, 'required' => false, 'default' => true)
	);

	protected $hasMany = array(
		'sections' => array('model' => 'Section', 'foreignKey' => 'site')
	);
}
