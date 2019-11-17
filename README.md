# testy

##Instruction for get the  project:
 
1. In terminal call <b> git clone "project URL" </b>

2. <b> composer install </b>

3.  <b>npm install </b> 
and after
<b> npm run dev </b>

4. Create database with  your name:
EX:
<b> mysql -> create database "database_name"; </b>

5. Create .env file from env.example :
EX: <br>
<b>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1  <br>
DB_PORT=3306 <br>
DB_DATABASE=database_name  <br>
DB_USERNAME=user <br>
DB_PASSWORD=secret  <br>
</b>


When deploying Passport to your production 

servers for the first time, you will likely need to run the passport:keys command. This command generates the encryption keys Passport needs in order to generate access token. The generated keys are not typically kept in source control:

<b> php artisan passport:keys  </b>

At server home page 
Create new user, create Oath token and get Access-token. 
