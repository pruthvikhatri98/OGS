 <?php
                        include 'db_config.php';
                        if(isset($_POST['submit'])){
                        	$prod_id=$_POST['id'];
                        	$prod_name=$_POST['prod_name'];
                        	$fabric=$_POST['fabric'];
                        	$design=$_POST['design'];
                        	$category=$_POST['category'];
                        	$price=$_POST['price'];
                        	$quantity=$_POST['quantity'];


                        	$sql = "UPDATE product set prod_id = '{$prod_id}', category_id = '{$category}', prod_name = '{$prod_name}', fabric = '{$fabric}', design_no = '{$design}', quantity = '{$quantity}', price = '{$price}' WHERE prod_id = '{$prod_id}'";
                        	if(mysqli_query($Server_Connection,$sql)){
                        		header("location:all_product.php");
                        		?>
                        		<script type="text/javascript">
                        			alert("Record update Successfully");
                        		</script>
                        		<?php
                        	}else{
                        		header("location:edit_product.php");
                        		?>
                        		<script type="text/javascript">
                        			alert("Record are not updated");
                        		</script>
                        		<?php
                        	}

                        }
                        /*$result = mysqli_query($Server_Connection,"SELECT `category_id`, `prod_name`, `prod_name`, `fabric`, `design_no`, `quantity`, `price` FROM product WHERE prod_id='".$_GET['id']."'");
                        $row= mysqli_fetch_array($result);*/
                        

                        
                        	
                      ?>