<?php
/**
 * PaymentMethodReusability
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.87.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * PaymentMethodReusability Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentMethodReusability
{
    /**
     * Possible values of this enum
     */
    
    public const MULTIPLE_USE = 'MULTIPLE_USE';
    
    public const ONE_TIME_USE = 'ONE_TIME_USE';
    

    private $value;

    public function __construct($value = null) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentMethodReusability: %s', $value));
        }
        $this->value = $value;
    }

    public function __toString() {
        return (string)$this->value;
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MULTIPLE_USE,
            self::ONE_TIME_USE
        ];
    }
}


