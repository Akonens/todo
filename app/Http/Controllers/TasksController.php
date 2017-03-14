<?php
namespace App\Http\Controllers;

class TasksController {

  public function index() {
      $numbers = [1,3,5,6];

      $num = request()->get('number');

      $numbers[] = (int) $num;

      $sum = array_sum($numbers);

      $numbers[] = $sum;

      $first = $numbers[2];

      $second = $numbers[3];

      $rez = $first * $second;

    

      return $numbers;
  }
}
