<?php

namespace ZikraAuliya\FlipConnector\Requests\MoneyTransfer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get All Disbursement
 */
class GetAllDisbursement extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v3/disbursement';
    }

    /**
     * @param  null|string  $pagination  (Optional) - The pagination of the result. Default value is 20.
     * @param  null|string  $page  (Optional) - The page number of the result to be viewed.
     * @param  null|string  $sort  (Optional) - Sort the result by the attribute. Use the attribute name (e.g sort=id) to sort in ascending order or dash+attribute name (e.g sort=-id) to sort in descending order.
     */
    public function __construct(
        protected ?string $pagination = null,
        protected ?string $page = null,
        protected ?string $sort = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['pagination' => $this->pagination, 'page' => $this->page, 'sort' => $this->sort]);
    }
}
