<?php


class Sorter
{
    /**
     * @param $array
     * @param string $start
     * @param string $finish
     * @return mixed
     */
    public static function sort($array, $start, $finish){

        $sizeArray = count($array);

        for ($i = 0; $i < $sizeArray; $i++) {

            for ($j = 0; $j < $i + 1; $j++) {

                $elementRight = ($sizeArray - 1) - ($i - $j);

                if ($array[$i][$finish] != $array[$elementRight][$start]) {

                    $temp                 = $array[$j];
                    $array[$j]            = $array[$elementRight];
                    $array[$elementRight] = $temp;
                    unset($buff);
                }
            }
        }

        return $array;
    }


    /**
     * @param $array
     * @return array
     * set a number to array element
     */
    public static function setNum($array){
        $num = 1;
        $out_array = [];
        foreach($array as $item){
            $item['num'] = $num;
            $out_array[] = $item;
            $num++;
        }

        return $out_array;
    }
}
