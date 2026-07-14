<?php

namespace Rixl\Sdk\Auth\V1\Email\Verify;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Email\Verify\Resend\ResendRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\VerifyEmailRequest;
use Rixl\Sdk\Models\Auth\V1\VerifyEmailResponse;

/**
 * Builds and executes requests for operations under /auth/v1/email/verify
*/
class VerifyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The resend property
    */
    public function resend(): ResendRequestBuilder {
        return new ResendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VerifyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/email/verify');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * VerifyEmail
     * @param VerifyEmailRequest $body The request body
     * @param VerifyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VerifyEmailResponse|null>
     * @throws Exception
    */
    public function post(VerifyEmailRequest $body, ?VerifyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VerifyEmailResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * VerifyEmail
     * @param VerifyEmailRequest $body The request body
     * @param VerifyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VerifyEmailRequest $body, ?VerifyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VerifyRequestBuilder
    */
    public function withUrl(string $rawUrl): VerifyRequestBuilder {
        return new VerifyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
