<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The payload for updating the Revenue of the LineItems of an order
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.UpdateCurrentRevenueRequest</code>
 */
class UpdateCurrentRevenueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    private $order_id = '';
    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    private $business_id = '';
    /**
     * <pre>
     * The LineItems to be updated
     * </pre>
     *
     * <code>repeated .sales.v1.LineItem line_items = 3;</code>
     */
    private $line_items;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;
    }

    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

    /**
     * <pre>
     * The LineItems to be updated
     * </pre>
     *
     * <code>repeated .sales.v1.LineItem line_items = 3;</code>
     */
    public function getLineItems()
    {
        return $this->line_items;
    }

    /**
     * <pre>
     * The LineItems to be updated
     * </pre>
     *
     * <code>repeated .sales.v1.LineItem line_items = 3;</code>
     */
    public function setLineItems(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sales\V1\LineItem::class);
        $this->line_items = $arr;
    }

}

