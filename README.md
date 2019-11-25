## a) Run the database migration.
Open command/shell prompt from the project root folder and then type and run the following commands

php artisan migrate

## b) Run the unit test alone.
From the same command prompt run the following command:

./vendor/bin/phpunit tests/Unit/CalculatorTest.php

## b) Run the integration test alone.
From the same command prompt run the following command:

./vendor/bin/phpunit tests/Integration/CalcTest.php

## b) Run both tests together.
From the same command prompt run the following command:

./vendor/bin/phpunit