<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\ExtensionRangeOptions;

use UnexpectedValueException;

/**
 * The verification state of the extension range.
 *
 * Protobuf type <code>google.protobuf.ExtensionRangeOptions.VerificationState</code>
 */
class VerificationState
{
    /**
     * All the extensions of the range must be declared.
     *
     * Generated from protobuf enum <code>DECLARATION = 0;</code>
     */
    const DECLARATION = 0;
    /**
     * Generated from protobuf enum <code>UNVERIFIED = 1;</code>
     */
    const UNVERIFIED = 1;

    private static $valueToName = [
        self::DECLARATION => 'DECLARATION',
        self::UNVERIFIED => 'UNVERIFIED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

