<?php
namespace Laura\Bank;
class BankAccount {
    protected $balance = 0.0;
    /*
     * constructor for BankAccount class
     */
    public function __construct()
    {
    }
    /* Adds float to account balance
     * Accepts = $amount
     * returns = void
     */
    public function deposit($amount)
    {
        if (is_numeric($amount) == false) {
            throw new AmountNotNumericException();
        }
        else if ($amount > 10000)
        {
            throw new DepositToLargeException();
        }
        //add exception from php
        $this->balance = $this->balance + $amount;
    }
    /* Withdraws float from account balance
     * Accepts = $amount
     * returns = void
     */
    public function withdrawal($amount)
    {
        if (is_numeric($amount) == false) {
            throw new AmountNotNumericException();
        }
        else if ($amount > $this->balance)
        {
            throw new InsufficientFundsException();
        }
        $this->balance = $this->balance - $amount;
    }
    /* Gets balance of account
     * Accepts = none
     * returns = balance of account
     */
    public function getBalance()
    {
        return $this->balance;
    }
}