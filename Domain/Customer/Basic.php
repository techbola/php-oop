<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Basic extends Customer
{
    public function getMonthlyFee()
    {
        return 5.0;
    }

    public function getAmountToBorrow()
    {
        return 3;
    }

    public function getType()
    {
        return 'Basic';
    }
}