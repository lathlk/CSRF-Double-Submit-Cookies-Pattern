# CSRF-Double-Submit-Cookies-Pattern
Voting application - Developed using php to prevent Cross Site Request Forgery based on Double Submit Cookies Pattern

Steps to Run the application
1) Add the project directory to a php server
2) And access HOST/directory_name

Test Flow
1) Login using(hard Coded for your convinience) following details:
	username: username
	password: password
2) Select the vote
3) Click on 'submit'
	If ( user is authenticated(csrf token in the body and cookie are matched) ) {
		display the success message and vote is saved
	}
	else {
		display the error message
	}