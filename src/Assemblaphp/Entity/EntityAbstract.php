<?php
/**
 * Created for No Reason on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Entity;

/**
 * Class EntityAbstract
 *
 * @package Assemblaphp\Entity
 */
abstract class EntityAbstract implements EntityInterface
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
                $formatKey = 'set' . $this->formatKey($key);

                if ($formatKey == 'setCustomFields') {
                    $nextValue = new \StdClass();
                    foreach ($value as $label => $field) {
                        $nextValue->{lcfirst($this->formatKey($label))} = $field;
                    }

                    $value = $nextValue;
                }

                $this->{$formatKey}($value);
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
        return str_replace(' ', '', ucwords(strtolower(str_replace('_', ' ', $key))));
    }
} 