#ReadMe
1) In php.ini, add provision to hide NOTICE & WARNING errors-
error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING

2.1) Task1
	I) TEST CASES:
		php task1.php sum OUTPUTS 0
		php task1.php sum 2 2 OUTPUTS 4
		php task1.php sum 2,2 OUTPUTS 4

		php task1.php summ 2 2 OUTPUTS Please enter valid method.
		
		
2.2) Task2
	I) TEST CASES:
		php task2.php add OUTPUTS 0
		php task2.php add 1 OUTPUTS 1
		php task2.php add 1 2 3 4 OUTPUTS 10
		php task2.php add 1,2,3,4,5,6 OUTPUTS 21
		php task2.php add 1 2 3 4 5 6 7 8 9 10 11 12 13 OUTPUTS 91
		php task2.php add 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20 OUTPUTS 210

		php task2.php add2 2 2 OUTPUTS Please enter valid method.

		
2.3) Task3
	I) TEST CASES:
		php task3.php add 2\n3,4 OUTPUTS 9
		php task3.php add 2\n3 4 OUTPUTS 9
		php task3.php add OUTPUTS 0
		php task3.php add 2 OUTPUTS 2
		php task3.php add 1 2 3 4 OUTPUTS 10
		php task3.php add 1,2,3,4 OUTPUTS 10
		
		php task3.php add2 2 2 OUTPUTS Please enter valid method.
	
	
2.4) Task4
	NOTE:: 1. semicolon (;) is considered as end of any command in command line programming.
	I) TEST CASES
		php task4.php add OUTPUTS 0
		php task4.php add 12,12 OUTPUTS 24
		php task4.php add 12 12 13 OUTPUTS 37
		php task4.php add 12\\12\\13\\14 OUTPUTS51
		
		If we want to use semicolon(;) as delimiter then we can used it as below
		php task4.php add 1\;9\;10 OUTPUTS 20
		php task4.php add '7;68;4;9' OUTPUTS 88
		
		php task4.php add4 1\;9\;10	OUTPUTS Please enter valid methhod.
		
	
2.5) Task5
	I) TEST CASES:
		php task5.php add OUTPUTS 0
		php task5.php add 10 OUTPUTS 10
		php task5.php add 10 20 20 OUTPUTS 50
		php task5.php add \\,\\,2,7,3 OUTPUTS 12
		php task5.php add \\ \\ 2 7 3 OUTPUTS 12
		
		php task5.php add \\ \\ 2 7 -3 OUTPUTS ERROR: Negative numbers not allowed.
		php task5.php add \\,\\,2,3,-3 OUTPUTS ERROR: Negative numbers not allowed.
		php task5.php addd \\,1,2 OUTPUTS Please enter valid method	
		

2.6) Task6		
		
		
2.7) Task7
	I) TEST CASES:
		php task7.php add 10 1001 20 20 OUTPUTS 50
		php task7.php add 10,1001,20,20 OUTPUTS 50
		php task7.php add OUTPUTS 0
		php task7.php add 1 2 OUTPUTS 3
		
		php task7.php add7 2 2 OUTPUTS Please enter valid method.
		
2.8) Task8
	I) TEST CASES:
		php task8.php multiply 1 OUTPUTS 1
		php task8.php multiply 2 3 OUTPUTS 6
		php task8.php multiply 2 3 4 5 OUTPUTS 120
		php task8.php multiply 1,2,3,4,5,6,7 OUTPUTS 5040
		
		php task8.php multiply 1,2,3,4,5,6,7,-2 OUTPUTS ERROR: Negative numbers not allowed.
		php task8.php multiply -3 2 3 4 5 OUTPUTS ERROR: Negative numbers not allowed.
		php task8.php multiplyy 2 3 5 OUTPUTS ERROR: Please enter valid method.