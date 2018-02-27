<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/19/16 2:59 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/draft_order Shopify API Reference for Order
 */

namespace PHPShopify;



/*
 * --------------------------------------------------------------------------
 * Order -> Child Resources
 * --------------------------------------------------------------------------
 *
 * --------------------------------------------------------------------------
 * DraftOrder -> Custom actions
 * --------------------------------------------------------------------------
 *
 */
class DraftOrder extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'draft_order';

    /**
     * @inheritDoc
     */
    protected $childResource = array ();

    /**
     * @inheritDoc
     */
    protected $customPostActions = array();
}