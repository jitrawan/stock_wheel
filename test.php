<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - READ Operation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>
 
 
</head>
<body>

<?php
require_once('connectDB.php');
$num_rec_per_page=3;

if (isset($_GET["page"])) 
                { 
             $page  = $_GET["page"];   //get value of page
             
                 } 
         else { 
                  $page=1;    //if first page then set 1
              }

              $start_from = ($page-1) * $num_rec_per_page; 

              $psql = 'SELECT * FROM crud';   
              $rs_result=mysql_query($psql);   
              $total_records = mysql_num_rows($rs_result);  
              $total_pages = ceil($total_records / $num_rec_per_page); 

              echo "<a href='test.php?page=1'>".'|<'."</a> "; // Goto 1st page  
              for ($i=1; $i<=$total_pages; $i++) 
        { 
            echo "<a href='test.php?page=".$i."'>".$i."</a> "; 
        } 
echo "<a href='test.php?page=$total_pages'>".'>|'."</a> "; // Goto last page


?>

<div class="container">
	<div class="row">
	<h2>Read Operation in CRUD applicaiton</h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Full Name</th> 
				<th>E-Mail</th> 
				<th>Age</th> 
				<th>Gender</th> 
				<th>Extras</th>
			</tr> 
		</thead> 
		<tbody> 
    <?php
           
           //this query for loding data in table based on pagination
                            
                      $sql = "SELECT  * FROM crud LIMIT $start_from, $num_rec_per_page"; 
                       $table_data=  mysql_query($sql);
                      // $sl=$start_from;
                       while ($row = mysql_fetch_array($table_data)) {
                              
           
           
           ?> 

		
			<tr> 
				<th scope="row"><?php echo $row['id']; ?></th> 
				<td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td> 
				<td><?php echo $row['email_id']; ?></td> 
				<td><?php echo $row['gender']; ?></td> 
				<td><?php echo $row['age']; ?></td> 
				<td>
					<a href="update.php?id=<?php echo $r['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		</table>
    <?php

//code for display pagination 

        echo "<a href='test.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) 
        { 
            echo "<a href='test.php?page=".$i."'>".$i."</a> "; 
        } 
echo "<a href='test.php?page=$total_pages'>".'>|'."</a> "; // Goto last page

//end of pagination code

?>

	</div>
</div>
</body>
</html>