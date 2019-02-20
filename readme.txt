#ReadMe
1) In php.ini, add provision to hide NOTICE & WARNING errors-
error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING

2.1) For Task1 e.g.
	I) SUCCESS CASES:
		php task1.php sum => 0
		php task1.php sum 2 2 => 4
		php task1.php sum 2,2 => 4
	II) FAILED CASE:
		php task1.php summ 2 2 => Please enter valid method.
		
2.2) Task2 e.g.
	I) SUCCESS CASES:
		php task2.php add => 0
		php task2.php add 1 => 1
		php task2.php add 1 2 3 4 => 10
		php task2.php add 1,2,3,4,5,6 => 21
		php task2.php add 1 2 3 4 5 6 7 8 9 10 11 12 13 => 91
		php task2.php add 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20 => 210
	II) FAILED CASE:
		php task2.php add2 2 2 => Please enter valid method.
		
2.3) Task3 e.g.
	I) SUCCESS CASES:
		php task3.php add 2\n3,4 => 9
		php task3.php add 2\n3 4 => 9
		php task3.php add => 0
		php task3.php add 2 => 2
		php task3.php add 1 2 3 4 => 10
		php task3.php add 1,2,3,4 => 10
		
	II) FAILED CASE:
		php task3.php add2 2 2 => Please enter valid method.
		