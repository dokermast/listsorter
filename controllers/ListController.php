<?php


class ListController
{
    public function index($json_data){

        $unsorted_data = json_decode($json_data, true);
        $start = 'departure';
        $finish = 'arrival';
        $sorted_data = Sorter::sort($unsorted_data, $start, $finish);
        $sorted_data = Sorter::setNum($sorted_data);
        $sorted_json_data = json_encode($sorted_data);

        return $sorted_json_data;
    }
}
