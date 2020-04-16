# FOOTBALL

FOOTBALL is API for calculating rank and score match

## Feature

1. RecordGame -> parameter is clubhomename,clubawayname,score (string with semicolon)
2. AllLeagueStandings -> no parameter and return clubname and current points
3. ClubStandings -> parameter is clubname and return name of club and current ranking/standing

## Table of Contents

-   [Installation](#installation)
-   [Screenshots](#screenshots)
-   [Built With](#built-with)
-   [Author](#author)

### Installation

First, clone this repository into your system.

```
git clone https://github.com/ahmadkhairul/football.git
```

Rename .env.example file to .env inside your project root and fill the database information.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Open the console and cd your project root directory, install football API project using [Composer](https://getcomposer.org/download/)

```
composer install
```

Run key, migration, seeder (if you want) using php artisan command

```
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
Run php artisan serve
```

## Screenshots

## Author

**Ahmad Khairul Anwar** - [Ahmad Khairul](https://github.com/ahmadkhairul)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
