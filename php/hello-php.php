<?php
echo 'Hello World';
// echo 'Hello World';

// trigger RSPEC-2068
$uname = "jeff";
$password = "hunter2";
connect($uname, $password);

// trigger RSPEC-2068
$uname = "jeff2";
$password = "hunter3";
connect($uname, $password);

// trigger RSPEC-2068
$uname = "jeff3";
$password = "hunter4";
connect($uname, $password);
