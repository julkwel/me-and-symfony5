<?php

namespace FOS\ElasticaBundle\Persister\Event;

/**
 * Class Events.
 */
final class Events
{
    public const PRE_PERSIST = 'elastica.pager_persister.pre_persist';

    public const PRE_FETCH_OBJECTS = 'elastica.pager_persister.pre_fetch_objects';

    public const PRE_INSERT_OBJECTS = 'elastica.pager_persister.pre_insert_objects';

    public const POST_INSERT_OBJECTS = 'elastica.pager_persister.post_insert_objects';

    public const POST_ASYNC_INSERT_OBJECTS = 'elastica.pager_persister.post_async_insert_objects';

    public const ON_EXCEPTION = 'elastica.pager_persister.on_exception';

    public const POST_PERSIST = 'elastica.pager_persister.post_persist';

    private function __construct()
    {
    }
}