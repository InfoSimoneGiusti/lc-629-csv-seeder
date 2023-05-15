<?php

namespace App\Functions;

class Helpers {

    public static function getCsvContent(string $path) {

        //https://www.php.net/manual/en/function.fgetcsv.php

        $data = [];

        $file = fopen($path, 'r');

        if ($file === false) {
            exit('File specificato non valido');
        }

        while (($row = fgetcsv($file)) !== FALSE) {
            $data[] = $row;
        }

        return $data;

    }

}
