<?php

declare(strict_types=1);

namespace Tests\Unit\Group\Application;

use CodeHouse\Group\Application\CreateGroupUseCase;
use PHPUnit\Framework\TestCase;

class CreateGroupUseCaseTest extends TestCase
{

    public function test_class_should_exists(): void
    {
        $this->assertTrue(class_exists(CreateGroupUseCase::class));
    }
}
