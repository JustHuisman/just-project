<?php

namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class IsValidPassword implements Rule
{
    /**
     * Determine if the Length Validation Rule passes.
     *
     * @var boolean
     */
    public $lengthPasses = true;

    /**
     * Determine if the Uppercase Validation Rule passes.
     *
     * @var boolean
     */
    public $uppercasePasses = true;

    /**
     * Determine if the Special Character Validation Rule passes.
     *
     * @var boolean
     */
    public $specialCharacterPasses = true;

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->lengthPasses = (Str::length($value) >= 16);
        $this->uppercasePasses = (Str::lower($value) !== $value);
        if (preg_match_all('/[^\w]/', $value) < 3) 
      { $this->specialCharacterPasses = false; }
        return ($this->lengthPasses && $this->uppercasePasses && $this->specialCharacterPasses);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        switch (true) {
            case !$this->uppercasePasses
                && $this->specialCharacterPasses:
                return 'The :attribute must be at least 16 characters and contain at least 1 uppercase character.';

            case !$this->specialCharacterPasses
                && $this->uppercasePasses:
                return 'The :attribute must be at least 16 characters and contain at least 3 special characters.';

            case !$this->specialCharacterPasses
                && !$this->uppercasePasses:
                return 'The :attribute must be at least 16 characters and contain at least 1 uppercase character and 3 special characters.';

            default:
                return 'The :attribute must be at least 16 characters.';
        }
    }
}