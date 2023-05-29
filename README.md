# Module 15 Assignment (May 29, 2023)  
### Laravel Concepts

- Complete the following coding tasks independently.  
- Implement the tasks using Laravel framework and follow best practices.  
- Submit your solution within the given time frame.  


#### Task 1:

Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:

 

	name: required, string, minimum length 2  
	email: required, valid email format  
	password: required, string, minimum length 8  

 

#### Task 2:

Create a route `/home` that redirects to `/dashboard` using a 302 redirect.

 

#### Task 3:

Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.

 

#### Task 4:

Create a route group for authenticated users only. This group should include routes for `/profile` and `/settings`. Apply a middleware called `AuthMiddleware` to the route group to ensure only authenticated users can access these routes.



#### Task 5:

Create a controller called `ProductController` that handles CRUD operations for a resource called Product. Implement the following methods:

 

	index(): Display a list of all products.

	create(): Display the form to create a new product.

	store(): Store a newly created product.

	edit($id): Display the form to edit an existing product.

	update($id): Update the specified product.

	destroy($id): Delete the specified product.
 

#### Task 6:

Create a single action controller called `ContactController` that handles a contact form submission. Implement the `__invoke()` method to process the form submission and send an email to a predefined address with the submitted data.

 

#### Task 7:


Create a resource controller called `PostController` that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.



#### Task 8:

Create a Blade view called `welcome.blade.php` that includes a navigation bar and a section displaying the text "Welcome to Laravel!".


#### Submission Instruction :

-  Please submit your github repository link.  
