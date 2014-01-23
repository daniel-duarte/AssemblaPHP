<?php
/**
 * Created for No Reason on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Entity;

/**
 * Class EntityInterface
 *
 * @package Assemblaphp
 */
interface EntityInterface
{
    /**
     * @param array $configuration
     *
     * @return EntityInterface
     */
    public function configure($configuration = null);
} 