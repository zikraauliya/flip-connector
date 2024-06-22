<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\CityCountry\GetCityAndCountryList;
use ZikraAuliya\FlipConnector\Requests\CityCountry\GetCityList;
use ZikraAuliya\FlipConnector\Requests\CityCountry\GetCountryList;
use ZikraAuliya\FlipConnector\Resource;

class CityCountry extends Resource
{
    public function getCityList(): Response
    {
        return $this->connector->send(new GetCityList());
    }

    public function getCountryList(): Response
    {
        return $this->connector->send(new GetCountryList());
    }

    public function getCityAndCountryList(): Response
    {
        return $this->connector->send(new GetCityAndCountryList());
    }
}
