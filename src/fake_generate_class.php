<?php
  class fake{
    public function generate($param){
      #switch the paramter passed from insert_class.php
      #reading a random line from each file and return the random data
      switch($param){
        case 'fname':
          $file = 'res/fname.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'lname':
          $file = 'res/lname.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'sex':
          $sex = array('M','F');
          return $sex[rand(0,1)];
        break;

        case 'username':
          $file = 'res/username.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'passwd':
          $letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w'
                          ,'x','y','z');
          $passwd = $letters[rand(0,23)].$letters[rand(0,23)].$letters[rand(0,23)].$letters[rand(0,23)].rand(1000,9999);
          return hash('sha256',md5($passwd));
        break;

        case 'age':
          return rand(14,70);
        break;

        case 'gmail':
          $file = 'res/fname.txt';
          $lines = file($file);
          $gmail = $lines[rand(0,count($lines)-1)].rand(100,999).'@gmail.com';
          return $gmail;
        break;

        case 'address':
          $file = 'res/street.txt';
          $lines = file($file);
          return rand(1000,9999).' '.$lines[rand(0,count($lines)-1)];
        break;

        case 'weight':
          return rand(100,250);
        break;

        case 'height':
          return rand(4,6)+rand(0,9)/10;
        break;

        case 'ethics':
          $file = 'res/ethics.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'city':
          $file = 'res/city.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'country':
          $file = 'res/country.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'occupation':
          $file = 'res/occupation.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'state':
          $file = 'res/state.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'phone':
          return rand(100,999).rand(100,999).rand(1000,9999);
        break;

        case 'food':
          $file = 'res/food.txt';
          $lines = file($file);
          return $lines[rand(0,count($lines)-1)];
        break;

        case 'date':
          $timestamp = mt_rand(1, time());
          $randomDate = date("Y-m-d", $timestamp);
          return $randomDate;
        break;
      }
    }
  }
?>
