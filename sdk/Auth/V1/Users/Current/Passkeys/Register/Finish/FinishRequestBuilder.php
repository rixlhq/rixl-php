<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Passkeys\Register\Finish;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Auth\V1\PasskeyRegisterFinishRequest;
use Rixl\Sdk\Models\Auth\V1\PasskeyRegisterFinishResponse;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/passkeys/register/finish
*/
class FinishRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FinishRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/passkeys/register/finish');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * PasskeyRegisterFinish
     * @param PasskeyRegisterFinishRequest $body The request body
     * @param FinishRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasskeyRegisterFinishResponse|null>
     * @throws Exception
    */
    public function post(PasskeyRegisterFinishRequest $body, ?FinishRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PasskeyRegisterFinishResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * PasskeyRegisterFinish
     * @param PasskeyRegisterFinishRequest $body The request body
     * @param FinishRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PasskeyRegisterFinishRequest $body, ?FinishRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return FinishRequestBuilder
    */
    public function withUrl(string $rawUrl): FinishRequestBuilder {
        return new FinishRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
