<?php

namespace Rixl\Sdk\Projects\Item\Feeds;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Feedsv1\Feed;
use Rixl\Sdk\Models\Feedsv1\ListFeedsResponse;
use Rixl\Sdk\Models\Types\CreateFeedRequest;
use Rixl\Sdk\Projects\Item\Feeds\Item\WithFeedItemRequestBuilder;

/**
 * Builds and executes requests for operations under /projects/{projectId}/feeds
*/
class FeedsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.projects.item.feeds.item collection
     * @param string $feedId Feed ID
     * @return WithFeedItemRequestBuilder
    */
    public function byFeedId(string $feedId): WithFeedItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['feedId'] = $feedId;
        return new WithFeedItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FeedsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/projects/{projectId}/feeds{?limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists all feeds for the active project with pagination.
     * @param FeedsGetRequestBody $body The request body
     * @param FeedsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ListFeedsResponse|null>
     * @throws Exception
    */
    public function get(FeedsGetRequestBody $body, ?FeedsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ListFeedsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Creates a new feed under the active project.
     * @param CreateFeedRequest $body Feed details
     * @param FeedsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Feed|null>
     * @throws Exception
    */
    public function post(CreateFeedRequest $body, ?FeedsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Feed::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Lists all feeds for the active project with pagination.
     * @param FeedsGetRequestBody $body The request body
     * @param FeedsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(FeedsGetRequestBody $body, ?FeedsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Creates a new feed under the active project.
     * @param CreateFeedRequest $body Feed details
     * @param FeedsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateFeedRequest $body, ?FeedsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FeedsRequestBuilder
    */
    public function withUrl(string $rawUrl): FeedsRequestBuilder {
        return new FeedsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
