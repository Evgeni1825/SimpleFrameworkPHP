<?php

namespace App\Application\Request;

trait RequestValidation
{
    private array $errors = [];
    protected  function validate(array $data, array $rules) : array|bool
    {
        foreach ($rules as $key=>$rule) {
            foreach ($rule as $item) {
                switch ($item) {
                    case 'required':
                        if (empty($data[$key])) {
                            $this->errors[$key][] = 'Field is empty.';
                        }
                        break;
                    case 'email':
                        if (!filter_var($data[$key], FILTER_VALIDATE_EMAIL)) {
                            $this->errors[$key][] = 'Email is not correct.';
                        }
                        break;
                }
            }

        }
        return $this->errors;
    }

    public function validationStatus() : bool
    {
        return empty($this->errors);
    }

    public function validationErrors() : array
    {
        return $this->errors;
    }
}