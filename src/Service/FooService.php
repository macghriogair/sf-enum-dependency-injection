<?php declare(strict_types = 1);

namespace App\Service;

use App\Enum\Foo;

final class FooService {
    public function __construct(private readonly Foo $fooEnum) {
    }
}
