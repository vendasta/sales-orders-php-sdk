<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketplace_apps/v1/order_form.proto

namespace Marketplaceapps\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Field asking user for information when they try to activate the app
 * </pre>
 *
 * Protobuf type <code>marketplaceapps.v1.OrderFormField</code>
 */
class OrderFormField extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string label = 1;</code>
     */
    private $label = '';
    /**
     * <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * <code>string type = 3;</code>
     */
    private $type = '';
    /**
     * <pre>
     * Deprecated: Replaced by options_with_labels
     * </pre>
     *
     * <code>repeated string options = 4 [deprecated = true];</code>
     */
    private $options;
    /**
     * <code>string description = 6;</code>
     */
    private $description = '';
    /**
     * <code>bool required = 7;</code>
     */
    private $required = false;
    /**
     * <pre>
     * Deprecated: For file upload fields this is where we upload and store the file
     * </pre>
     *
     * <code>string upload_url = 8 [deprecated = true];</code>
     */
    private $upload_url = '';
    /**
     * <pre>
     * For textbox fields, this string will be displayed in front of the textbox
     * </pre>
     *
     * <code>string prefix = 9;</code>
     */
    private $prefix = '';
    /**
     * <pre>
     * For textbox fields, this string will be displayed behind the textbox
     * </pre>
     *
     * <code>string suffix = 10;</code>
     */
    private $suffix = '';
    /**
     * <pre>
     * A regex string used to validate a fields answer
     * </pre>
     *
     * <code>string regex_validator = 11;</code>
     */
    private $regex_validator = '';
    /**
     * <pre>
     * The error message displayed if the regex_validator does not match the answer
     * </pre>
     *
     * <code>string regex_error_message = 12;</code>
     */
    private $regex_error_message = '';
    /**
     * <pre>
     * Indicates if this field will call out to the order_form_validator_webhook_url under Integration
     * </pre>
     *
     * <code>bool use_webhook_validator = 13;</code>
     */
    private $use_webhook_validator = false;
    /**
     * <pre>
     * The following 3 options are for dropdowns that allow you to choose multiple options
     * Whether or not to allow multiple choices.
     * </pre>
     *
     * <code>bool allow_multiples = 14;</code>
     */
    private $allow_multiples = false;
    /**
     * <pre>
     * If you should be able to choose the same option twice.
     * </pre>
     *
     * <code>bool allow_duplicates = 15;</code>
     */
    private $allow_duplicates = false;
    /**
     * <pre>
     * The maximum number of choices you can make
     * </pre>
     *
     * <code>int64 max_choices = 16;</code>
     */
    private $max_choices = 0;
    /**
     * <pre>
     * if this is true the field will not be shown to end users
     * </pre>
     *
     * <code>bool for_office_use_only = 17;</code>
     */
    private $for_office_use_only = false;
    /**
     * <code>repeated .marketplaceapps.v1.OrderFormField.Option options_with_labels = 18;</code>
     */
    private $options_with_labels;
    /**
     * <pre>
     * if this is true the field will not be editable by end users
     * </pre>
     *
     * <code>bool office_editable_only = 19;</code>
     */
    private $office_editable_only = false;

    public function __construct() {
        \GPBMetadata\MarketplaceApps\V1\OrderForm::initOnce();
        parent::__construct();
    }

    /**
     * <code>string label = 1;</code>
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * <code>string label = 1;</code>
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;
    }

    /**
     * <code>string id = 2;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>string id = 2;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    /**
     * <code>string type = 3;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>string type = 3;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;
    }

    /**
     * <pre>
     * Deprecated: Replaced by options_with_labels
     * </pre>
     *
     * <code>repeated string options = 4 [deprecated = true];</code>
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * <pre>
     * Deprecated: Replaced by options_with_labels
     * </pre>
     *
     * <code>repeated string options = 4 [deprecated = true];</code>
     */
    public function setOptions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->options = $arr;
    }

    /**
     * <code>string description = 6;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <code>string description = 6;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * <code>bool required = 7;</code>
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * <code>bool required = 7;</code>
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;
    }

    /**
     * <pre>
     * Deprecated: For file upload fields this is where we upload and store the file
     * </pre>
     *
     * <code>string upload_url = 8 [deprecated = true];</code>
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * <pre>
     * Deprecated: For file upload fields this is where we upload and store the file
     * </pre>
     *
     * <code>string upload_url = 8 [deprecated = true];</code>
     */
    public function setUploadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->upload_url = $var;
    }

    /**
     * <pre>
     * For textbox fields, this string will be displayed in front of the textbox
     * </pre>
     *
     * <code>string prefix = 9;</code>
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * <pre>
     * For textbox fields, this string will be displayed in front of the textbox
     * </pre>
     *
     * <code>string prefix = 9;</code>
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->prefix = $var;
    }

    /**
     * <pre>
     * For textbox fields, this string will be displayed behind the textbox
     * </pre>
     *
     * <code>string suffix = 10;</code>
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * <pre>
     * For textbox fields, this string will be displayed behind the textbox
     * </pre>
     *
     * <code>string suffix = 10;</code>
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->suffix = $var;
    }

    /**
     * <pre>
     * A regex string used to validate a fields answer
     * </pre>
     *
     * <code>string regex_validator = 11;</code>
     */
    public function getRegexValidator()
    {
        return $this->regex_validator;
    }

    /**
     * <pre>
     * A regex string used to validate a fields answer
     * </pre>
     *
     * <code>string regex_validator = 11;</code>
     */
    public function setRegexValidator($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex_validator = $var;
    }

    /**
     * <pre>
     * The error message displayed if the regex_validator does not match the answer
     * </pre>
     *
     * <code>string regex_error_message = 12;</code>
     */
    public function getRegexErrorMessage()
    {
        return $this->regex_error_message;
    }

    /**
     * <pre>
     * The error message displayed if the regex_validator does not match the answer
     * </pre>
     *
     * <code>string regex_error_message = 12;</code>
     */
    public function setRegexErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex_error_message = $var;
    }

    /**
     * <pre>
     * Indicates if this field will call out to the order_form_validator_webhook_url under Integration
     * </pre>
     *
     * <code>bool use_webhook_validator = 13;</code>
     */
    public function getUseWebhookValidator()
    {
        return $this->use_webhook_validator;
    }

    /**
     * <pre>
     * Indicates if this field will call out to the order_form_validator_webhook_url under Integration
     * </pre>
     *
     * <code>bool use_webhook_validator = 13;</code>
     */
    public function setUseWebhookValidator($var)
    {
        GPBUtil::checkBool($var);
        $this->use_webhook_validator = $var;
    }

    /**
     * <pre>
     * The following 3 options are for dropdowns that allow you to choose multiple options
     * Whether or not to allow multiple choices.
     * </pre>
     *
     * <code>bool allow_multiples = 14;</code>
     */
    public function getAllowMultiples()
    {
        return $this->allow_multiples;
    }

    /**
     * <pre>
     * The following 3 options are for dropdowns that allow you to choose multiple options
     * Whether or not to allow multiple choices.
     * </pre>
     *
     * <code>bool allow_multiples = 14;</code>
     */
    public function setAllowMultiples($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_multiples = $var;
    }

    /**
     * <pre>
     * If you should be able to choose the same option twice.
     * </pre>
     *
     * <code>bool allow_duplicates = 15;</code>
     */
    public function getAllowDuplicates()
    {
        return $this->allow_duplicates;
    }

    /**
     * <pre>
     * If you should be able to choose the same option twice.
     * </pre>
     *
     * <code>bool allow_duplicates = 15;</code>
     */
    public function setAllowDuplicates($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_duplicates = $var;
    }

    /**
     * <pre>
     * The maximum number of choices you can make
     * </pre>
     *
     * <code>int64 max_choices = 16;</code>
     */
    public function getMaxChoices()
    {
        return $this->max_choices;
    }

    /**
     * <pre>
     * The maximum number of choices you can make
     * </pre>
     *
     * <code>int64 max_choices = 16;</code>
     */
    public function setMaxChoices($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_choices = $var;
    }

    /**
     * <pre>
     * if this is true the field will not be shown to end users
     * </pre>
     *
     * <code>bool for_office_use_only = 17;</code>
     */
    public function getForOfficeUseOnly()
    {
        return $this->for_office_use_only;
    }

    /**
     * <pre>
     * if this is true the field will not be shown to end users
     * </pre>
     *
     * <code>bool for_office_use_only = 17;</code>
     */
    public function setForOfficeUseOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->for_office_use_only = $var;
    }

    /**
     * <code>repeated .marketplaceapps.v1.OrderFormField.Option options_with_labels = 18;</code>
     */
    public function getOptionsWithLabels()
    {
        return $this->options_with_labels;
    }

    /**
     * <code>repeated .marketplaceapps.v1.OrderFormField.Option options_with_labels = 18;</code>
     */
    public function setOptionsWithLabels(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Marketplaceapps\V1\OrderFormField_Option::class);
        $this->options_with_labels = $arr;
    }

    /**
     * <pre>
     * if this is true the field will not be editable by end users
     * </pre>
     *
     * <code>bool office_editable_only = 19;</code>
     */
    public function getOfficeEditableOnly()
    {
        return $this->office_editable_only;
    }

    /**
     * <pre>
     * if this is true the field will not be editable by end users
     * </pre>
     *
     * <code>bool office_editable_only = 19;</code>
     */
    public function setOfficeEditableOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->office_editable_only = $var;
    }

}

