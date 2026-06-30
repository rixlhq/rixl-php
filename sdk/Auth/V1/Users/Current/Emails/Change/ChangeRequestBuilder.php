<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Emails\Change;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Authv1\VerificationSentResponse;
use Rixl\Sdk\Models\Gateway\ChangeEmailBody;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/emails/change
*/
class ChangeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ChangeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/emails/change');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Starts changing the authenticated account's email address. A verificationcode is sent to the new address; the change is applied only after the codeis confirmed via `POST /auth/v1/email/verify`. Subject to rate limiting per account.
     * @param ChangeEmailBody $body New email address
     * @param ChangeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VerificationSentResponse|null>
     * @throws Exception
    */
    public function put(ChangeEmailBody $body, ?ChangeRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VerificationSentResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Starts changing the authenticated account's email address. A verificationcode is sent to the new address; the change is applied only after the codeis confirmed via `POST /auth/v1/email/verify`. Subject to rate limiting per account.
     * @param ChangeEmailBody $body New email address
     * @param ChangeRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(ChangeEmailBody $body, ?ChangeRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ChangeRequestBuilder
    */
    public function withUrl(string $rawUrl): ChangeRequestBuilder {
        return new ChangeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
