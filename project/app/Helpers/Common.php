<?php

if (!function_exists('urlToAction')) {
    /**
     * Generate URL for the action in current controller.
     *
     * @param string $name
     * @param mixed $parameters
     * @param bool $absolute
     *
     * @return string
     */
    function urlToAction(string $name, mixed $parameters = [], bool $absolute = true): string
    {
        $actionPath = '\\' . Request::route()->getActionName();
        [$controller] = explode('@', $actionPath);

        return action($controller . '@' . $name, $parameters, $absolute);
    }
}
