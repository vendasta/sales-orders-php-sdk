<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>salesorders.v1.GetConfigResponse</code>
 */
class GetConfigResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.salesorders.v1.Config config = 1;</code>
     */
    private $config = null;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.salesorders.v1.Config config = 1;</code>
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * <code>.salesorders.v1.Config config = 1;</code>
     */
    public function setConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Salesorders\V1\Config::class);
        $this->config = $var;
    }

}

