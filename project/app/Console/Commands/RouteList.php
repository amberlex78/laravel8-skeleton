<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\RouteListCommand;
use Symfony\Component\Console\Input\InputOption;

class RouteList extends RouteListCommand
{
    /**
     * The columns to display when using the "compact" flag.
     * @var array
     */
    protected $compactColumns = ['domain', 'method', 'uri', 'name', 'action'];

    /**
     * Get the console command options.
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            ['columns', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 'Columns to include in the route table'],
            ['compact', 'c', InputOption::VALUE_NONE, 'Only show method, URI and action columns'],
            ['json', null, InputOption::VALUE_NONE, 'Output the route list as JSON'],
            ['method', null, InputOption::VALUE_OPTIONAL, 'Filter the routes by method'],
            ['name', null, InputOption::VALUE_OPTIONAL, 'Filter the routes by name'],
            ['path', null, InputOption::VALUE_OPTIONAL, 'Filter the routes by path'],
            ['except-path', null, InputOption::VALUE_OPTIONAL, 'Do not display the routes matching the given path pattern'],
            ['reverse', 'r', InputOption::VALUE_NONE, 'Reverse the ordering of the routes'],
            ['sort', null, InputOption::VALUE_OPTIONAL, 'The column (domain, method, uri, name, action, middleware) to sort by', 'name'],
        ];
    }
}
