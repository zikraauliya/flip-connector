<?php

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\InternationalTransfer\CreateInternationalTransfer;
use ZikraAuliya\FlipConnector\Requests\InternationalTransfer\GetAllInternationalTransfer;
use ZikraAuliya\FlipConnector\Requests\InternationalTransfer\GetExchangeRates;
use ZikraAuliya\FlipConnector\Requests\InternationalTransfer\GetFormData;
use ZikraAuliya\FlipConnector\Requests\InternationalTransfer\GetInternationalTransfer;
use ZikraAuliya\FlipConnector\Resource;

class InternationalTransfer extends Resource
{
    /**
     * @param  string  $countryIsoCode  (Optional) - Country code using ISO 3166 (Alpha-3). You can choose multiple countries separate by comma. See supported Country ISO Codes in API Docs.
     * @param  string  $transactionType  (Optional) - Transaction type information. Possible values are: C2C, C2B
     */
    public function getExchangeRates(?string $countryIsoCode, ?string $transactionType): Response
    {
        return $this->connector->send(new GetExchangeRates($countryIsoCode, $transactionType));
    }

    /**
     * @param  string  $countryIsoCode  (Required) - Country code using ISO 3166 (Alpha-3). See supported Country ISO Codes in API Docs.
     * @param  string  $transactionType  (Required) - Transaction type information. Possible values are: C2C, C2B
     */
    public function getFormData(?string $countryIsoCode, ?string $transactionType): Response
    {
        return $this->connector->send(new GetFormData($countryIsoCode, $transactionType));
    }

    public function createInternationalTransfer(): Response
    {
        return $this->connector->send(new CreateInternationalTransfer());
    }

    public function getInternationalTransfer(string $transactionId): Response
    {
        return $this->connector->send(new GetInternationalTransfer($transactionId));
    }

    /**
     * @param  string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  string  $page  (Optional) - The page number of the result to be viewed.
     * @param  string  $sortBy  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function getAllInternationalTransfer(?string $pagination, ?string $page, ?string $sortBy): Response
    {
        return $this->connector->send(new GetAllInternationalTransfer($pagination, $page, $sortBy));
    }
}
