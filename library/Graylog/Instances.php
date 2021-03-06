<?php
/* Icinga Web 2 Graylog Module (c) 2017 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Graylog;

use Icinga\Repository\IniRepository;

class Instances extends IniRepository
{
    protected $configs = [
        'instances' => [
            'name'      => 'instances',
            'keyColumn' => 'name',
            'module'    => 'graylog'
        ]
    ];

    protected $queryColumns = [
        'instances' => [
            'name',
            'uri',
            'user',
            'password'
        ]
    ];
}