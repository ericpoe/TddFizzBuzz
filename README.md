# TddFizzBuzz
This is an attempt at the [FizzBuzz kata](http://en.wikipedia.org/wiki/Fizz_buzz) in PHP using [TDD](http://en.wikipedia.org/wiki/Test-driven_development) practices.

Included in this kata is an extension to [FizzBuzz](src/FizzBuzz.php) that I have called [FizzBuzzBang](src/FizzBuzzBang.php). In FizzBuzz, each integer that is evenly divisible by 3 is called "Fizz;" each integer that is evenly divisibly by 5 is "Buzz;" and each integer that is evenly divisibile by both is "FizzBuzz." In "FizzBuzzBang," we add the further requirement that each integer that is evenly divisible by 7 is "Bang." The twist is that "Bang" is added for each factor of 7. This means that 7 is "Bang," 14 is "Bang," 49 is "BangBang," and 147 is "FizzBangBang."

I left some room for improvement in the implementation details in the tested classes. I did this to show that if the tests are complete, the implementation details can change without affecting the tests.

Further reading and pracice for Katas:
 * John Cleary's [12 TDDs of Christmas](http://www.wiredtothemoon.com/2012/12/12-tdds-of-christmas/)
 * [Cyber Dojo](http://cyber-dojo.org/)
 * [Code Wars](http://www.codewars.com/)
