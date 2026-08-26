<?php

namespace Rixl\Sdk\Auth\V1\Users\Current;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Users\Current\Avatar\AvatarRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Emails\EmailsRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Name\NameRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Passkeys\PasskeysRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Totp\TotpRequestBuilder;
use Rixl\Sdk\Auth\V1\Users\Current\Username\UsernameRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\GetUserResponse;

/**
 * Builds and executes requests for operations under /auth/v1/users/current
*/
class CurrentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The avatar property
    */
    public function avatar(): AvatarRequestBuilder {
        return new AvatarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The emails property
    */
    public function emails(): EmailsRequestBuilder {
        return new EmailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The name property
    */
    public function name(): NameRequestBuilder {
        return new NameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The passkeys property
    */
    public function passkeys(): PasskeysRequestBuilder {
        return new PasskeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The totp property
    */
    public function totp(): TotpRequestBuilder {
        return new TotpRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The username property
    */
    public function username(): UsernameRequestBuilder {
        return new UsernameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CurrentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current{?user_id*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * GetUser
     * @param CurrentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetUserResponse|null>
     * @throws Exception
    */
    public function get(?CurrentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetUserResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * GetUser
     * @param CurrentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CurrentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CurrentRequestBuilder
    */
    public function withUrl(string $rawUrl): CurrentRequestBuilder {
        return new CurrentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
