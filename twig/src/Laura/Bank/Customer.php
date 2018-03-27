<?php
namespace Laura\Bank;
use Laura\Bank\BankAccount;
class Customer {
    protected $name = "";
    
    
    protected $accounts = array();
    /**
     * Customer constructor.
     */
    public function __construct()
    {
    }
    /* Adds account of BankAccount
     * Accepts = $account
     * returns = void
     */
    public function addAccount(BankAccount $account)
    {
        $this->accounts[] = $account;
    }
    /* Removes account from BankAccount
     * Accepts = $account
     * returns = void
     */
    public function removeAccount(BankAccount $account)
    {
        if(array_search($account, $this->accounts) === false)
        {
            throw new AccountNeverAddedException();
        }
        else
        {
            unset($this->accounts[in_array($account, $this->accounts)]);
        }
    }
    /* Gets accounts
     * Accepts = none
     * returns = accounts
     */
    public function getAccounts()
    {
        return $this->accounts;
    }
    /* Gets balance of all accounts
     * Accepts = none
     * returns = float
     */
    public function getBalanceOfAllAccounts()
    {
        $sum = 0.0;
        foreach ($this->accounts as $oneAccount) {
            $sum += $oneAccount->getBalance();
        }
        return $sum;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


}