<!--<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        .two {
            color: red;
        }

        input[type=text], input[type=file], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type=submit]:hover {
            opacity: 0.8;
        }
    </style>

    <h2><u>Add product</u></h2> 
    <table border="" align="center" cellspacing="1" ><hr>
        <td>1</td>
    </table>
    <div class="two" align="right">
       <b> Add new varient</b>
    </div>
    <h2 align="center"><i>Select Category</i></h2>
       <form action="add_product.php" method="post" enctype="multipart/form-data">
        <div class="container">
            Add your input fields here

            <button type="submit" name="submit">Add Product</button>
        </div>
    </form>
</body>
</html>-->
<?php

include("../config/config.php");
include("header.php");

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}

$roleHtml='';
$result = $conn->query("select * from role");
if($result->num_rows>0){
   
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $roleHtml.='
        <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="blog_manage.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr>' ;
    }
       // echo $result->num_rows;
      // print_r($finalResult);
}
?>
<h2>Book</h2>
<a href="blog_manage.php">Add New Blog</a>
<table border="1">
    <thesd>
        <tr>   
        <th>S.no</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
       </tr>   
</thesd>
<tbody>
        <tr>   
        <td>1</td>
        <td>Admin</td>
        <td>This is shaina</td>
        <td><button> Edit </button>/<button>Delete</button></td>
       </tr> 
</tbody> 
<?php
include("footer.php");
?>