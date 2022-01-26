<?php

class Person {
	protected $first_name;
	protected $last_name;
	protected $accounts = [];

	public function __construct($_first_name, $_last_name) {
		$this->first_name = $_first_name;
		$this->last_name = $_last_name;
	}

	public function addAccount(Account $account) {
		array_push($this->accounts, $account);
	}

	public function getAccounts() {
		return $this->accounts;
	}

	public function getFirstName() {
		return $this->first_name;
	}

	public function getLastName() {
		return $this->last_name;
	}

	public function getFullName() {
		return "{$this->getFirstName()} {$this->getLastName()}";
	}
}
