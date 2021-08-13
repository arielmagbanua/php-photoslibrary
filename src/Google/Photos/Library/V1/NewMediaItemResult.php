<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of creating a new media item.
 *
 * Generated from protobuf message <code>google.photos.library.v1.NewMediaItemResult</code>
 */
class NewMediaItemResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The upload token used to create this new media item.
     *
     * Generated from protobuf field <code>string upload_token = 1;</code>
     */
    protected $upload_token = '';
    /**
     * If an error occurred during the creation of this media item, this field
     * is  populated with information related to the error. For details regarding
     * this field, see <a href="#Status">Status</a>.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    protected $status = null;
    /**
     * Media item created with the upload token. It's populated if no errors
     * occurred and the media item was created successfully.
     *
     * Generated from protobuf field <code>.google.photos.types.MediaItem media_item = 3;</code>
     */
    protected $media_item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $upload_token
     *           The upload token used to create this new media item.
     *     @type \Google\Rpc\Status $status
     *           If an error occurred during the creation of this media item, this field
     *           is  populated with information related to the error. For details regarding
     *           this field, see <a href="#Status">Status</a>.
     *     @type \Google\Photos\Types\MediaItem $media_item
     *           Media item created with the upload token. It's populated if no errors
     *           occurred and the media item was created successfully.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * The upload token used to create this new media item.
     *
     * Generated from protobuf field <code>string upload_token = 1;</code>
     * @return string
     */
    public function getUploadToken()
    {
        return $this->upload_token;
    }

    /**
     * The upload token used to create this new media item.
     *
     * Generated from protobuf field <code>string upload_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->upload_token = $var;

        return $this;
    }

    /**
     * If an error occurred during the creation of this media item, this field
     * is  populated with information related to the error. For details regarding
     * this field, see <a href="#Status">Status</a>.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * If an error occurred during the creation of this media item, this field
     * is  populated with information related to the error. For details regarding
     * this field, see <a href="#Status">Status</a>.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Media item created with the upload token. It's populated if no errors
     * occurred and the media item was created successfully.
     *
     * Generated from protobuf field <code>.google.photos.types.MediaItem media_item = 3;</code>
     * @return \Google\Photos\Types\MediaItem|null
     */
    public function getMediaItem()
    {
        return isset($this->media_item) ? $this->media_item : null;
    }

    public function hasMediaItem()
    {
        return isset($this->media_item);
    }

    public function clearMediaItem()
    {
        unset($this->media_item);
    }

    /**
     * Media item created with the upload token. It's populated if no errors
     * occurred and the media item was created successfully.
     *
     * Generated from protobuf field <code>.google.photos.types.MediaItem media_item = 3;</code>
     * @param \Google\Photos\Types\MediaItem $var
     * @return $this
     */
    public function setMediaItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Types\MediaItem::class);
        $this->media_item = $var;

        return $this;
    }

}

