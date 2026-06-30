<?php

namespace Rixl\Sdk\Auth\V1\VerifyTotp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\TokenResponse;
use Rixl\Sdk\Models\Gateway\VerifyTOTPLoginBody;

/**
 * Builds and executes requests for operations under /auth/v1/verify-totp
*/
class VerifyTotpRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VerifyTotpRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/verify-totp');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Verifies the submitted TOTP code for a pending login session and, if valid, completes authentication and returns access tokens.
     * @param VerifyTOTPLoginBody $body TOTP code and login session id
     * @param VerifyTotpRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenResponse|null>
     * @throws Exception
    */
    public function post(VerifyTOTPLoginBody $body, ?VerifyTotpRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [TokenResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Verifies the submitted TOTP code for a pending login session and, if valid, completes authentication and returns access tokens.
     * @param VerifyTOTPLoginBody $body TOTP code and login session id
     * @param VerifyTotpRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VerifyTOTPLoginBody $body, ?VerifyTotpRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VerifyTotpRequestBuilder
    */
    public function withUrl(string $rawUrl): VerifyTotpRequestBuilder {
        return new VerifyTotpRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
