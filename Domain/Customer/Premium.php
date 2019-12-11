<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Premium extends Customer
{
    public function getMonthlyFee()
    {
        return 15.0;
    }

    public function getAmountToBorrow()
    {
        return 10;
    }

    public function getType()
    {
        return 'Premium';
    }
}