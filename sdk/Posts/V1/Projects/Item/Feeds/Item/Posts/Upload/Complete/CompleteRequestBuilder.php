<?php

namespace Rixl\Sdk\Posts\V1\Projects\Item\Feeds\Item\Posts\Upload\Complete;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Models\Posts\V1\Post;

/**
 * Builds and executes requests for operations under /posts/v1/projects/{project_id}/feeds/{feed_id}/posts/upload/complete
*/
class CompleteRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CompleteRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/posts/v1/projects/{project_id}/feeds/{feed_id}/posts/upload/complete');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * CompletePostUpload
     * @param CompletePostRequestBody $body The request body
     * @param CompleteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Post|null>
     * @throws Exception
    */
    public function post(CompletePostRequestBody $body, ?CompleteRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Post::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * CompletePostUpload
     * @param CompletePostRequestBody $body The request body
     * @param CompleteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CompletePostRequestBody $body, ?CompleteRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CompleteRequestBuilder
    */
    public function withUrl(string $rawUrl): CompleteRequestBuilder {
        return new CompleteRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
