<?php

declare(strict_types=1);

namespace PoP\PostTagsWP\TypeAPIs;

use PoP\TagsWP\TypeAPIs\TagTypeAPI;
use PoP\PostTags\TypeAPIs\PostTagTypeAPIInterface;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class PostTagTypeAPI extends TagTypeAPI implements PostTagTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Tag
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfTagType($object): bool
    {
        return $this->isInstanceOfTagType($object) && $object->name = 'post_tag'
    }
}
