<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/errors/recommendation_error.proto

namespace Google\Ads\GoogleAds\V9\Errors\RecommendationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible errors from applying a recommendation.
 *
 * Protobuf type <code>google.ads.googleads.v9.errors.RecommendationErrorEnum.RecommendationError</code>
 */
class RecommendationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The specified budget amount is too low e.g. lower than minimum currency
     * unit or lower than ad group minimum cost-per-click.
     *
     * Generated from protobuf enum <code>BUDGET_AMOUNT_TOO_SMALL = 2;</code>
     */
    const BUDGET_AMOUNT_TOO_SMALL = 2;
    /**
     * The specified budget amount is too large.
     *
     * Generated from protobuf enum <code>BUDGET_AMOUNT_TOO_LARGE = 3;</code>
     */
    const BUDGET_AMOUNT_TOO_LARGE = 3;
    /**
     * The specified budget amount is not a valid amount. e.g. not a multiple
     * of minimum currency unit.
     *
     * Generated from protobuf enum <code>INVALID_BUDGET_AMOUNT = 4;</code>
     */
    const INVALID_BUDGET_AMOUNT = 4;
    /**
     * The specified keyword or ad violates ad policy.
     *
     * Generated from protobuf enum <code>POLICY_ERROR = 5;</code>
     */
    const POLICY_ERROR = 5;
    /**
     * The specified bid amount is not valid. e.g. too many fractional digits,
     * or negative amount.
     *
     * Generated from protobuf enum <code>INVALID_BID_AMOUNT = 6;</code>
     */
    const INVALID_BID_AMOUNT = 6;
    /**
     * The number of keywords in ad group have reached the maximum allowed.
     *
     * Generated from protobuf enum <code>ADGROUP_KEYWORD_LIMIT = 7;</code>
     */
    const ADGROUP_KEYWORD_LIMIT = 7;
    /**
     * The recommendation requested to apply has already been applied.
     *
     * Generated from protobuf enum <code>RECOMMENDATION_ALREADY_APPLIED = 8;</code>
     */
    const RECOMMENDATION_ALREADY_APPLIED = 8;
    /**
     * The recommendation requested to apply has been invalidated.
     *
     * Generated from protobuf enum <code>RECOMMENDATION_INVALIDATED = 9;</code>
     */
    const RECOMMENDATION_INVALIDATED = 9;
    /**
     * The number of operations in a single request exceeds the maximum allowed.
     *
     * Generated from protobuf enum <code>TOO_MANY_OPERATIONS = 10;</code>
     */
    const TOO_MANY_OPERATIONS = 10;
    /**
     * There are no operations in the request.
     *
     * Generated from protobuf enum <code>NO_OPERATIONS = 11;</code>
     */
    const NO_OPERATIONS = 11;
    /**
     * Operations with multiple recommendation types are not supported when
     * partial failure mode is not enabled.
     *
     * Generated from protobuf enum <code>DIFFERENT_TYPES_NOT_SUPPORTED = 12;</code>
     */
    const DIFFERENT_TYPES_NOT_SUPPORTED = 12;
    /**
     * Request contains multiple operations with the same resource_name.
     *
     * Generated from protobuf enum <code>DUPLICATE_RESOURCE_NAME = 13;</code>
     */
    const DUPLICATE_RESOURCE_NAME = 13;
    /**
     * The recommendation requested to dismiss has already been dismissed.
     *
     * Generated from protobuf enum <code>RECOMMENDATION_ALREADY_DISMISSED = 14;</code>
     */
    const RECOMMENDATION_ALREADY_DISMISSED = 14;
    /**
     * The recommendation apply request was malformed and invalid.
     *
     * Generated from protobuf enum <code>INVALID_APPLY_REQUEST = 15;</code>
     */
    const INVALID_APPLY_REQUEST = 15;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BUDGET_AMOUNT_TOO_SMALL => 'BUDGET_AMOUNT_TOO_SMALL',
        self::BUDGET_AMOUNT_TOO_LARGE => 'BUDGET_AMOUNT_TOO_LARGE',
        self::INVALID_BUDGET_AMOUNT => 'INVALID_BUDGET_AMOUNT',
        self::POLICY_ERROR => 'POLICY_ERROR',
        self::INVALID_BID_AMOUNT => 'INVALID_BID_AMOUNT',
        self::ADGROUP_KEYWORD_LIMIT => 'ADGROUP_KEYWORD_LIMIT',
        self::RECOMMENDATION_ALREADY_APPLIED => 'RECOMMENDATION_ALREADY_APPLIED',
        self::RECOMMENDATION_INVALIDATED => 'RECOMMENDATION_INVALIDATED',
        self::TOO_MANY_OPERATIONS => 'TOO_MANY_OPERATIONS',
        self::NO_OPERATIONS => 'NO_OPERATIONS',
        self::DIFFERENT_TYPES_NOT_SUPPORTED => 'DIFFERENT_TYPES_NOT_SUPPORTED',
        self::DUPLICATE_RESOURCE_NAME => 'DUPLICATE_RESOURCE_NAME',
        self::RECOMMENDATION_ALREADY_DISMISSED => 'RECOMMENDATION_ALREADY_DISMISSED',
        self::INVALID_APPLY_REQUEST => 'INVALID_APPLY_REQUEST',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationError::class, \Google\Ads\GoogleAds\V9\Errors\RecommendationErrorEnum_RecommendationError::class);

