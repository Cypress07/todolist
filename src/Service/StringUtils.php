<?php

namespace App\Service;

class StringUtils {

public function capitilize ($string) {

return ucfirst (mb_strtolower($string));

}
}