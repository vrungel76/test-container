<?php
/**
 * TODO:
 * Created by PhpStorm.
 * User: prog12
 * Date: 08.03.19
 * Time: 17:15
 */

namespace Http\Router;


interface ControllerInterface
{
    /**
     * TODO:
     * @param Request $request
     * @return mixed
     */
    public function setRequest(Request $request);
}