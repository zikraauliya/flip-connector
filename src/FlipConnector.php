<?php

namespace ZikraAuliya\FlipConnector;

use Saloon\Contracts\Sender;
use Saloon\Http\Connector;
use Saloon\Http\Senders\GuzzleSender;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\HasTimeout;
use ZikraAuliya\FlipConnector\Auth\FlipBasicAuthentication;
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

/**
 * Flip for Business - API [Template]
 */
class FlipConnector extends Connector
{
    use AcceptsJson, HasTimeout;

    protected int $connectTimeout = 60;

    protected int $requestTimeout = 120;

    protected function defaultSender(): Sender
    {
        return resolve(GuzzleSender::class);
    }

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return config('services.flip.base_url');
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [];
    }

    protected function defaultAuth(): FlipBasicAuthentication
    {
        return new FlipBasicAuthentication(config('services.flip.secret_key'));
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

    public static function generateSignature(string $payload, string $privateKey): string
    {
        openssl_sign($payload, $signature, $privateKey, 'sha256WithRSAEncryption');

        return base64_encode($signature);
    }
}
