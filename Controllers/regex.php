<?php
abstract class  regex
{
    const RG_EMAIL = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    const RG_PASSWORD = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
    const RG_PHONE = '/^[0-9\-\(\)\/\+\s]*$/';
    const RG_NAME = '/^([a-zA-Z0-9" ]+)$/';
    abstract public function RegexValidation($sbject, $patten);
}
