PHP Versions

PHP 5:
------
>> PHP5 was focused on 3 major areas
	>> Object-Oriented programming, XML, and MySQL
>> PHP5 presents a completely reworked object model, which now offers:
	>> Destructors
	>> Constructors
	>> Interfaces
	>> Class type hints
	>> Abstract classes
	>> Static properties and methods
	>> Final properties and methods
	>> A whole suite of magical methods

Features of PHP 5:
------------------
>> PHP5 comes with a completely rewritten MySQL from older versions
>> PHP 5 comes with a completely new and enhanced MySQL extension. Dubbed MySQLi for the MySQL Improved extension
	>> Prepared statements
	>> SSL connections
	>> Multi-query functions
	>> Bound input and output parameters
>> PHP 5 gives a different model of error checking
	>> Alternatively, you can set apart programming logic from error handling and put them in adjoining blocks of code
>> PHP 5 now has a usable SOAP extension
	>> SOAP has become one of the essential elements for web services
>> Iterator is a new feature added with PHP5. This iterator assists us to use ‘for each’ loop with the help of several data structures like database results, directory listing, and XML documents


PHP 7:
------
>> Offers a 100 percent improvement in terms of performance, speed
>> Reduced demands on servers, making it a more cost-effective and environment-friendly
>> 	new syntax

Features of PHP 7:
------------------
>> Return type is a popular feature in most other programming languages that have finally been included in PHP
	function foo(): array {
		return [];
	}
>> spaceship operator
	<=> 0 ==> Equal, -1 ==> Less than, 1 ==. Greater than
>> null coalescing operator
	>> The Null coalescing operator returns its first operand if it exists and is not NULL; otherwise it returns its second operand
	>> $username = $_GET['username'] ?? 'not passed';
>> The old-fashioned error handling doesn’t exist anymore and has been replaced with object-oriented exceptions
	

Diff Php 5 & Php 7:
-------------------
Engine Version
PHP 5: Zend II
PHP 7: PHP-NG or Next generation (performance with optimized memory usage)

Return type of function
PHP 5: does not allow
PHP 7: enables programmers to declare the return type of the functions as per the expected return value

Handling of fatal errors
PHP 5: quite challenging to handle fatal errors
PHP 7: This script function is used for return type execution. The programmers need to define the return type post the parenthesis of an argument

64-bit support
PHP 5: does not support 64-bit integers as well as large files
PHP 7: has 64-bit support, native 64-bit integer as well as large files and in this regard run diverse applications on the 64-bit system architectures without any flaws

Coalescing Operator
PHP 5: does not have. The programmer has to write explicit code to return the null value if the value is not available
PHP 7: (??) The operator is used to indicate whether something exists or not.

Spaceship Operator
PHP 5: does not have.  A lot of operators have to be used for comparisons
PHP 7: which has a notation <=>  Function can automatically return to null when the value is not accessible

The concept of anonymous class
PHP 5: no concept of anonymous classes
PHP 7: Anonymous class is used to expedite the execution time

Declaration for namespaces
PHP 5: there is an Individual declaration for common namespaces
PHP 7: Group Use Declaration according to which, the developers will be able to include classes from the same namespace and make the code more simple and compact

Examples of advanced features
PHP 5: improvement to XML extension, Superior Soap Implementation, etc.
PHP 7:  include Return type declaration, CSPRNG functions,  etc

Asynchronous programming support
PHP 5: it was difficult to simultaneously perform several activities
PHP 7: his enables seamless execution of a variety of tasks. One can access the database, networking, set timers, and also perform several I/O operations at the same time and without any obstruction