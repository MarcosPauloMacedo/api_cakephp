<?php

namespace App\Controller;

class statusENUM {
    const ATIVO = 1;
    const INATIVO = 0;

    public static function findConstants($value = NULL) {
        $values = array(self::ATIVO => "Elegível", self::INATIVO => "Inelegível");
        if ($value != NULL) {
            if (is_numeric($value))
                return isset($values[$value]) ? $values[$value] : NULL;
            else
                return array_search($value, $values);
        } else {
            foreach ($values as $id => $cVal) {
                $ret[$id] = $cVal;
            }
            return $ret;
        }
    }
}

?>