<?php

/**
 * Examples of generating a fake 
 *
 * @copyright 2013 Timothy Wilson
 * @author Timothy Wilson <tim.wilson@aceviral.com>
 */

require('Date.php');

?><html>
  <head>
    <title>Fake Date Examples</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    
    <style type="text/css">
      html, body {
        background-color: #fff;
        
        font-size: 13px;
        font-family: Arial;
      }
      
      .title {
        font-size: 20px;
        font-weight: bold;
      }
      
      .inner {
        margin-top: 5px;
        margin-left: 10px;
      }
      
      .codebox {
        display: inline-block;
        
        width: 600px;
        
        background-color: #DDD;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Fake_Date (extends DateTime)</h1>
    <div class="inner">
      <div class="title">DateTime getRandomBirthday(int $age <i>(optional)</i>, DateTime $currentDate <i>(optional)</i>)</div>
      <br />
      <div class="inner">
        <i>Used for generating a birthday for users in testing user systems. Returns a DateTime object.</i><br />
        <br />
        <b>Generate a Random Birthday for someone alive today</b><br />
        <br />
        <code class="codebox">
          // Generate the date<br />
          $date = Fake_Date::getRandomBirthday();<br />
          <br />
          // Display the date<br />
          echo 'Birthday: ' . date('r', $date->getTimestamp());
        </code>
        <br />
        <br />
        
        Birthday: <?=date('r', Fake_Date::getRandomBirthday()->getTimestamp())?><br />
        
        <br />
        <br />
        
        <b>Generate a Random Birthday for someone who is 40</b><br />
        <br />
        <code class="codebox">
          // Generate the date<br />
          $date = Fake_Date::getRandomBirthday(40);<br />
          <br />
          // Display the date<br />
          echo 'Age 40: ' . date('r', $date->getTimestamp());
        </code>
        <br />
        <br />
        
        Age 40: <?=date('r', Fake_Date::getRandomBirthday(40)->getTimestamp())?><br />
        
        <br />
        <br />
        
        <b>Generate a Random Birthday for someone aged 21 on the 24 Jul 1989</b><br />
        <br />
        <code class="codebox">
          // Generate the date<br />
          $ageAt = new DateTime('1989-7-24');<br />
          $date = Fake_Date::getRandomBirthday(21, $ageAt);<br />
          <br />
          // Display the date<br />
          echo 'Was aged 21 on the 24 Jul 1989: ' . date('r', $date->getTimestamp());
        </code>
        <br />
        <br />
        
        Was aged 21 on the 24 Jul 1989: <?=date('r', Fake_Date::getRandomBirthday(21, (new DateTime('1989-7-24')))->getTimestamp())?><br />
        
        <br />
        <br />
      </div>
      
      <div class="title">DateTime getRandomDateTime(Fake_Date $date1, Fake_Date $date1)</div>
      <br />
      <div class="inner">
        <i>Used for generating a random date between 2 boundaries.</i><br />
        <br />
        <b>Generate a random date between 2000 and 2010</b><br />
        <br />
        <code class="codebox">
          // Generate the date<br />
          $start = new Fake_Date('2000-1-1');<br />
          $end = new Fake_Date('2010-1-1');<br />
          <br />
          $date = Fake_Date::getRandomDateTime($start, $end);<br />
          <br />
          // Print<br />
          echo 'Random Date between 2000 and 2010: ' . date('r', $date->getTimestamp());<br />
        </code>
        <br />
        <br />
        
        <?php
          // Generate the date
          $start = new Fake_Date('2000-1-1');
          $end = new Fake_Date('2010-1-1');
          
          $date = Fake_Date::getRandomDateTime($start, $end);
          
          // Print
          echo 'Random Date between 2000 and 2010: ' . date('r', $date->getTimestamp());
        ?>
        
        <br />
        <br />
      </div>
      
      <div class="title">DateTime getRandomRegisterDate(Fake_Date $start)</div>
      <br />
      <div class="inner">
        <i>Used for generating a random date for register times</i><br />
        <br />
        <b>Generate a random date for a user, system went live in march 2011</b><br />
        <br />
        <code class="codebox">
          // Generate the date<br />
          $start = new Fake_Date('2011-3-1');<br />
          <br />
          $date = Fake_Date::getRandomRegisterDate($start);<br />
          <br />
          // Print<br />
          echo 'Register date: ' . date('r', $date->getTimestamp());<br />
        </code>
        <br />
        <br />
        
        <?php
          // Generate the date
          $start = new Fake_Date('2011-3-1');
          
          $date = Fake_Date::getRandomRegisterDate($start);
          
          // Print
          echo 'Register date: ' . date('r', $date->getTimestamp());
        ?>
        
        <br />
        <br />
      </div>
    </div>
  </body>
</html>