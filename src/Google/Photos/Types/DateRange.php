<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/types/date_range.proto

namespace Google\Photos\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a range of dates. Both dates must be of the same format. For more
 * information, see [Date][google.type.Date].
 *
 * Generated from protobuf message <code>google.photos.types.DateRange</code>
 */
class DateRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The start date (included as part of the range) in one of the formats
     * described.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     */
    protected $start_date = null;
    /**
     * The end date (included as part of the range). It must be specified in the
     * same format as the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date $start_date
     *           The start date (included as part of the range) in one of the formats
     *           described.
     *     @type \Google\Type\Date $end_date
     *           The end date (included as part of the range). It must be specified in the
     *           same format as the start date.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Types\DateRange::initOnce();
        parent::__construct($data);
    }

    /**
     * The start date (included as part of the range) in one of the formats
     * described.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @return \Google\Type\Date
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * The start date (included as part of the range) in one of the formats
     * described.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * The end date (included as part of the range). It must be specified in the
     * same format as the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @return \Google\Type\Date
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * The end date (included as part of the range). It must be specified in the
     * same format as the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

}
