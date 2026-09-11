<?php

namespace Rixl\Sdk\Support\V1\Chat\Messages;

use DateTime;

/**
 * ListChatMessages
*/
class MessagesRequestBuilderGetQueryParameters 
{
    /**
     * @var DateTime|null $after A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
    */
    public ?DateTime $after = null;
    
    /**
     * @var int|null $limit The limit query parameter.
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new MessagesRequestBuilderGetQueryParameters and sets the default values.
     * @param DateTime|null $after A point in time in RFC 3339 format, with up to nanosecond precision. Output uses UTC (`Z`); input may use an offset from UTC.
     * @param int|null $limit The limit query parameter.
    */
    public function __construct(?DateTime $after = null, ?int $limit = null) {
        $this->after = $after;
        $this->limit = $limit;
    }

}
