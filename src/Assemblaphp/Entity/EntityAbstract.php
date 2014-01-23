<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Entity;

/**
 * Class EntityAbstract
 *
 * @package Assemblaphp\Entity
 */
class EntityAbstract implements EntityInterface
{
    /**
     * @param array $config
     */
    public function __construct($configuration = null)
    {
        $this->configure($configuration);
    }

    /**
     * @param array $configuration
     *
     * @return EntityInterface|void
     */
    public function configure($configuration = null)
    {
        if (!empty($configuration)) {
            foreach ($configuration as $key => $value) {
                if ($key == 'custom_fields') {
                    foreach ($value as $customKey => $custom) {
                        $formatKey = $this->formatKey($customKey);
                        $this->$formatKey = $custom;
                    }
                } else {
                    $formatKey = $this->formatKey($key);
                    $this->$formatKey = $value;
                }
            }
        }

        return $this;
    }

    /**
     * @param string $key
     *
     * @return string
     */
    private function formatKey($key)
    {
        return lcfirst(str_replace(' ', '', ucwords(strtolower(str_replace('_', ' ', $key)))));
    }
} 