# Final Project IS-601

<h1>Steps to run Final Project</h1>
1. Clone the repository https://github.com/pritbhat010494/faq.git <br>
2. CD into faq and Run:composer install<br>
3. cp .env.example to .env<br>
4. Setup DB: https://laravel.com/docs/5.6/database<br>
5. Add Configuration and generate key<br>
6. Run: php artisan migrate<br>
7. Run: php artisan migrate:refresh --seed <br>
8. Run: phpunit [For unit tests]

<h1>Epic1</h1>
An application which sends email notification to registered user on their registered email id whenever:<br>
a. Questions are created<br>
b. Questions are edited<br>
c. Questions are deleted<br>
d. Questions are answered<br>
e. Answers are edited<br>
f. Answers are deleted<br>

<h1>User Stories</h1>
Note:Sendgrid (https://sendgrid.com/ ) is used for sending emails to users.<br>

1. Only registered users can login into the application and recieve email notifications.<br>
2. User is notified when their questions are created and answered.<br>
3. User is redirected to the application when he clicks on 'View Question'/View Answer' button in his notified email.<br>
4. User is notified when their questions and answers are edited or deleted.<br>
5. User are redirected to notification page whenever they make changes to questions and answers which tells them they are been notified on their email.

<h1>Epic2</h1>
Performed dusk testing for:<br>
a. Login <br>
b. Register <br>
c. Create, Edit & Delete Questions<br>
d. Create, Edit & Delete Answers<br>
e. Profile<br>


Note: Installation instructions and running tests commands can be found from https://laravel.com/docs/5.7/dusk#installation <br>

<h1>User Stories</h1>
Note: 10 dusk tests [including default ExampleTest], Word File for test results.<br>
1. As a tester/Developer, I want user to be notified whenever he create, edit or delete a question.<br>
2. As a tester/Developer, I want user to be notified whenever he create, edit or delete an answer for  question.<br>
3. As a tester/Developer, I want to perform dusk test for user's profile.<br>
4. As a tester/Developer, I want to perform dusk test for user login and registration.<br>

<h1>Heroku Link</h1>

https://faqfeature.herokuapp.com/


