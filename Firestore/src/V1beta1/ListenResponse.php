<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [Firestore.Listen][google.firestore.v1beta1.Firestore.Listen].
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.ListenResponse</code>
 */
class ListenResponse extends \Google\Protobuf\Internal\Message
{
    protected $response_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1beta1\TargetChange $target_change
     *           Targets have changed.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentChange $document_change
     *           A [Document][google.firestore.v1beta1.Document] has changed.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentDelete $document_delete
     *           A [Document][google.firestore.v1beta1.Document] has been deleted.
     *     @type \Google\Cloud\Firestore\V1beta1\DocumentRemove $document_remove
     *           A [Document][google.firestore.v1beta1.Document] has been removed from a
     *           target (because it is no longer relevant to that target).
     *     @type \Google\Cloud\Firestore\V1beta1\ExistenceFilter $filter
     *           A filter to apply to the set of documents previously returned for the
     *           given target.
     *           Returned when documents may have been removed from the given target, but
     *           the exact documents are unknown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Targets have changed.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TargetChange target_change = 2;</code>
     * @return \Google\Cloud\Firestore\V1beta1\TargetChange
     */
    public function getTargetChange()
    {
        return $this->readOneof(2);
    }

    /**
     * Targets have changed.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.TargetChange target_change = 2;</code>
     * @param \Google\Cloud\Firestore\V1beta1\TargetChange $var
     * @return $this
     */
    public function setTargetChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\TargetChange::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has changed.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentChange document_change = 3;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentChange
     */
    public function getDocumentChange()
    {
        return $this->readOneof(3);
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has changed.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentChange document_change = 3;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentChange $var
     * @return $this
     */
    public function setDocumentChange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentChange::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has been deleted.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentDelete document_delete = 4;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentDelete
     */
    public function getDocumentDelete()
    {
        return $this->readOneof(4);
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has been deleted.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentDelete document_delete = 4;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentDelete $var
     * @return $this
     */
    public function setDocumentDelete($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentDelete::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has been removed from a
     * target (because it is no longer relevant to that target).
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentRemove document_remove = 6;</code>
     * @return \Google\Cloud\Firestore\V1beta1\DocumentRemove
     */
    public function getDocumentRemove()
    {
        return $this->readOneof(6);
    }

    /**
     * A [Document][google.firestore.v1beta1.Document] has been removed from a
     * target (because it is no longer relevant to that target).
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentRemove document_remove = 6;</code>
     * @param \Google\Cloud\Firestore\V1beta1\DocumentRemove $var
     * @return $this
     */
    public function setDocumentRemove($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\DocumentRemove::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A filter to apply to the set of documents previously returned for the
     * given target.
     * Returned when documents may have been removed from the given target, but
     * the exact documents are unknown.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.ExistenceFilter filter = 5;</code>
     * @return \Google\Cloud\Firestore\V1beta1\ExistenceFilter
     */
    public function getFilter()
    {
        return $this->readOneof(5);
    }

    /**
     * A filter to apply to the set of documents previously returned for the
     * given target.
     * Returned when documents may have been removed from the given target, but
     * the exact documents are unknown.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.ExistenceFilter filter = 5;</code>
     * @param \Google\Cloud\Firestore\V1beta1\ExistenceFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\ExistenceFilter::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->whichOneof("response_type");
    }

}
