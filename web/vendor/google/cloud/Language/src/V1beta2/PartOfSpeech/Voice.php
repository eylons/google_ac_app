<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2\PartOfSpeech;

/**
 * The relationship between the action that a verb expresses and the
 * participants identified by its arguments.
 *
 * Protobuf type <code>google.cloud.language.v1beta2.PartOfSpeech.Voice</code>
 */
class Voice
{
    /**
     * Voice is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>VOICE_UNKNOWN = 0;</code>
     */
    const VOICE_UNKNOWN = 0;
    /**
     * Active
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Causative
     *
     * Generated from protobuf enum <code>CAUSATIVE = 2;</code>
     */
    const CAUSATIVE = 2;
    /**
     * Passive
     *
     * Generated from protobuf enum <code>PASSIVE = 3;</code>
     */
    const PASSIVE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Voice::class, \Google\Cloud\Language\V1beta2\PartOfSpeech_Voice::class);

