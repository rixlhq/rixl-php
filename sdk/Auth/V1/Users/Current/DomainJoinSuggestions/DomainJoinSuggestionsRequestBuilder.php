<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\DomainJoinSuggestions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Auth\V1\Users\Current\DomainJoinSuggestions\Join\JoinRequestBuilder;
use Rixl\Sdk\Models\Auth\V1\ListDomainJoinSuggestionsResponse;
use Rixl\Sdk\Models\Error;

/**
 * Builds and executes requests for operations under /auth/v1/users/current/domain-join-suggestions
*/
class DomainJoinSuggestionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The join property
    */
    public function join(): JoinRequestBuilder {
        return new JoinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DomainJoinSuggestionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/users/current/domain-join-suggestions{?page_size*,page_token*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * ListDomainJoinSuggestions
     * @param DomainJoinSuggestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListDomainJoinSuggestionsResponse|null>
     * @throws Exception
    */
    public function get(?DomainJoinSuggestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ListDomainJoinSuggestionsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * ListDomainJoinSuggestions
     * @param DomainJoinSuggestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DomainJoinSuggestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DomainJoinSuggestionsRequestBuilder
    */
    public function withUrl(string $rawUrl): DomainJoinSuggestionsRequestBuilder {
        return new DomainJoinSuggestionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
