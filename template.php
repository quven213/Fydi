<?php

  ##############################################################################
  #                                                                            #
  #  template.php mainly include three functions called from insert_class.php  #
  #  connect() makes database connection                                       #
  #  load() takes all table fields and type of fake database                   #
  #                                                                            #
  #  templates.php also takes to variables                                     #
  #  table -> table in database for insert                                     #
  #  number -> number of data want to insert into the table                    #
  #                                                                            #
  ##############################################################################


  require 'src/insert_class.php';
  # include class of the library

  $obj = new insert_records();
  # create an object for the class

  $con = $obj->connect(/*'host','username','password','database'*/);
  # $con hold the state of database connection

  $obj->table = #'table';
  # pass the name of the table

  $obj->number = #100;
  # number of data want to insert into the table
  # suggest maximum rows insert one time < 590

  $obj->load(/*$con,'phone_number:phone','address:address'*/);
  # first parameter must be the state of database connection like #con
  # the rest parameters are the table fields and the fake data type
  # phone:phone   phone_number -> matches table field   : -> delimiter  phone -> fix type of fake data made in library

  ########################## Types of fake data supported ##########################
  #                                                                                #
  # :fname (first name)                                                            #
  # :lname (last name)                                                             #
  # :username                                                                      #
  # :sex (M | F)                                                                   #
  # :passwd (password mix four character and four digits hashed by sha256 and md5) #
  # :age (range between 14 - 70)                                                   #
  # :gmail (Pattern in fname + 3 digits + @gmail.com)                              #
  # :address (4 digits house number + street name)                                 #
  # :weight (range between 100 - 250)                                              #
  # :height (range 4.0 - 6.9)                                                      #
  # :ethics (world-wide ethic groups)                                              #
  # :city (all USA cities)                                                         #
  # :country                                                                       #
  # :occupation                                                                    #
  # :state (all USA states abbriviate EX:MD)                                       #
  # :phone (10 digits phone number)                                                #
  # :food (famous American food)                                                   #
  # :date (random date in Y-m-d format)                                            #
  #                                                                                #
  ##################################################################################

  $obj->start();
  # mannually start generating and inseting the fake data
?>
