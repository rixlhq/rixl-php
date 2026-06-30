<?php

namespace Rixl\Sdk\Projects\Item\Feeds\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Feedsv1\DeleteFeedResponse;
use Rixl\Sdk\Models\Feedsv1\Feed;
use Rixl\Sdk\Models\Types\UpdateFeedRequest;

/**
 * Builds and executes requests for operations under /projects/{projectId}/feeds/{feedId}
*/
class WithFeedItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithFeedItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/projects/{projectId}/feeds/{feedId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a feed in the active project.
     * @param WithFeedDeleteRequestBody $body The request body
     * @param WithFeedItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeleteFeedResponse|null>
     * @throws Exception
    */
    public function delete(WithFeedDeleteRequestBody $body, ?WithFeedItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DeleteFeedResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Retrieves a feed by ID under the active project.
     * @param WithFeedGetRequestBody $body The request body
     * @param WithFeedItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Feed|null>
     * @throws Exception
    */
    public function get(WithFeedGetRequestBody $body, ?WithFeedItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Feed::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Updates an existing feed in the active project.
     * @param UpdateFeedRequest $body Updated feed details
     * @param WithFeedItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Feed|null>
     * @throws Exception
    */
    public function put(UpdateFeedRequest $body, ?WithFeedItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Feed::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Deletes a feed in the active project.
     * @param WithFeedDeleteRequestBody $body The request body
     * @param WithFeedItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(WithFeedDeleteRequestBody $body, ?WithFeedItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Retrieves a feed by ID under the active project.
     * @param WithFeedGetRequestBody $body The request body
     * @param WithFeedItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(WithFeedGetRequestBody $body, ?WithFeedItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Updates an existing feed in the active project.
     * @param UpdateFeedRequest $body Updated feed details
     * @param WithFeedItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateFeedRequest $body, ?WithFeedItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithFeedItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithFeedItemRequestBuilder {
        return new WithFeedItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
