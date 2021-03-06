<?php 
# Code generated by sdkgen
# Generated on 2020-07-23 21:31:53.688983585 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!
namespace Vendasta\SalesOrders\V1\internal;

use Vendasta\SalesOrders\V1\Config;

class SalesOrdersGeneratedClient
{
    private $transport;
    
    /**
     * SalesOrdersGeneratedClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        $this->transport = $this->getTransportClient($env, $default_timeout);
    }

    /**
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     * @return SalesOrdersClientInterface
     */
    private function getTransportClient(string $env, float $default_timeout = 10000): SalesOrdersClientInterface
    {
        $config = $this->getEnvConfig($env);

        if (class_exists('Grpc\ChannelCredentials', true)) {
            return new SalesOrdersGRPCClient(
                $config['host'],
                $config['scope'],
                $config['secure'],
                $default_timeout
            );
        } else {
            return new SalesOrdersHTTPClient(
                $config['host'],
                $config['scope'],
                $config['secure'],
                $default_timeout
            );
        }
    }

    /**
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @return array
     */
    private function getEnvConfig(string $env): array {
        return Config::ENVIRONMENT_PARAMS[$env];
    }
    
    /**
     * @param \Salesorders\V1\CreateSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateSalesOrder(\Salesorders\V1\CreateSalesOrderRequest $req, array $options = []): \Salesorders\V1\CreateSalesOrderResponse
    {
        return $this->transport->CreateSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CustomerCreateSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerCreateSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CustomerCreateSalesOrder(\Salesorders\V1\CustomerCreateSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerCreateSalesOrderResponse
    {
        return $this->transport->CustomerCreateSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\GetSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetSalesOrder(\Salesorders\V1\GetSalesOrderRequest $req, array $options = []): \Salesorders\V1\GetSalesOrderResponse
    {
        return $this->transport->GetSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ListSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ListSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListSalesOrder(\Salesorders\V1\ListSalesOrderRequest $req, array $options = []): \Salesorders\V1\ListSalesOrderResponse
    {
        return $this->transport->ListSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ApproveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ApproveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ApproveSalesOrder(\Salesorders\V1\ApproveSalesOrderRequest $req, array $options = []): \Salesorders\V1\ApproveSalesOrderResponse
    {
        return $this->transport->ApproveSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CustomerApproveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CustomerApproveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CustomerApproveSalesOrder(\Salesorders\V1\CustomerApproveSalesOrderRequest $req, array $options = []): \Salesorders\V1\CustomerApproveSalesOrderResponse
    {
        return $this->transport->CustomerApproveSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\DeclineSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\DeclineSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeclineSalesOrder(\Salesorders\V1\DeclineSalesOrderRequest $req, array $options = []): \Salesorders\V1\DeclineSalesOrderResponse
    {
        return $this->transport->DeclineSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ActivateProductsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ActivateProductsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ActivateProducts(\Salesorders\V1\ActivateProductsRequest $req, array $options = []): \Salesorders\V1\ActivateProductsResponse
    {
        return $this->transport->ActivateProducts($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ScheduleActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ScheduleActivation(\Salesorders\V1\ScheduleActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->ScheduleActivation($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ArchiveSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ArchiveSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ArchiveSalesOrder(\Salesorders\V1\ArchiveSalesOrderRequest $req, array $options = []): \Salesorders\V1\ArchiveSalesOrderResponse
    {
        return $this->transport->ArchiveSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CheckSalesOrderExistsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CheckSalesOrderExistsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CheckSalesOrderExists(\Salesorders\V1\CheckSalesOrderExistsRequest $req, array $options = []): \Salesorders\V1\CheckSalesOrderExistsResponse
    {
        return $this->transport->CheckSalesOrderExists($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\SendForCustomerApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SendForCustomerApprovalResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SendForCustomerApproval(\Salesorders\V1\SendForCustomerApprovalRequest $req, array $options = []): \Salesorders\V1\SendForCustomerApprovalResponse
    {
        return $this->transport->SendForCustomerApproval($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\SendExistingOrderToCustomerForApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SendExistingOrderToCustomerForApproval(\Salesorders\V1\SendExistingOrderToCustomerForApprovalRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->SendExistingOrderToCustomerForApproval($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\GetUsersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetUsersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetUsers(\Salesorders\V1\GetUsersRequest $req, array $options = []): \Salesorders\V1\GetUsersResponse
    {
        return $this->transport->GetUsers($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\GetConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetConfigResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetConfig(\Salesorders\V1\GetConfigRequest $req, array $options = []): \Salesorders\V1\GetConfigResponse
    {
        return $this->transport->GetConfig($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateConfig(\Salesorders\V1\UpdateConfigRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateConfig($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\DeleteConfigRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeleteConfig(\Salesorders\V1\DeleteConfigRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->DeleteConfig($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateAnswersRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\UpdateAnswersResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateAnswers(\Salesorders\V1\UpdateAnswersRequest $req, array $options = []): \Salesorders\V1\UpdateAnswersResponse
    {
        return $this->transport->UpdateAnswers($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateTagsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\UpdateTagsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateTags(\Salesorders\V1\UpdateTagsRequest $req, array $options = []): \Salesorders\V1\UpdateTagsResponse
    {
        return $this->transport->UpdateTags($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateNotesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateNotes(\Salesorders\V1\UpdateNotesRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateNotes($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateRequestedActivationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateRequestedActivation(\Salesorders\V1\UpdateRequestedActivationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateRequestedActivation($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateContractDurationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateContractDuration(\Salesorders\V1\UpdateContractDurationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateContractDuration($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateCurrentRevenueRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateCurrentRevenue(\Salesorders\V1\UpdateCurrentRevenueRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateCurrentRevenue($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateLineItemsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateLineItems(\Salesorders\V1\UpdateLineItemsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateLineItems($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ListTagsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\ListTagsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListTags(\Salesorders\V1\ListTagsRequest $req, array $options = []): \Salesorders\V1\ListTagsResponse
    {
        return $this->transport->ListTags($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CreateDraftSalesOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateDraftSalesOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateDraftSalesOrder(\Salesorders\V1\CreateDraftSalesOrderRequest $req, array $options = []): \Salesorders\V1\CreateDraftSalesOrderResponse
    {
        return $this->transport->CreateDraftSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\SubmitDraftRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SubmitDraftResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SubmitDraftSalesOrder(\Salesorders\V1\SubmitDraftRequest $req, array $options = []): \Salesorders\V1\SubmitDraftResponse
    {
        return $this->transport->SubmitDraftSalesOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\SubmitDraftForApprovalRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\SubmitDraftForApprovalResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function SubmitDraftForCustomerApproval(\Salesorders\V1\SubmitDraftForApprovalRequest $req, array $options = []): \Salesorders\V1\SubmitDraftForApprovalResponse
    {
        return $this->transport->SubmitDraftForCustomerApproval($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\IgnoreProductActivationErrorRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function IgnoreProductActivationError(\Salesorders\V1\IgnoreProductActivationErrorRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->IgnoreProductActivationError($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\IgnoreAllProductActivationErrorsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function IgnoreAllProductActivationErrors(\Salesorders\V1\IgnoreAllProductActivationErrorsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->IgnoreAllProductActivationErrors($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\RequestCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function RequestCancellation(\Salesorders\V1\RequestCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->RequestCancellation($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\DeclineCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function DeclineCancellation(\Salesorders\V1\DeclineCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->DeclineCancellation($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\PreviewOrderActivationsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\PreviewOrderActivationsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function PreviewOrderActivations(\Salesorders\V1\PreviewOrderActivationsRequest $req, array $options = []): \Salesorders\V1\PreviewOrderActivationsResponse
    {
        return $this->transport->PreviewOrderActivations($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ApproveCancellationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ApproveCancellation(\Salesorders\V1\ApproveCancellationRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->ApproveCancellation($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\ConvertToDraftRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ConvertToDraft(\Salesorders\V1\ConvertToDraftRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->ConvertToDraft($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\GetStatusCountsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\GetStatusCountsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetStatusCounts(\Salesorders\V1\GetStatusCountsRequest $req, array $options = []): \Salesorders\V1\GetStatusCountsResponse
    {
        return $this->transport->GetStatusCounts($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CreateInvoiceRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateInvoiceResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateInvoice(\Salesorders\V1\CreateInvoiceRequest $req, array $options = []): \Salesorders\V1\CreateInvoiceResponse
    {
        return $this->transport->CreateInvoice($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\CreateAndActivateOrderRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Salesorders\V1\CreateAndActivateOrderResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function CreateAndActivateOrder(\Salesorders\V1\CreateAndActivateOrderRequest $req, array $options = []): \Salesorders\V1\CreateAndActivateOrderResponse
    {
        return $this->transport->CreateAndActivateOrder($req, $options);
    }
    
    /**
     * @param \Salesorders\V1\UpdateCustomerNotesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateCustomerNotes(\Salesorders\V1\UpdateCustomerNotesRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->transport->UpdateCustomerNotes($req, $options);
    }
    
}
