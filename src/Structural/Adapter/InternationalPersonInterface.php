<?php
/**
 * Date: 11/18/2017
 * Time: 12:17 PM
 */

namespace Patterns\Structural\Adapter;


interface InternationalPersonInterface
{
    /**
     * @return string
     */
    public function getFirstname():string;

    /**
     * @return string
     */
    public function getLastname():string;
}