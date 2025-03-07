<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\CreateBill;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\EditBill;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\GetAllBills;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\GetAllPayment;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\GetBill;
use ZikraAuliya\FlipConnector\Requests\AcceptPayment\GetPayment;
use ZikraAuliya\FlipConnector\Resource;

class AcceptPayment extends Resource
{
    public function createBill(): Response
    {
        return $this->connector->send(new CreateBill);
    }

    public function editBill(string $billId): Response
    {
        return $this->connector->send(new EditBill($billId));
    }

    public function getBill(string $billId): Response
    {
        return $this->connector->send(new GetBill($billId));
    }

    public function getAllBills(): Response
    {
        return $this->connector->send(new GetAllBills);
    }

    /**
     * @param  string  $startDate  (Optional) - Starting date of the data. Example: "2020-01-01".
     * @param  string  $endDate  (Optional) - Ending date of the data. Example: "2020-12-12". End date must be greater than start_date.
     * @param  string  $pagination  (Optional) - Pagination of the data.
     * @param  string  $page  (Optional) - The desired page of the data pagination.
     * @param  string  $sortBy  (Optional) - Sort the result by the attribute.
     * @param  string  $sortType  (Optional) - You can sort in: sort_desc (descending), sort_asc (ascending)
     */
    public function getPayment(
        string $billId,
        ?string $startDate,
        ?string $endDate,
        ?string $pagination,
        ?string $page,
        ?string $sortBy,
        ?string $sortType,
    ): Response {
        return $this->connector->send(new GetPayment($billId, $startDate, $endDate, $pagination, $page, $sortBy, $sortType));
    }

    /**
     * @param  string  $startDate  (Optional) - Starting date of the data. Example: "2020-01-01".
     * @param  string  $endDate  (Optional) - Ending date of the data. Example: "2020-12-12". End date must be greater than start_date.
     * @param  string  $pagination  (Optional) - Pagination of the data.
     * @param  string  $page  (Optional) - The desired page of the data pagination.
     * @param  string  $sortBy  (Optional) - Sort the result by the attribute.
     * @param  string  $sortType  (Optional) - You can sort in: sort_desc (descending), sort_asc (ascending)
     */
    public function getAllPayment(
        ?string $startDate,
        ?string $endDate,
        ?string $pagination,
        ?string $page,
        ?string $sortBy,
        ?string $sortType,
    ): Response {
        return $this->connector->send(new GetAllPayment($startDate, $endDate, $pagination, $page, $sortBy, $sortType));
    }
}
