<?php


namespace IsaEken\TurkiyeRegex;


/**
 * Class TurkiyeRegex
 *
 * @package IsaEken\TurkiyeRegex
 * @method static static CellPhone(string|array $validate): bool
 * @method static static CellPhoneNumber(string|array $validate): bool
 * @method static static Phone(string|array $validate): bool
 * @method static static PhoneNumber(string|array $validate): bool
 * @method static static CarPlate(string|array $validate): bool
 * @method static static Plate(string|array $validate): bool
 * @method static static CreditCard(string|array $validate): bool
 * @method static static CreditCardNumber(string|array $validate): bool
 * @method static static Date(string|array $validate): bool
 * @method static static BirthDate(string|array $validate): bool
 * @method static static Identity(string|array $validate): bool
 * @method static static IdentityNumber(string|array $validate): bool
 * @method static static TaxNumber(string|array $validate): bool
 * @method static static Tax(string|array $validate): bool
 */
class TurkiyeRegex
{
    /**
     * @return string
     */
    private static function validatorsNamespace(): string
    {
        return "\\IsaEken\\TurkiyeRegex\\Validators\\";
    }

    /**
     * @return string[][]
     */
    private static function validators(): array
    {
        return [
            'CellPhone' => [
                'CellPhoneNumber',
            ],

            'Phone' => [
                'PhoneNumber',
            ],

            'CarPlate' => [
                'Plate',
            ],

            'CreditCard' => [
                'CreditCardNumber',
            ],

            'Date' => [
                'BirthDate',
            ],

            'Identity' => [
                'IdentityNumber',
            ],

            'TaxNumber' => [
                'Tax',
            ],
        ];
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        foreach (static::validators() as $validator => $aliases) {
            if ($name == $validator) {
                return (static::validatorsNamespace() . $validator)::validate($arguments);
            }

            foreach ($aliases as $alias) {
                if ($name == $alias) {
                    return (static::validatorsNamespace() . $validator)::validate($arguments);
                }
            }
        }

        return static::$name($arguments);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return static::__callStatic($name, $arguments);
    }
}
