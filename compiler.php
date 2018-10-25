<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdn.ckeditor.com/4.7.3/standard-all/ckeditor.js"></script>

<script>
            $(document).ready(function(){
            $('#menu1').change(function(){
                //Selected value
                var inputValue = $(this).val();
                switch(inputValue){
                  case 'c':{
                    $('#doc1').html('#include <stdio.h>\nint main()\n{\nprintf("Hello World");\nreturn 0;\n}');
break;
                  }
                  case 'cpp':{
$('#doc1').html('#include <stdio.h>\nint main()\n{\nprintf("Hello World");\nreturn 0;\n}');
break;
                  }
                   case 'cpp11':{
$('#doc1').html('#include <stdio.h>\nint main()\n{\nprintf("Hello World");\nreturn 0;\n}');
break;
                  }
                  case 'java':{

$('#doc1').html('public class Main\n{\npublic static void main(String[] args) {\nSystem.out.println("Hello World");\n}\n}');
break;
                  
                  }
                     case 'python3.2':{

$('#doc1').html('print ("Hello World")');
break;           
                  }
                  case 'python2.7':{

$('#doc1').html('\<?php\necho "HelloWorld!";');
break;           
                  }
                   case 'ruby':{

$('#doc1').html('=begin\n=end\nputs "Hello World"');
break;           
                  }
                    case 'perl':{

$('#doc1').html('#!/usr/bin/perl\nprint "Hello World"');
break;           
                  }
                }

                //Ajax for calling php function
                
            });
        });
        </script>

</head>
<body>
<div class="main">




<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" name="f2" method="POST">
<label for="language">Choose Language</label>

<select class="form-control" name="language" id="menu1">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<option value="python2.7">PHP</option>
<option value="python3.2">Python3</option>
<option value="ruby">Ruby</option>
	
<option value="perl">Perl</option>

</select><br><br>
<p></p>
<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50" id="doc1"> </textarea><br><br>




<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>
<input type="submitcode" class="btn btn-success" value="Upload Code"><br><br><br>


</form>


</div>
</div>


</div>
</div>
<br><br><br>




</body>
</html>


