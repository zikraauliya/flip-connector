<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Requests\AcceptPayment;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All Payment
 */
class GetAllPayment extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v2/pwf/bill';
    }

    /**
     * @param  null|string  $startDate  (Optional) - Starting date of the data. Example: "2020-01-01".
     * @param  null|string  $endDate  (Optional) - Ending date of the data. Example: "2020-12-12". End date must be greater than start_date.
     * @param  null|string  $pagination  (Optional) - Pagination of the data.
     * @param  null|string  $page  (Optional) - The desired page of the data pagination.
     * @param  null|string  $sortBy  (Optional) - Sort the result by the attribute.
     * @param  null|string  $sortType  (Optional) - You can sort in: sort_desc (descending), sort_asc (ascending)
     */
    public function __construct(
        protected ?string $startDate = null,
        protected ?string $endDate = null,
        protected ?string $pagination = null,
        protected ?string $page = null,
        protected ?string $sortBy = null,
        protected ?string $sortType = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'pagination' => $this->pagination,
            'page' => $this->page,
            'sort_by' => $this->sortBy,
            'sort_type' => $this->sortType,
        ]);
    }
}
