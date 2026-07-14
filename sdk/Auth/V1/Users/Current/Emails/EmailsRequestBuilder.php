<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Emails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Users\Current\Emails\Change\ChangeRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Emails\Status\StatusRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\AddEmailRequest;
use Rixl\Sdk\Models\Auth\V1\VerificationSentResponse;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/emails
*/
class EmailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The change property
    */
    public function change(): ChangeRequestBuilder {
        return new ChangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The status property
    */
    public function status(): StatusRequestBuilder {
        return new StatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EmailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/emails');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * AddEmail
     * @param AddEmailRequest $body The request body
     * @param EmailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VerificationSentResponse|null>
     * @throws Exception
    */
    public function post(AddEmailRequest $body, ?EmailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VerificationSentResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * AddEmail
     * @param AddEmailRequest $body The request body
     * @param EmailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddEmailRequest $body, ?EmailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmailsRequestBuilder
    */
    public function withUrl(string $rawUrl): EmailsRequestBuilder {
        return new EmailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
