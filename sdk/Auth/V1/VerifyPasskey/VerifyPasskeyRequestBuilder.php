<?php

namespace Rixl\Sdk\Auth\V1\VerifyPasskey;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\TokenResponse;
use Rixl\Sdk\Models\Gateway\PasskeyVerifyBody;

/**
 * Builds and executes requests for operations under /auth/v1/verify-passkey
*/
class VerifyPasskeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VerifyPasskeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/verify-passkey');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Completes the passkey step of a password login's 2FA challenge. Verifies the signed WebAuthn assertion against the challenge stored in the login session (from POST /auth/v1/login with status "2fa_required") and returns authentication tokens.
     * @param PasskeyVerifyBody $body session_id and WebAuthn credential
     * @param VerifyPasskeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenResponse|null>
     * @throws Exception
    */
    public function post(PasskeyVerifyBody $body, ?VerifyPasskeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [TokenResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Completes the passkey step of a password login's 2FA challenge. Verifies the signed WebAuthn assertion against the challenge stored in the login session (from POST /auth/v1/login with status "2fa_required") and returns authentication tokens.
     * @param PasskeyVerifyBody $body session_id and WebAuthn credential
     * @param VerifyPasskeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PasskeyVerifyBody $body, ?VerifyPasskeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VerifyPasskeyRequestBuilder
    */
    public function withUrl(string $rawUrl): VerifyPasskeyRequestBuilder {
        return new VerifyPasskeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
