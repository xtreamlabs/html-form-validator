<?php

declare(strict_types=1);

namespace Xtreamwayz\HTMLFormValidator\FormElement;

use Laminas\Filter\StringToLower as StringToLowerFilter;
use Laminas\Validator\Regex as RegexValidator;

class Color extends BaseFormElement
{
    protected function getFilters() : array
    {
        return [
            ['name' => StringToLowerFilter::class],
        ];
    }

    protected function getValidators() : array
    {
        return [
            [
                'name'    => RegexValidator::class,
                'options' => ['pattern' => '/^#[0-9a-fA-F]{6}$/'],
            ],
        ];
    }
}
