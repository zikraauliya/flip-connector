<?php

namespace ZikraAuliya\FlipConnector;

use Saloon\Http\Connector;
use ZikraAuliya\FlipConnector\Resource\AcceptPayment;
use ZikraAuliya\FlipConnector\Resource\AgentMoneyTransfer;
use ZikraAuliya\FlipConnector\Resource\AgentVerification;
use ZikraAuliya\FlipConnector\Resource\AgentVerificationKycPart;
use ZikraAuliya\FlipConnector\Resource\BankAccountInquiry;
use ZikraAuliya\FlipConnector\Resource\CityCountry;
use ZikraAuliya\FlipConnector\Resource\General;
use ZikraAuliya\FlipConnector\Resource\InternationalTransfer;
use ZikraAuliya\FlipConnector\Resource\MoneyTransfer;
use ZikraAuliya\FlipConnector\Resource\SpecialMoneyTransfer;
use ZikraAuliya\FlipConnector\Resource\V2Api;

/**
 * Flip for Business - API [Template]
 */
class Unnamed extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'TODO';
    }

    public function acceptPayment(): AcceptPayment
    {
        return new AcceptPayment($this);
    }

    public function agentMoneyTransfer(): AgentMoneyTransfer
    {
        return new AgentMoneyTransfer($this);
    }

    public function agentVerification(): AgentVerification
    {
        return new AgentVerification($this);
    }

    public function agentVerificationKycPart(): AgentVerificationKycPart
    {
        return new AgentVerificationKycPart($this);
    }

    public function bankAccountInquiry(): BankAccountInquiry
    {
        return new BankAccountInquiry($this);
    }

    public function cityCountry(): CityCountry
    {
        return new CityCountry($this);
    }

    public function general(): General
    {
        return new General($this);
    }

    public function internationalTransfer(): InternationalTransfer
    {
        return new InternationalTransfer($this);
    }

    public function moneyTransfer(): MoneyTransfer
    {
        return new MoneyTransfer($this);
    }

    public function specialMoneyTransfer(): SpecialMoneyTransfer
    {
        return new SpecialMoneyTransfer($this);
    }

    public function V2Api(): V2Api
    {
        return new V2Api($this);
    }
}
