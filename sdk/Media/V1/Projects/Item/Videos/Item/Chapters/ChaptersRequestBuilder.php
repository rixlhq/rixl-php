<?php

namespace Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Rixl\Sdk\Media\V1\Projects\Item\Videos\Item\Chapters\Item\WithStart_time_secItemRequestBuilder;
use Rixl\Sdk\Models\Videos\V1\VideoChapters;

/**
 * Builds and executes requests for operations under /media/v1/projects/{project_id}/videos/{video_id}/chapters
*/
class ChaptersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.projects.item.videos.item.chapters.item collection
     * @param string $start_time_sec Unique identifier of the item
     * @return WithStart_time_secItemRequestBuilder
    */
    public function byStart_time_sec(string $start_time_sec): WithStart_time_secItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['start_time_sec'] = $start_time_sec;
        return new WithStart_time_secItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ChaptersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects/{project_id}/videos/{video_id}/chapters{?chapters%2EstartTimeSec*,chapters%2Etitle*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * UpdateVideoChapters
     * @param ChaptersRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoChapters|null>
     * @throws Exception
    */
    public function delete(?ChaptersRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoChapters::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * GetVideoChapters
     * @param ChaptersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VideoChapters|null>
     * @throws Exception
    */
    public function get(?ChaptersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [VideoChapters::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * UpdateVideoChapters
     * @param ChaptersRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ChaptersRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
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
     * GetVideoChapters
     * @param ChaptersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChaptersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ChaptersRequestBuilder
    */
    public function withUrl(string $rawUrl): ChaptersRequestBuilder {
        return new ChaptersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
