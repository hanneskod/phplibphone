<?php
/**
 * This file is part of the phplibphone package
 *
 * Copyright (c) 2012 Hannes Forsgård
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Hannes Forsgård <hannes.forsgard@gmail.com>
 * @package phplibphone
 */

namespace itbz\phplibphone;

/**
 * Interface for area code lookup libraries
 *
 * @package phplibphone
 */
interface AreaLookupInterface extends LookupInterface
{
    /**
     * Get country code this library handles
     *
     * @return int
     */
    public function getCountryCode();
}
