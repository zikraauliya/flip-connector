<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Casts;

use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;

class BooleanTransformer implements Transformer
{
    public function transform(DataProperty $property, mixed $value, TransformationContext $context): mixed
    {
        if (gettype($value) == 'boolean') {
            return (string) intval($value);
        }

        if (gettype($value) == 'integer') {
            return (string) $value;
        }

        return $value;
    }
}
