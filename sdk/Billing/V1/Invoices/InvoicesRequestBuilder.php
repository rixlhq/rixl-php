<?php

namespace Rixl\Sdk\Billing\V1\Invoices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Billing\V1\Invoices\Item\WithInvoice_ItemRequestBuilder;
use Rixl\Sdk\Models\Billing\V1\ListInvoicesResponse;

/**
 * Builds and executes requests for operations under /billing/v1/invoices
*/
class InvoicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.billing.v1.invoices.item collection
     * @param string $invoice_id Unique identifier of the item
     * @return WithInvoice_ItemRequestBuilder
    */
    public function byInvoice_id(string $invoice_id): WithInvoice_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invoice_id'] = $invoice_id;
        return new WithInvoice_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InvoicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/billing/v1/invoices{?org_id*,pagination%2Elimit*,pagination%2Eoffset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListInvoices
     * @param InvoicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListInvoicesResponse|null>
     * @throws Exception
    */
    public function get(?InvoicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListInvoicesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * ListInvoices
     * @param InvoicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvoicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return InvoicesRequestBuilder
    */
    public function withUrl(string $rawUrl): InvoicesRequestBuilder {
        return new InvoicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
