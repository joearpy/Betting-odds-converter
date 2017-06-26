## Betting odds converter

This is the converter, which convert the UK, EU and USA odds from one input.

## Responsive

It can use on phone, on tablet and on desktop as well.

## Easy to use

You should add just one input to "Your odds" field, choose the "Odds Type" in the select field and the tool convert your odds to another two version.

For example: you add UK odds, after the convert you give EU and USA odds on table below.

## DB operations

This tool save the logs and your converted odds to Database. I used PDO for the DB operations.

## Install

There is db.sql on the file root, import it.

Set the PDO connection in db.class.php 10. row

And ready to use!

## PHP Classes

In the class folder:

- Converter.class.php, where happen the converting

- db.class.php, where the DB operations

- log.class.php, where the save log to Database

- saveData.class.php, where the program save the converted data

- validator.class.php, where happen the validation

## Security

You just use the converter with AJAX, if you try use without AJAX. The program will write you: "Are you hacker?"

PDO binds the parameter -> SQL injection protection

Server side validation

## Validation

- Server side validation in a PHP Class

- Client side validation with Form Validator JS tool

## Clean code

The clean code is important, I tried to follow the guidelines and the SOLID. If somebody wants change something in the source code, he should search just one place. No repetition, less responsibility in one class. 

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