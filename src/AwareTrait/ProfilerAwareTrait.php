<?php

declare(strict_types=1);

namespace Yiisoft\Dbal\AwareTrait;

use Yiisoft\Profiler\ProfilerInterface;

trait ProfilerAwareTrait
{
    protected ?ProfilerInterface $profiler = null;

    public function setProfiler(?ProfilerInterface $profiler): void
    {
        $this->profiler = $profiler;
    }
}
