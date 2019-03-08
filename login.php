Last login: Fri Mar  8 00:47:08 on ttys001
vpn-10-192:~ tejveersingh$ ssh -l ts355 afs1.njit.edu
Password: 
Last login: Fri Mar  8 00:47:23 2019 from 10.192.224.15
Starting /afs/cad/u/t/s/ts355/.bash_profile ... standard AFS bash profile

========================
==> AFS disk quota in your home directory [ /afs/cad/u/t/s/ts355 ] :	
Volume Name                    Quota       Used %Used   Partition
user.ts355                   1000000      35682    4%         83%  

		Quota = 1.00   Gbytes    

		Used  = 0.03   Gbytes    

		  Note: "Partition" refers to the percentage use of the disk
			 that the AFS volume is on.
	
		
	To free up disk space, including Firefox & Chrome cache, enter : 
			
			clean.home
			(/usr/ucs/bin/clean.home)

Calculating Firefox cache usage ...
Put a file named "NoCalcCache" in your home directory to suppress.
du: cannot access ‘./BACKUP-AFS.ACCOUNT/BACKUP-AFS.ACCOUNT’: No such device
 Your current Firefox cache uses : 70 Mbytes      

========================

On host afsconnect1.njit.edu :
	 12:49:59 up 18 days, 16:44, 17 users,  load average: 0.14, 0.12, 0.15

=== === === Your Kerberos ticket and AFS token status === === ===
Kerberos :  Renew until 04/07/2019 13:49:57, Flags: FRI
AFS      :  User's (AFS ID 94421) tokens for afs@cad.njit.edu [Expires Mar  8 22:49]


=== === === Start Python Information === === ===
1. The default python is Anaconda Python 3

2. To instead use Anaconda Python 2 :

	echo 'module load python2' > ~/.modules

	Then log out / log in 
=== === === End Python Information === === ===

Loading [ python3.6 java10 matlab/2018b ] modules ...
Currently Loaded Modulefiles:
  1) python3.6       2) java10/10.0.2   3) matlab/2018b


To see your aliases, enter "alias"

afsconnect1-41 ~ >: cd public_html
afsconnect1-42 public_html >: ls
ads/        instructor_answers.php   login_backend.php  login_valid.js
cs490/      instructor_maketest.php  login.css          student_review.php
db.php      instructor_view.php      login_front.js     student_test.php
download/   iview_backend.php        login_middle.php   student_view.php
index.html  iview_front.js           login.php          UPLOADS/
afsconnect1-43 public_html >: nano instructor_view.php
afsconnect1-44 public_html >: nano login.php

  GNU nano 2.3.1                                                File: login.php                                                                                                      

<!DOCTYPE html>
<html>
<head>

<!–– Links with login_front.js ––>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="login_front.js" type="text/JavaScript"></script>


<!–– CSS style is inserted here––>

<style>

h1 {
  font-family: Arial, Helvetica, sans-serif;
  color:White;
  font-size: 40px;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  color:White;
  font-size: 8px;
  background-color: #711313;
}

form {
  position:center;
        border: 5px solid #f1f1f1;
        padding: 12px 10px;
        background-color: rgb(228, 78, 78);
        width: 60%;

}

input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: red;
  color: white;
  padding: 20px 30px;
  margin: 8px 0;
  border: none;

^G Get Help                   ^O WriteOut                   ^R Read File                  ^Y Prev Page                  ^K Cut Text                   ^C Cur Pos
^X Exit                       ^J Justify                    ^W Where Is                   ^V Next Page                  ^U UnCut Text                 ^T To Spell
