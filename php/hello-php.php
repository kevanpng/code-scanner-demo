<?php
echo 'Hello World';
// echo 'Hello World';

// trigger RSPEC-2068
$uname = "jeff";
$password = "hunter2";
connect($uname, $password);

// trigger RSPEC-2068
$uname = "jeff";
$password = "hunter2";
connect($uname, $password);


























// trigger RSPEC-2068
$uname = "jeff";
$password = "hunter2";
connect($uname, $password);

//shift line. params should be different, resulting in 1 new and 1 resolved finding. shifted even more
