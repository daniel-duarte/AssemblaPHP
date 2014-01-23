<?php
/**
 * Created for No Reason on 1/22/14.
 *
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

/**
 * Class View
 */
class View
{
    protected $filename;
    protected $data;

    /**
     * @param $filename
     */
    function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @param $str
     *
     * @return string
     */function escape($str)
{
    return htmlspecialchars($str); //for example
}

    /**
     * @param $name
     * @return bool
     */function __get($name)
{
    if (isset($this->data[$name])) {
        return $this->data[$name];
    }

    return false;
}

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param bool $print
     * @return string
     */
    public function render($print = true)
    {
        ob_start();
        include($this->filename);
        $rendered = ob_get_clean();
        if ($print) {
            echo $rendered;

            return '';
        }

        return $rendered;
    }

    /**
     * @return string
     */function __toString()
{
    return $this->render();
}
}