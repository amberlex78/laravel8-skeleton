<?php

if (!function_exists('urlToAction')) {
    /**
     * Generate the URL to a controller action.
     *
     * @param string $name
     * @param mixed $parameters
     * @param bool $absolute
     *
     * @return string
     */
    function urlToAction(string $name, $parameters = [], bool $absolute = true): string
    {
        $actionPath = '\\' . Request::route()->getActionName();
        [$controller] = explode('@', $actionPath);

        return action($controller . '@' . $name, $parameters, $absolute);
    }
}
