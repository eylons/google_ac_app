<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.GetAppProfile.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.GetAppProfileRequest</code>
 */
class GetAppProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the requested app profile. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the requested app profile. Values are of the form
     *           `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the requested app profile. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the requested app profile. Values are of the form
     * `projects/<project>/instances/<instance>/appProfiles/<app_profile>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

