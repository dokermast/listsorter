<?php

include_once ('classes/Sorter.php');
include_once ('controllers/ListController.php');

$test_data = include_once ('testdata.php');

$list_sorter = new ListController();

$sorted_data_json = $list_sorter->index($test_data);

echo ($sorted_data_json);
