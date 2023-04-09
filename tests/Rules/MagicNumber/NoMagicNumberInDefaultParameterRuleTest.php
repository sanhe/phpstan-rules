<?php

declare(strict_types=1);

namespace Sid\PHPStan\Tests\Rules\MagicNumber;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;
use Sid\PHPStan\Rules\MagicNumber\NoMagicNumberInDefaultParameterRule;

final class NoMagicNumberInDefaultParameterRuleTest extends RuleTestCase
{
    public function test_rule(): void
    {
        $this->analyse(
            [__DIR__ . '/data/class-cases.php'],
            [
                [
                    NoMagicNumberInDefaultParameterRule::ERROR_MESSAGE,
                    9,
                ],
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicNumberInDefaultParameterRule();
    }
}
