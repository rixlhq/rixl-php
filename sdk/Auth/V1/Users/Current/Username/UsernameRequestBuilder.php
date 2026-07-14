<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Username;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\UpdateUsernameRequest;
use Rixl\Sdk\Models\Auth\V1\UpdateUsernameResponse;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/username
*/
class UsernameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UsernameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/username');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UpdateUsername
     * @param UpdateUsernameRequest $body The request body
     * @param UsernameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateUsernameResponse|null>
     * @throws Exception
    */
    public function patch(UpdateUsernameRequest $body, ?UsernameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateUsernameResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateUsername
     * @param UpdateUsernameRequest $body The request body
     * @param UsernameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UpdateUsernameRequest $body, ?UsernameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return UsernameRequestBuilder
    */
    public function withUrl(string $rawUrl): UsernameRequestBuilder {
        return new UsernameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
