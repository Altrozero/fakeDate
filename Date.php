<?php

/**
 * Used for generating a fake date and time based on conditions
 *
 * @copyright 2013 Timothy Wilson
 * @author Timothy Wilson <tim.wilson@aceviral.com>
 */

class Fake_Date extends DateTime
{
  /**
   * Generate a birthday
   *
   * @param int $age If not set will generate a random age
   * @param DateTime $current The current date
   *
   * @return Fake_Date
   */
  public static function getRandomBirthday($age = null, DateTime $current = null)
  {
    if ($age === null || !is_numeric($age)) {
      $age = rand(0, 110);
    }
    
    $date = new Fake_Date();
    
    if (!is_null($current)) {
      $date->setTimestamp($current->getTimestamp());
    }

    $diff = new DateInterval("P" . $age . "YT" . rand(0, 31449600) . "S");
    
    $date->sub($diff);

    return $date;
  }
  
  /**
   * Generate a random date and time within boundaries
   * 
   * @param Fake_Date $date1
   * @param Fake_Date $date2
   * 
   * @return Fake_Date
   */
  public static function getRandomDateTime(Fake_Date $date1,
    Fake_Date $date2)
  {
    $date = clone $date1;
    
    $seconds = $date1->getTimestamp() - $date2->getTimestamp();
    
    if ($seconds < 0) {
      $diff = new DateInterval('PT' . rand(0, -$seconds) . 'S');
      $date->add($diff);
    } else {
      $diff = new DateInterval('PT' . rand(0, $seconds) . 'S');
      $date->sub($diff);
    }
    
    return $date;
  }
  
  /**
   * Generate a register date for a user on a service, between the current time
   * and the starting time
   * 
   * @param Fake_Date $start
   * 
   * @return Fake_Date
   */
  public static function getRandomRegisterDate(Fake_Date $start)
  {
    $date = new Fake_Date();
    
    return self::getRandomDateTime($start, $date);
  }
}