<?php

use ConectouLib\SyncErrors\Api\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function getList($filters, $offset, $limit)
    {
        return [
            ['code' => 'a'],
            ['code' => 'b'],
            ['code' => 'c']
        ];
    }
}