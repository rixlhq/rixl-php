<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain\AutoJoin;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\AutoJoinSetting;
use Rixl\Sdk\Models\Gateway\AutoJoinBody;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{orgId}/domain/auto-join
*/
class AutoJoinRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AutoJoinRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{orgId}/domain/auto-join');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns whether users with a matching verified domain email are automatically added to the organization.
     * @param AutoJoinRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutoJoinSetting|null>
     * @throws Exception
    */
    public function get(?AutoJoinRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AutoJoinSetting::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Enables or disables automatically adding users with a matching verified domain email to the organization.
     * @param AutoJoinBody $body Auto-join enabled
     * @param AutoJoinRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutoJoinSetting|null>
     * @throws Exception
    */
    public function put(AutoJoinBody $body, ?AutoJoinRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AutoJoinSetting::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns whether users with a matching verified domain email are automatically added to the organization.
     * @param AutoJoinRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AutoJoinRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Enables or disables automatically adding users with a matching verified domain email to the organization.
     * @param AutoJoinBody $body Auto-join enabled
     * @param AutoJoinRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(AutoJoinBody $body, ?AutoJoinRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AutoJoinRequestBuilder
    */
    public function withUrl(string $rawUrl): AutoJoinRequestBuilder {
        return new AutoJoinRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
