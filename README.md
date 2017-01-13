This is an attempt at a blogging engine. it is inspired by the simple structure of the codeigniter PHP framework. it follows the front controller pattern

to install it on linux, copy to the server directory for example /var/www/html/florisproject and run the install.sh 

paths:
<pre>
/                       goes to overview of the last ten posts

/posts                  "

/posts/overview         "

/posts/new\_post         you can create a new blogpost here

/posts/posts/{id}       view a specific post

/admin                  goes to admin view
</pre>

wat de bestanden doen
<pre>
index.php                               front controller, routering

controllers/controller\_baseclass.php   database, login

controllers/posts.php                   view posts, individual posts, add a post

controllers/admin.php                   beginnings of admin page, login

views/\*                                basic views for the controllers        
</pre>
