# Online-Result-Checker
A result software application for any university system.

# The instruction on how to  set the app up on your localhost.
### 1.Pull the repo on your specified folder with "Git Pull Origin master".(Using Git bash)
### 2.Go to your browser and type "http://localhost/phpmyadmin/" (XAMPP must be installed).
### 3.Create a Database called ORC.
### 4.Click On ORC database to open it.
### 5.Locate and click on import.
### 6.On the choose file option,browse and locate the pulled repository folder.
### 7.Locate and open db_tables folder and select orctables.sql.
### 8.Scroll down and click on GO option at the phpmyadmin.
### 9.Wait for the importation to  complete.
### 10.Go to your repository folder and locate Private/db_credentials.php
### 11.Un-comment the codes under:.
 ## //defining my db credentials for local testing 
### You are now good to go.
### 12.After Working Locally and you want to push your code back to the Online General Repo,make sure you comment back the local db credentials and Un-comment the codes under:
 ## //defining my db online testing. (VERY VERY NECESSARY).
 
### ALWAYS REMEMBER TO PULL BEFORE YOU PUSH SO AS TO AVOID CONFLICTS.
