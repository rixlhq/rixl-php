<?php

namespace Rixl\Sdk\Auth\V1\Blog;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Blog\Broadcast\BroadcastRequestBuilder;
use Rixl\Sdk\Auth\V1\Blog\Subscribe\SubscribeRequestBuilder;
use Rixl\Sdk\Auth\V1\Blog\Subscription\SubscriptionRequestBuilder;
use Rixl\Sdk\Auth\V1\Blog\Unsubscribe\UnsubscribeRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/blog
*/
class BlogRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The broadcast property
    */
    public function broadcast(): BroadcastRequestBuilder {
        return new BroadcastRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscribe property
    */
    public function subscribe(): SubscribeRequestBuilder {
        return new SubscribeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscription property
    */
    public function subscription(): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsubscribe property
    */
    public function unsubscribe(): UnsubscribeRequestBuilder {
        return new UnsubscribeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BlogRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/blog');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
