<?php
/**
 * Created by PhpStorm.
 * User: harsha
 * Date: 4/6/18
 * Time: 11:03 PM
 */

use Faker\Generator as Faker;
$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});