# HTML Table Plugin
Just another HTML Table Plugin

In this Plugin has custom endpoint, if the user visit to this custom endpoint. The Plugin will call to an HTTP Request to REST API endpoint. The API is available at https://jsonplaceholder.typicode.com/ and the endpoint to call is /users. Plugin receives an JSON Response and parse the JSON response. It will display HTML Table with user’s information and display in table with ID, Name, Username. User click on Detail and see the further detail. Ajax will send and receive data asynchronously and call to a function to get an information of user. 


Information 
1.	Download the zip from the repository.
2.	Install and activate the plugin through the ‘plugin’ screen in WordPress.
3.	Add the shortcode to create HTML Table.

Custom endpoint for the users
http://localhost/wordpress/wp-json/wl/v1/users

Get data using AJAX for user detail in Wp
1.	Pass Nonce & AJAX URL Via Localize Script
2.	Make Ajax call with Nonce and URL in JavaScript
3.	Hook PHP Ajax Function into WordPress Ajax Hooks
4.	Use JavaScript to Handle Ajax Response.

Shortcode to add plugin in post/page
1. create new post or edit existed post
2. add [ext_data]
3. update or save changes of post.
