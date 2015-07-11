<?php include "conn.php" ?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico">
    <title>School List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/dashboard-new.css" rel="stylesheet">
    <link href="css/x.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

<body>
<div class="row navbar_header">
        <div class="col-lg-12">
            <h1 style="color:white"><b>&nbsp;&nbsp;&nbsp;Happy Hearts Foundation</b></h1>
        </div>
</div><!-- header -->
<div class="container-fl
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"> Sort by <span class="sr-only">(current)</span></a></li>
            <li><a href="cli_res_retrieve.php">Climatic Resilience</a></li>
            <li><a href="cost_retrieve.php">Cost</a></li>
            <li><a href="will_retrieve.php">Willingness</a></li>
            <li><a href="avl_retrieve.php">Available Resources</a></li>
            <li><a href="sus_infra_retrieve.php">Sustainable Infrastructure</a></li>
            <li><a href="ben_retrieve.php">Beneficiaries</a></li>
            <li><a href="com_retrieve.php">Community involvement</a></li>           
            <li><a href="princi_retrieve.php">Principal involvement</a></li>
          </ul>
    </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 margin-left="30%" class="page-header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The School List</h1>
          
            <table class="table table-striped table-responsive">
              <thead>
                <tr>
                <th></th>                 
                </tr>
              </thead>
              <tbody>
<?php
$query="select * from schools order by comm_inv desc";
$result=mysql_query($query);
//$rows=mysql_fetch_row($result);
//var_dump($rows);
//var_dump($rows);
while($row = mysql_fetch_row($result))
{ 

?>
              <tr>
               <td>
                <div class="row">
                   <div class="col-lg-12">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-8 darken">
                         	<div class="figure"><img class="featured-image" src="<?php echo "$row[20]"; ?>"></div>
                           			<div class="featured-image-info" style="text-align:center;">
                           			<span >
                            			 <h2><?php echo $row[1]; ?></h2>
                            			 <h3>Impact Score : 57</h3>
                            			 <h3><i class="fa fa-map-marker fa-lg"></i>  Near Goregaon Station</h3>
                          			 </span>
                           			</div>
                        	</div>
                     </div>
                   </div>
                 </div>
               </td>
             </tr>
<?php
}
?>
             </tbody>
             </table>


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