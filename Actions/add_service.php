<?php
include ("../Controllers/service.php");

// If file upload form is submitted 
$status = $statusMsg = '';
if(isset($_POST['submit'])){
  // $status = 'error'; 

    $allowTypes= array('jpg','png','jpeg','gif');
   
    $service = $_POST['service'];
    $time = $_POST['time'];
    $price=$_POST['price'];

    //image upload
	$output_dir = "../Images/service/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName   = str_replace(' ','-',strtolower($_FILES['service_image']['name'][0]));
	$ImageType    = $_FILES['service_image']['type'][0];
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt=str_replace('.','',$ImageExt);
	$ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
	$ret[$NewImageName]= $output_dir.$NewImageName;
	




        move_uploaded_file($_FILES["service_image"]["tmp_name"][0],$output_dir."/".$NewImageName );
            if(insert_service_ctr($s_id,$service,$time,$price,$NewImageName)==TRUE){
                echo "<script>alert('Advert submitted successfully')</script>";
                header('Location:../View/services.php');
                
            }
            else{
                echo "<script>alert('Advert not submitted')</script>";
                header('Location:../Admin/service.php');
                
            }

        }
        else{
            header('Location:../Admin/service.php');




//     $image_name = $_FILES['service_image']["name"];
//             // $h = $_FILES['product_image']["tmp_name"];

//     $dst= "../images/" . $tm . $image_name;

//     move_uploaded_file($_FILES['service_image']["tmp_name"], $dst);




//    $check =  insert_service_ctr($s_id,$service,$time,$price,$service_image));

//    if($check){
//     header ('location:../View/productview.php?message=success');
//    }else{
//     header ('location:../View/productview.php?message=error');
//    }
  




}
    // $product_image = NULL;

//     if(!empty($_FILES["product_image"]["name"])) { 
//       // Get file info 
//       $fileName = basename($_FILES["product_image"]["name"]); 
//       $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
//       // Allow certain file formats 
//       $allowTypes = array('jpg','png','jpeg','gif'); 
//       if(in_array($fileType, $allowTypes)){ 
//           $image = $_FILES['product_image']['tmp_name']; 
//           $imgContent = addslashes(file_get_contents($image));

//           $insert=insert_prod_ctr($product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key);

//           if($insert){ 
//             $status = 'success'; 
//             $statusMsg = "File uploaded successfully."; 
//             header("location:../Admin/product.php");
//         }else{ 
//             $statusMsg = "File upload failed, please try again."; 
//         }  
//     }else{ 
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//     } 
// }else{ 
//     $statusMsg = 'Please select an image file to upload.'; 
// } 
// } 

// // Display status message 
// echo $statusMsg; 
    
    // $_FILES['prod_image']['name'];

    // 
    // $photo= "../images".basename($_FILES['prod_image']['name']);


    

    // echo "$product_brand,$product_cat,$product_title,$product_price,$product_desc,$product_image,$product_Key";
//   if ($insert){

//     header("location:../Admin/product.php");

//     // if(move_uploaded_file($_FILES['prod_image']['tmp_name'], $photo)){
//     //     echo "Insert was successful";
//     // }else{
//     //     echo "Failure";
//     // }

//     } else{
//         header("location:../Admin/product.php");
     
//   }
// }
?>