<?php

declare(strict_types=1);

namespace ZikraAuliya\FlipConnector\Resource;

use Saloon\Http\Response;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\GetCityList;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\GetCountryList;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\GetDistrictList;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\GetProvinceList;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\KycSubmission;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\RepairData;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\RepairIdentityImage;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\RepairIdentitySelfieImage;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\UploadAgentIdentityImage;
use ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart\UploadSupportingDocuments;
use ZikraAuliya\FlipConnector\Resource;

class AgentVerificationKycPart extends Resource
{
    public function uploadAgentIdentityImage(string $agentId): Response
    {
        return $this->connector->send(new UploadAgentIdentityImage($agentId));
    }

    public function uploadSupportingDocuments(): Response
    {
        return $this->connector->send(new UploadSupportingDocuments());
    }

    public function kycSubmission(string $agentId): Response
    {
        return $this->connector->send(new KycSubmission($agentId));
    }

    public function repairData(string $agentId): Response
    {
        return $this->connector->send(new RepairData($agentId));
    }

    public function repairIdentityImage(string $agentId): Response
    {
        return $this->connector->send(new RepairIdentityImage($agentId));
    }

    public function repairIdentitySelfieImage(string $agentId): Response
    {
        return $this->connector->send(new RepairIdentitySelfieImage($agentId));
    }

    /**
     * @param  string  $userType  (Required) - The value should be: 1 (user type Agent)
     */
    public function getCountryList(?string $userType): Response
    {
        return $this->connector->send(new GetCountryList($userType));
    }

    /**
     * @param  string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  string  $countryId  (Optional) - Country ID for filtering the provinces
     */
    public function getProvinceList(?string $userType, ?string $countryId): Response
    {
        return $this->connector->send(new GetProvinceList($userType, $countryId));
    }

    /**
     * @param  string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  string  $provinceId  (Optional) - Province ID for filtering the cities
     */
    public function getCityList(?string $userType, ?string $provinceId): Response
    {
        return $this->connector->send(new GetCityList($userType, $provinceId));
    }

    /**
     * @param  string  $userType  (Required) - The value should be: 1 (user type Agent)
     * @param  string  $cityId  (Optional) - City ID for filtering the districts
     */
    public function getDistrictList(?string $userType, ?string $cityId): Response
    {
        return $this->connector->send(new GetDistrictList($userType, $cityId));
    }
}
