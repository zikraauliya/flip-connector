<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\MoneyTransfer\CreateDisbursement;
use ZikraAuliya\FlipConnector\Requests\MoneyTransfer\GetAllDisbursement;
use ZikraAuliya\FlipConnector\Requests\MoneyTransfer\GetDisbursementById;
use ZikraAuliya\FlipConnector\Requests\MoneyTransfer\GetDisbursementByIdempotencyKey;
use ZikraAuliya\FlipConnector\Resource;

class MoneyTransfer extends Resource
{
    public function createDisbursement(): Response
    {
        return $this->connector->send(new CreateDisbursement());
    }

    /**
     * @param  string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  string  $page  (Optional) - The page number of the result to be viewed.
     * @param  string  $sort  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function getAllDisbursement(?string $pagination, ?string $page, ?string $sort): Response
    {
        return $this->connector->send(new GetAllDisbursement($pagination, $page, $sort));
    }

    public function getDisbursementById(string $id): Response
    {
        return $this->connector->send(new GetDisbursementById($id));
    }

    /**
     * @todo Fix duplicated method name
     */
    public function createDisbursementDuplicate1(): Response
    {
        return $this->connector->send(new CreateDisbursement());
    }

    /**
     * @todo Fix duplicated method name
     *
     * @param  string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  string  $page  (Optional) - The page number of the result to be viewed.
     * @param  string  $sort  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function getAllDisbursementDuplicate2(?string $pagination, ?string $page, ?string $sort): Response
    {
        return $this->connector->send(new GetAllDisbursement($pagination, $page, $sort));
    }

    /**
     * @todo Fix duplicated method name
     *
     * @param  string  $id  (Required) - Transaction ID
     */
    public function getDisbursementByIdDuplicate3(?string $id): Response
    {
        return $this->connector->send(new GetDisbursementById($id));
    }

    /**
     * @param  string  $idempotencyKey  (Required) - Transaction Idempotency Key
     */
    public function getDisbursementByIdempotencyKey(?string $idempotencyKey): Response
    {
        return $this->connector->send(new GetDisbursementByIdempotencyKey($idempotencyKey));
    }
}
