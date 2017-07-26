# CodeIgniter 2 Scaffolding

[CodeIgniter](http://codeigniter.com) is one of the most powerfeul, flexible and secure PHP Frameworks. 
Since first version, it had a great feature called `Scaffolding`, which unfortunately later was [deprecated.](http://codeigniter.com/user_guide/changelog.html)

This is based on it's original Scaffolding class, and as it was recommended, this tool must be used for __development only__. Deploying site with this controller can be very harmful for your application.

# How to Use?

* [Download Archive from Github Repository](https://github.com/Landish/CodeIgniter-2-Scaffolding/archive/master.zip)
* Place `/assets/` and `/application/` into your root directory (Note: `/application/` folder must be overwritten). 
* Setup Database configuration in `/application/config/database.php` file
* Go to http://example.com/index.php/scaffolding ( or http://example.com/scaffolding, if you have [removed index.php file](http://codeigniter.com/user_guide/general/urls.html) )

# How to Deploy?

Before you publish your application, it's recommended to remove those folders and only after that upload to server. 
```
/assets/scaffolding/
/application/controllers/scaffolding.php
/application/views/scaffolding/
/application/language/english/scaffolding_lang.php
```

# Demo
* [Database Tables List](#database-tables-list)
* [No Data in Database Table](#no-data-in-database-table)
* [Add/Edit Form](#addedit-form)
* [Delete Data from Database](#delete-data-from-database)



### Database Tables List
![](https://github.com/Landish/CodeIgniter-2-Scaffolding/raw/master/assets/scaffolding/images/data/tables-list.jpg)

### No Data in Database Table
![](https://github.com/Landish/CodeIgniter-2-Scaffolding/raw/master/assets/scaffolding/images/data/no-data.jpg)

### Add/Edit Form
![](https://github.com/Landish/CodeIgniter-2-Scaffolding/raw/master/assets/scaffolding/images/data/add-form.jpg)

### Delete Data from Database
![](https://github.com/Landish/CodeIgniter-2-Scaffolding/raw/master/assets/scaffolding/images/data/delete.jpg)
