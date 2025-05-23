<?php

/**
 * SnmpVersionUnsupportedException.php
 *
 * -Description-
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @link       https://www.librenms.org
 *
 * @copyright  2016 Tony Murray
 * @author     Tony Murray <murraytony@gmail.com>
 */

namespace LibreNMS\Exceptions;

class SnmpVersionUnsupportedException extends \Exception
{
    /**
     * @var string
     */
    public $snmpVersion;

    public function __construct(string $snmpVersion)
    {
        $this->snmpVersion = $snmpVersion;
        $message = trans('exceptions.snmp_version_unsupported.message', ['snmpver' => $snmpVersion]);

        parent::__construct($message);
    }
}
