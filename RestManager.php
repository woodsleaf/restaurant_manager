<?php
/**
 * PHP version 7.0.4
 * @category Component
 * @package  woodsleaf/restaurant_manager
 * @author   Zed-chi <zed-chi@gmail.com>
 * @author   Woodsleaf <woodsleaf@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://pear.php.net/package/PackageName
 * @git      git clone git@github.com:woodsleaf/restaurant_manager.git
 */

namespace woodsleaf\restaurant_manager;

class RestManager
{
    public function restManager($Tables)
    {
        // TODO
    }

    // new client(s) show up
    public function onArrive($ClientsGroup): void
    {
        // TODO
    }

    // client(s) leave, either served or simply abandoning the queue
    public function onLeave($ClientsGroup): void
    {
        // TODO
    }

    // return table where a given client group is seated,
    // or null if it is still queuing or has already left
    public function table($ClientsGroup): lookup
    {
        // TODO
    }
}
