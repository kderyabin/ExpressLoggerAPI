<?php

/*
 * Copyright (c) 2021 Konstantin Deryabin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ExpressLogger\API;

/**
 * Interface FilterInterface
 * @package ExpressLogger\API
 */
interface FilterInterface
{
    /**
     * @param array $data Log data to filter.
     * @return array|false Filtered data or FALSE if data does not pass a filter
     */
    public function filter(array $data);
}
