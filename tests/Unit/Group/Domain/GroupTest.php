<?php

declare(strict_types=1);

namespace Tests\Unit\Group\Domain;

use PHPUnit\Framework\TestCase;
use CodeHouse\Group\Domain\Group;

class GroupTest extends TestCase
{
    public function test_class_should_exixts(): void
    {
        $this->assertTrue(class_exists(Group::class));
    }
}
