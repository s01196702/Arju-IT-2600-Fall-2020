<?php
$dsn ='mysql:host=localhost;dbname =create_db_ap.sql';
$uname = "root";


$conn = new PDO("mysql:host=localhost;dbname =create_db_ap.sql","root","");

try{
$conn = new PDO("mysql:host=localhost;dbname =create_db_ap.sql","root","");

echo "Database connected";
$conn->setAttribute(PDO::ATTR_ERRMODE,  
                PDO::ERRMODE_EXCEPTION); 

}catch(PDOException $e){
echo "Error Connecting Database";
}


$start_date = date('Y-m-d', strtotime($_POST['start_date']));
$end_date = date('Y-m-d', strtotime($_POST['end_date']));
$name = $_POST['name'];
$sort = $_POST['sort'];
if ($end_date=="1970-01-01") {
	$end_date = date('Y-m-d');
	echo $end_date;
}


if ($start_date == "1970-01-01" && $name == "") {
	if ($sort == "sortbydate") {
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) ORDER BY invoice_date ASC";

	}
	else if ($sort == "sortbyname") {
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) ORDER BY vendor_name ASC";

	}
	else
	{
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) ";

	}
	
	
}
else if ($start_date != "1970-01-01" && $end_date != "1970-01-01" && $name == "") {
      if ($sort == "sortbydate") {
	$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' ORDER BY invoice_date ASC";}
	

	else if ($sort == "sortbyname") {
     $query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' ORDER BY vendor_name ASC";}
	
	else{
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' ";
	}
}
	

	else if($start_date != "1970-01-01" && $end_date != "1970-01-01" && $name != ""){






if ($sort == "sortbydate") {
	   $query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' AND vendor_name like '%" . $name . "%' ORDER BY invoice_date ASC";}
	

	else if ($sort == "sortbyname") {
       $query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' AND vendor_name like '%" . $name . "%'  ORDER BY vendor_name ASC";}
	
	else{
		   $query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where invoice_date BETWEEN '".$start_date."' AND '".$end_date."' AND vendor_name like '%" . $name . "%' "  ;
	}







  

}

   else if($start_date == "1970-01-01" && $name != "") {
	
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where 
		vendor_name like '%" . $name . "%' "  ;
		
	}
	else if ($start_date != "1970-01-01" && $name != "") {
		$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) where 
		vendor_name like '%" . $name . "%' AND invoice_date BETWEEN '".$start_date."' AND '".$end_date."'  ";
	}
	else{
$query = "select vendor_name,invoice_number,invoice_total,invoice_date from create_db_ap.sql.invoices join create_db_ap.sql.vendors using (vendor_id) ";

	}


$statement = $conn->prepare($query);

$statement->execute();
$invoices = $statement->fetchAll();
$statement ->closeCursor();


	?>
	<!DOCTYPE html>
	<html>
	<body>
		<table border="1px solid red;" style="padding: 8px;width: 70%;" align="center">
		
			<tr>
				<th>Vendor Name</th>
				<th>Invoice Number</th>
				<th>Invoice Date</th>
				<th>Invoice Total</th>
			</tr>
		
<?php
		foreach ($invoices as $invoice) {  ?>
		
			
			<tr >
				<td>
					<?php echo $invoice['vendor_name'] ?>
				</td>
				<td>
					<?php echo $invoice['invoice_number']; ?>
				</td>
				<td>
					<?php echo $invoice['invoice_date']; ?>
				</td>
				<td>
					<?php echo $invoice['invoice_total']; ?>
				</td>
			</tr>
			<?php

}
 ?>
		</table>
	</body>
	</html>


