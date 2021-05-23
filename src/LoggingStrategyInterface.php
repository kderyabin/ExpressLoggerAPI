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
 * Interface LoggingStrategyInterface manages how logs are dispatched to writers.
 * @package ExpressLogger\API
 */
interface LoggingStrategyInterface
{
    /**
     * @param WriterInterface[] $writers
     */
    public function setWriters(array $writers): void;

    /**
     * Sends a log or logs to writers.
     * @param array $data
     */
    public function process(array $data): void;
}
