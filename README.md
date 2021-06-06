# PHP için Türkiye Regex Kütüphanesi

Türkiye formatlarına uygun Regex kütüphanesi.

````php
use IsaEken\TurkiyeRegex\TurkiyeRegex;

TurkiyeRegex::CellPhone("05231231212");
TurkiyeRegex::Phone("01231231212");
TurkiyeRegex::TaxNumber("1234567890");
````

## Kurulum

Paketi composer kullanarak kurabilirsiniz.

````shell
composer require isaeken/php-turkiye-regex
````

## Kullanım

### ``interface IsaEken\TurkiyeRegex\Interfaces\Validator\Interface``

#### ``validate(string|array $validate): bool``

Girilen string veya string[] değerlerini kullandığınız sınıfta doğrulamasını yapar.

### Fonksiyonlar

````php
use IsaEken\TurkiyeRegex\TurkiyeRegex;

TurkiyeRegex::CellPhone(["05231231212", "05231231212"]); // true
TurkiyeRegex::Phone("01231231212"); // true
TurkiyeRegex::Identity("1234567890"); // false
TurkiyeRegex::TaxNumber("1234567890"); // true
TurkiyeRegex::CreditCard("1111222233334444"); // true
TurkiyeRegex::CarPlate("34A2344"); // true
TurkiyeRegex::Date("10.04.2002"); // true

// alias
TurkiyeRegex::CellPhoneNumber("05231231212"); // true
TurkiyeRegex::PhoneNumber("01231231212"); // true
TurkiyeRegex::IdentityNumber("1234567890"); // false
TurkiyeRegex::Tax("1234567890"); // true
TurkiyeRegex::CreditCardNumber("1111222233334444"); // true
TurkiyeRegex::Plate("34A2344"); // true
TurkiyeRegex::BirthDate("10.04.2002"); // true
````


## Testing

````shell
composer test
````

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
