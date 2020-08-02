<?php

declare(strict_types=1);

namespace Xtreamwayz\HTMLFormValidator;

interface ValidationResultInterface
{
    /**
     * Check if the validation was successful
     *
     * If there are no validation messages set and the request method is null or POST,
     * the validation result object is considered valid.
     */
    public function isValid() : bool;

    /**
     * Checks if submit button with a specific name is clicked
     */
    public function isClicked(string $name) : bool;

    /**
     * Returns the name of the clicked button
     */
    public function getClicked() : ?string;

    /**
     * Add custom validation messages
     *
     * Must have the same format as laminas-validator messages:
     *
     *  [
     *      '<field>' => [
     *          '<error_code>' => '<message>',
     *      ],
     *      'email' => [
     *          'emailAddressInvalidFormat' => 'The given email address is invalid',
     *      ],
     *  ]
     *
     */
    public function addMessages(array $messages) : void;

    /**
     * Get validation messages
     */
    public function getMessages() : array;

    /**
     * Get the raw input values
     */
    public function getRawValues() : array;

    /**
     * Get the filtered input values
     */
    public function getValues() : array;
}
