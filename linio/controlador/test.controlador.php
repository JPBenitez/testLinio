<?php


class testLinio {

    function rango_de_tres() {
        $arreglo_3 = array();
        for ($i = 0; $i <= 101; $i += 3) {
             array_push($arreglo_3,$i);
        }
        
        return $arreglo_3;
    }
    
    
    function rango_de_cinco($comienzo=0, $fin=101, $numero = 5) {
        $arreglo_5 = array();
        for ($i = $comienzo; $i <= $fin; $i += $numero) {
            array_push($arreglo_5,$i);
        }
        
        return $arreglo_5;
    }
    
    
    function rango_3_5(){
        $arreglo_1 = $this->rango_de_tres();
        $arreglo_2 = $this->rango_de_cinco();
        $arreglo_normal = $this->all_numeros();
        $result_array = array_intersect($arreglo_1, $arreglo_2);
        
        foreach ($result_array as $valor) {
                $arreglo_normal[array_search($valor,$arreglo_normal)] = "Linianos <br>";
        }
        
        
        foreach ($arreglo_1 as $valor) {
                $arreglo_normal[array_search($valor,$arreglo_normal)] = "Linio <br>";
        }
        
                
        
        foreach ($arreglo_2 as $valor) {
                $arreglo_normal[array_search($valor,$arreglo_normal)] = "IT <br>";
        }
        
        unset($arreglo_normal[0]);
        
        return $arreglo_normal;
    }
    
    
    
    function all_numeros(){
        $arreglo_normal = array();
        for ($i = 0; $i < 101; $i++) {
            array_push($arreglo_normal,$i." <br>");
        }
        
        return $arreglo_normal;
    }
    
    function reemplazar(){
        
    }

}


