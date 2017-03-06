# yellowpage_directory_ci
A online directory service with e commerce created using PHP Codeigniter.

This is a dynamic web application. It has following features-

        1.	Service categories.
        2.	Sub category under category.
        3.	View services using sub category.
        4.	Search services . 
        5.	View popular services.
        6.	View popular companies.
        7.	View all companies.
        8.	User login.
        9.	User signup.
        10.	User logout.
        11.	Comments under service for signed up users.
        12.	Mail to the service provider after receiving comments.
        13.	Start services for signed up users.
        14.	Start company for signed up users.
        15.	View services for service providers.
        16.	Edit services for service providers.
        17.	Company profile.
        18.	Edit company profile.
        19.	Add products under company.
        20.	Delete products.
        21.	Adding products to cart for shopping.
        22.	Admin login.
        23.	Admin logout.
        24.	Add and manage(Edit/Delete/Publish/Unpublish) category feature for super admin.
        25.	Add and manage(Edit/Delete/Publish/Unpublish) sub category feature for super admin.
        26.	Add and manage(Edit/Delete/Publish/Unpublish) division for super admin.
        27.	Add and manage(Edit/Delete/Publish/Unpublish) service for super admin.
        28.	Manage companies(Publish/Unpublish) for super admin.
        29.	Manage comments for super admin.


*Created in PHP 5.6.3*
Installation
===============
Create a folder in htdocs named "workspace". Then in workspace create another folder named "Final_year_project" and put above files. Or you can edit the .htaccess file to change directory.

Database Import
===============
Create a database named "db_yellowpage' with utf8_general_ci collation. Then import the .sql fie.

Admin Login:
===============
localhost/Final_year_project/admin_login
Email: rafayet.monon@gmail.com
Password: 12345

Mail Function
===============
Mail system in this project uses Google's SMTP server. To get a fully funcioning mail following things need to be changed-

1. Edit "sender's email address" and "sender's password" and put your email id and email password. You will get this in "public function mail()" in "super_admin" controller.

2. Find [mail function] in xampp/php/php.ini and change the following lines-
        1. SMTP=smtp.gmail.com
        2. smtp_port=465
        3. sendmail_from = my-gmail-id@gmail.com //sender's email address
        4. sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

3. Find sendmail.ini in xampp/sendmail and change the following lines-
   1. smtp_server=smtp.gmail.com
   ii) smtp_port=587
   iii) error_logfile=error.log
   iv) debug_logfile=debug.log
   v) auth_username=my-gmail-id@gmail.com  //sender's email address
   vi) auth_password=my-gmail-password      //sender's email password
   vii) force_sender=my-gmail-id@gmail.com   //sender's email address
   
4. If you are using SMTP server with your email for the first time you might get a mail in your Gmail to approve less secure apps.

DONE!! Now the project should work just fine. \m/


