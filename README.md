Instruction to install:
1. download the zip file of the system
2. place in htdocs of XAMPP
3. Fix the database
	a.Create user "dlsu" with the password "delasalle"
	b.For error free-ness grant unli access for the dlsu user like root
	c.Create connection with any name with dlsu as the username. leave default schema blank for error free-ness
	d.Open the connection.
	e.Open the Create Database code located in the installation materials.
	f.Copy Paste the code to mySQL and run it (should have no errors)
	g. Open the Database populator and copy-paste and run the it in mysql(should also have no problem)
4.edit your php.ini file(find at XAMPP control panel or xampp>php)
	a. open and copy-paste phpini configuration.txt to the php.ini file
5.edit your sendmail.ini file located in xampp>sendmail
	a. open and copy-paste sendEmailini configuration.txt to the sendEmail.ini file
6.run in browser