[![Build Status](https://travis-ci.org/ericpoe/TddFizzBuzz.svg)](https://travis-ci.org/ericpoe/TddFizzBuzz)
# TddFizzBuzz
This is an attempt at the [FizzBuzz kata](http://en.wikipedia.org/wiki/Fizz_buzz) in PHP using [TDD](http://en.wikipedia.org/wiki/Test-driven_development) practices.

Included in this kata is an extension to [FizzBuzz](src/FizzBuzz.php) that I have called [FizzBuzzBang](src/FizzBuzzBang.php). In FizzBuzz, each integer that is evenly divisible by 3 is called "Fizz;" each integer that is evenly divisibly by 5 is "Buzz;" and each integer that is evenly divisibile by both is "FizzBuzz." In "FizzBuzzBang," we add the further requirement that each integer that is evenly divisible by 7 is "Bang." The twist is that "Bang" is added for each factor of 7. This means that 7 is "Bang," 14 is "Bang," 49 is "BangBang," and 147 is "FizzBangBang."

As an added bonus, I am giving the implementor of the FizzBuzz and FizzBuzzBang classes the opportunity to determine which numbers become Fizz, Buzz, and Bang.

Further reading and practice for Katas:
 * John Cleary's [12 TDDs of Christmas](http://www.wiredtothemoon.com/2012/12/12-tdds-of-christmas/)
 * [Cyber Dojo](http://cyber-dojo.org/)
 * [Code Wars](http://www.codewars.com/)

Further reading for TDD and PHPUnit:
 * [PHPUnit Site](https://phpunit.de)
 * [The Grumpy Programmer's Guide To Building Testable PHP Applications](https://leanpub.com/grumpy-phpunit)
 * [The Grumpy Programmer's PHPUnit Cookbook](https://leanpub.com/grumpy-phpunit)
