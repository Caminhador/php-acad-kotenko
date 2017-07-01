<?php

namespace classes;

use traits\Action;
use traits\Some;

/**
 * Class Animal
 * @package classes
 */
class Animal
{
    use Action, Some {
        Some::run insteadof Action;
        Action::run as actionRun;
    }
}