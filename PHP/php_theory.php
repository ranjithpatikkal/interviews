
1) Error types in php
   https://phoenixnap.com/kb/php-error-types#ftoc-heading-4
	a. Warning Error
	b. Notice Error
	c. Parse Error
	d. Fatal Error
2) enable errors
	php script : ini_set('display_errors', 1);
				 ini_set('display_startup_errors', 1);
				 error_reporting(E_ALL); (E_NOTICE, E_WARNING, E_PARSE, E_ERROR)

	php.ini : display_errors = on
	.htaccess : php_flag display_errors 1

3) include vs require
	https://www.w3schools.com/php/php_includes.asp

	It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

	The include and require statements are identical, except upon failure:

	require will produce a fatal error (E_COMPILE_ERROR) and stop the script
	include will only produce a warning (E_WARNING) and the script will continue 
4) include_once and require_once : checks  If the file was already included previously, this statement 		will not include it again.


5) Handling Files
	readfile("webdictionary.txt")
	fopen("webdictionary.txt", "r") https://www.w3schools.com/php/php_file_open.asp
	fclose()

6) Session:Session is nothing But it maintaine the User Information on Sevr Side,
	For Examples When ever Client make request to the Application that time server will be Allocated block Of memory this Memory is called Session memory. The Session is not going to be visible via the client unless you explicitly.
	Session is used for Single Client.in Web Server ISAPI_Aspne.EXE.
	
	Cookies:Cookie is nothin But Maintain Information on the Client machine .iT can be Two Types

	1.InMemory(or)temparory
	2.Parsistance :

	https://www.guru99.com/cookies-and-sessions.html

7) unlink vs unset 
   unlink : used in filemanagement to delete file.
   unset : make variable as undefined


8) Regular Expression Functions

https://www.w3schools.com/php/php_regex.asp

9) Supper global variables
https://www.w3schools.com/php/php_superglobals.asp

10) PHP echo Vs print Statements

11) constant vs define 
https://www.tutorialspoint.com/compare-define-vs-const-in-php#:~:text=The%20basic%20difference%20between%20these,defines%20them%20at%20run%20time.&text=const%20accepts%20a%20static%20scalar,define()%20takes%20any%20expression.

12) String Functions
https://www.w3schools.com/php/php_string.asp

613) Array Functions
https://www.w3schools.com/php/php_ref_array.asp

array_merge vs array_combine

14) Array Types
Indexed Arrays : The index can be assigned automatically (index always starts at 0)
Associative Arrays : Associative arrays are arrays that use named keys that you assign to them.

15) Sorting
	sort() - sort arrays in ascending order
	rsort() - sort arrays in descending order
	asort() - sort associative arrays in ascending order, according to the value
	ksort() - sort associative arrays in ascending order, according to the key
	arsort() - sort associative arrays in descending order, according to the value
	krsort() - sort associative arrays in descending order, according to the key

