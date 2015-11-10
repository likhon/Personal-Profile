<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility {

    public function fileLocation($file_folder_name) {
        $i = 0;
        while (!file_exists($file_folder_name) && $i++ < 10) {
            if ($i == 10 && !file_exists($file_folder_name)) {
                $file_folder_name = "";
            } else {
                $file_folder_name = "../$file_folder_name";
            }
        }
        return $file_folder_name;
    }
}
