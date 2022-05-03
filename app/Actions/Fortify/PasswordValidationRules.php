<?php

namespace App\Actions\Fortify;

use App\Rules\IsValidPassword;
use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return [new IsValidPassword, 'required', 'string', 'confirmed'];
    }

}
