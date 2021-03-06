<?php

namespace bundles\bundlestore\Entities;

/**
 * Foo sample bundle Entity
 *
 * @author Nicolas Bonnici <nicolasbonnici@gmail.com>
 */
class Bundle extends \Library\Core\Entity {

    const ENTITY = 'Foo';
    const TABLE_NAME = 'foo';
    const PRIMARY_KEY = 'idfoo';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 50;

    protected $bIsSearchable = true;

    protected $aLinkedEntities = array();
}

