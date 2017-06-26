## Betting odds converter

This is the converter, which convert the UK, EU and USA odds from one input.

## Easy to use

You should add just one input to "Your odds" field, choose the "Odds Type" in the select field and the tool convert your odds to another two version.

For example: you add UK odds, after the convert you give EU and USA odds on table below.

## Clean code

The clean code is important, I tried to follow the guidelines and the SOLID

## DB operations

This tool save the logs and your converted odds to Database. I used PDO for the DB operations.

## Install

There is db.sql on the file root, import it.

Set the PDO connection in db.class.php 10. row

And ready to use!

## PHP Classes

In the class folder:

- Converter.class.php, where the converting happening

- db.class.php, where the DB operations

- log.class.php, where the save log to Database

- saveData.class.php, where the program save the converted data

- validator.class.php, where the validation happening

## Security

You just use the converter with AJAX, if you try use without AJAX. The program will write you: "Are you hacker?"

PDO for binding parameters

Server side validation

## Validation

Back-and validation in a PHP Class

## Technology

PHP, AJAX with jQuery, JavaScript, MySql with PDO, MariaDB, HTML5, CSS3, Bootstrap

## Recommended PHP version

7.1

## Reformable

- design
- https to security
- validation
- make it in MVC

## License

joearpy