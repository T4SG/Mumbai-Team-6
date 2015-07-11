<?php include "conn.php" ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico">
    <title>School List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/dashboard-new.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

<body>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"> Sort by <span class="sr-only">(current)</span></a></li>

            <br>
            <li><a href="cli_res_retrieve.php">Climatic Resilience</a></li>
            <br>
            <li><a href="cost_retrieve.php">Cost</a></li>
            <br>
            <li><a href="will_retrieve.php">Willingness</a></li>
            </ul>
    </div><!--  -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">The School List</h1>


            <table class="table table-striped table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>School name</th>
                  <th>Willingness</th>
                  <!--th>Header</th>
                  <th>Header</th>
                  <th>Header</th-->
                </tr>
              </thead>
              <tbody>
              
<?php
$query="select * from schools order by will desc";
$result=mysql_query($query);
//$rows=mysql_fetch_row($result);
//var_dump($rows);
//var_dump($rows);
while($row = mysql_fetch_row($result))
{ 

?>
<tr>
<td><?php echo $row[0]; ?></td><td><?php echo $row[1]; ?></td><td><?php echo $row[3]; ?></td>
</tr>

<?php
}
?>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>





