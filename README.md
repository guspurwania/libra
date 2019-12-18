<p align="center"><img width="400" src="https://gdurl.com/HZyZ"></p>
<h1 align="center">Lecture Interactive Bot Reminder Assistant</h1>

## About

LIBRA (Lecture Interactive Bot Reminder Assistant) - We are here as your Virtual Reminder Assistant <br />
Our mission is to help the teaching and learning process more effectively and efficiently. <br />
Your virtual assistant will remind you of your class schedule, so you can manage your time better.

## Features
* **Manage Schedule** - You can manage your schedule through a special dashboard provided by the application
* **Reminder Schedule** - Bots provided by the application will notify you when there is a class or teaching schedule
* **Broadcast** - Bots provided by the application will spread the message to all participants who join the class to attend the class

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

Things needed for LIBRA system installation

* PHP >= 7.2
* MariaDB >= 10.2
* [Composer](https://getcomposer.org/) - Depedency Management
* [Git](https://git-scm.com/downloads) - Repository Management
* [Ngrok](https://ngrok.com/) - Public Server from Local Resource
* [Postman](https://www.getpostman.com/) - API Testing

### Installing

A step by step series of examples that tell you how to get a development env running

Clone the repository to your project

```
git clone https://github.com/guspurwania/libra.git
```

Setup .env - Copy from .env.example 

```
copy .env.example .env
```

Prepare your database (MariaDB) in your local and set on your .env file

```
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=libra
DB_USERNAME=root
DB_PASSWORD=
...
```

Prepare your telegram token using [Bot Father](https://core.telegram.org/bots) and set on your .env file

```
...
TELEGRAM_TOKEN=604190517:AAFv_XQ0zYj8_yNbwg_rMnXXCt9jbf5R1PQ
...
```

Install Depedencies using Composer

```
composer install
```

Running Migration

```
php artisan migrate
```

Run application in local environment

```
php artisan serve
```

You can see in your browser and type the URL http://localhost:8000.

## Running the tests

Here is a way to test projects on a Public URL using Ngrok and integrate it with a telegram bot 

### Running the project on a Public URL

Keep running your project on local development in http://localhost:8000 <br />
After that run the command in other cmd

```
ngrok http 8000
```

### Integration with Telegram Bot

Open Postman and make a POST Request <br />
Use this link for end point URL

```
https://api.telegram.org/bot<YOUR-TELEGRAM-TOKEN-HERE>/setWebhook
```

With the BODY request

```
url => 'YOUR_URL_WEBHOOK'
```

For detail documentation follow this [link](https://botman.io/2.0/driver-telegram)

## Built With

* [Laravel 5.7](https://laravel.com/) - The PHP Web Framework
* [Botman.io](https://botman.io/) - The PHP Chatbot Framework

## Contributing

We open this project for contributing, and the process for submitting pull requests to us.

## Authors

* **Ida Bagus Gede Purwania** - *Initial work* - [Gus Purwania](https://github.com/guspurwania)
* **Muhhamad Qusyairi** 

## License

This project is licensed under the Open Source Project

