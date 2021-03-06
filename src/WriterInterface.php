<?php

/*
 * Copyright (c) 2021 Konstantin Deryabin
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ExpressLogger\API;

/**
 * Interface WriterInterface
 * @package Logger\Writers
 */
interface WriterInterface
{
    /**
     * Write a log message.
     * @param array $log
     * @return bool TRUE on success FALSE on failure
     */
    public function write(array $log): bool;

    /**
     * Process an array of log messages.
     * @param array $logs
     * @return int Number of logged messages
     */
    public function process(array $logs): int;
}
