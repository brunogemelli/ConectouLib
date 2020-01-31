<?php

namespace ConectouLib\SyncErrors\Api;

/**
 * @api
 * @since 100.0.2
 */
interface ProductRepositoryInterface
{
    /**
     * Get sync product errors list
     */
    public function getList($filters, $offset, $limit);
}
