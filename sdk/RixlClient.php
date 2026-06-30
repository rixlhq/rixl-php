<?php

namespace Rixl\Sdk;

use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;
use Rixl\Sdk\Analytics\AnalyticsRequestBuilder;
use Rixl\Sdk\Auth\AuthRequestBuilder;
use Rixl\Sdk\Billing\BillingRequestBuilder;
use Rixl\Sdk\Media\MediaRequestBuilder;
use Rixl\Sdk\Organization\OrganizationRequestBuilder;
use Rixl\Sdk\Platform\PlatformRequestBuilder;
use Rixl\Sdk\Posts\PostsRequestBuilder;
use Rixl\Sdk\Projects\ProjectsRequestBuilder;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class RixlClient extends BaseRequestBuilder 
{
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The auth property
    */
    public function auth(): AuthRequestBuilder {
        return new AuthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The billing property
    */
    public function billing(): BillingRequestBuilder {
        return new BillingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The media property
    */
    public function media(): MediaRequestBuilder {
        return new MediaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The organization property
    */
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The platform property
    */
    public function platform(): PlatformRequestBuilder {
        return new PlatformRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The posts property
    */
    public function posts(): PostsRequestBuilder {
        return new PostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The projects property
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new RixlClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://raw.githubusercontent.com');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
