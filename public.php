<!doctype html>
<html>
<head>
  <title>Form Builder</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="vendor/css/vendor.css" />
  <link rel="stylesheet" href="dist/formbuilder.css" />
  <style>
  * {
    box-sizing: border-box;
  }

  body {
    background-color: #444;
    font-family: sans-serif;
  }

  .fb-main {
    background-color: #fff;
    border-radius: 5px;
    min-height: 600px;
  }

  input[type=text] {
    height: 26px;
    margin-bottom: 3px;
  }

  select {
    margin-bottom: 5px;
    font-size: 40px;
  }
  </style>
</head>
<body>
  <div class='fb-main'></div>
  <script src="vendor/js/vendor.js"></script>
  <script src="dist/publicFormbuilder.js"></script>

  <?php
    $myfileName = "newForm.json";
    $myfile = fopen($myfileName, "r") or die("Unable to open file!");
    $contents = fread($myfile, filesize($myfileName));
    $strlength = strlen($contents) - 2;
    $contents = substr ($contents, 10);
    echo "<script>\$(function(){
      fb = new Formbuilder({
        selector: '.fb-main',
        bootstrapData:";
    echo $contents;
    echo ");});</script>";
    fclose($myfile);
  ?>


<style> #print {padding: 12px 18px;} </style>
<center><button id="print" type="submit" name="formSubmit" value="Submit">"Submit"</button></center>

  <script src="jquery-2.1.3.min.js"></script>
  <script type="text/javascript">
  console.log('YAY HACKGT #techteam4lyfe');
  $("#print").click(function(){
    vals = $(".obtainVal");
    var url = "writetofile.php?";
    vals.each(function(index)
    {
      url += index + "=" + $( this ).val() + "&";
      console.log( index + ": " + $( this ).val() );
    });
    //window.location.href = url;
    // console.log(vals);
    // if( typeof someVar === 'string' ) {
    //   console.log("array");
    // }
    // var values = [];
    // for (var i in vals) {
    //   console.log("hi");
    //   values.push(i.val());
    // }
    // console.log(values);
    //window.location.href = "writetofile.php?content=" + values; //&...
  })
  </script>

</body>
</html>