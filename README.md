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
* [Botman.io](https://botman.io/) - Chatbot Framework

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

You can see in your browser and type the URL http://localhost:8000. <br /> 
This the end of instalation step

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

