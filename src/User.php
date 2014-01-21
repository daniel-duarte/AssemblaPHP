<?php
/**
 * Created for Krush on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp;

/**
 * Class User
 *
 * @package Krush\Assembla
 */
class User extends AbstractAssembla
{
    protected $object = 'users';

    public $id;
    public $name = 'N/A';

    public function get()
    {

    }

    public function getPhoto()
    {
        $photo = $this->call(
            $this->object,
            'picture',
            [],
            [],
            $this->id
        );

        return $photo;
    }
} 