<?php namespace Ewll\UserBundle\Form\Constraints;

use Symfony\Component\Validator\Constraint;

class ConfirmedEmail extends Constraint
{
    public $message = 'email-not-confirmed';
}
