<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class PostValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
		'required|min:2'	=>'	name=>required|min:2',
	],
        ValidatorInterface::RULE_UPDATE => [
		'required|min:2'	=>'	name=>required|min:2',
	],
   ];
}
