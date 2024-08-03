<?php 
    $conn= new mysqli("localhost","root","","rent") or die ("NO SERVER");

    if(isset($_POST["upload"])){
        $country=$_POST['country'];
        $city=$_POST['city'];
        $subcity=$_POST['subcity'];
        $contact=$_POST['contact'];
        $renttype=$_POST['type'];
        $hometype=$_POST['hometype'];
        $price=$_POST['price'];
        $ward=$_POST['ward'];
        $tole=$_POST['tole'];
        $totalroom=$_POST['room'];
        $living=$_POST['living'];
        $bedroom=$_POST['bed'];
        $kitchen=$_POST['kitchen'];
        $bath=$_POST['bath'];
        $squaremeter=$_POST['square'];
        $description=$_POST['description'];
        $loc = 'images/';

        $image1= $_FILES['image1']['name'];
        $temp1 = $_FILES['image1']['tmp_name'];
        $target1 = $loc.basename($image1);

        $image2= $_FILES['image2']['name'];
        $temp2 = $_FILES['image2']['tmp_name'];
        $target2 = $loc.basename($image2);

        $image3= $_FILES['image3']['name'];
        $temp3 = $_FILES['image3']['tmp_name'];
        $target3 = $loc.basename($image3);

        $image4= $_FILES['image4']['name'];
        $temp4 = $_FILES['image4']['tmp_name'];
        $target4 = $loc.basename($image4);

        $image5= $_FILES['image5']['name'];
        $temp5 = $_FILES['image5']['tmp_name'];
        $target5 = $loc.basename($image5);
        
        if(!empty($image1)){
            if(move_uploaded_file($temp1,$target1)){
                 echo "upload well";
            }
            else{
                echo "not uploaded";
            }

        }
         
        if(!empty($image2)){
            if(move_uploaded_file($temp2,$target2)){
                 echo "upload well";
            }
            else{
                echo "not uploaded";
            }

        }
         
        if(!empty($image3)){
            if(move_uploaded_file($temp3,$target3)){
                 echo "upload well";
            }
            else{
                echo "not uploaded";
            }

        }
         
        if(!empty($image4)){
            if(move_uploaded_file($temp4,$target4)){
                 echo "upload well";
            }
            else{
                echo "not uploaded";
            }

        }
         
        if(!empty($image5)){
            if(move_uploaded_file($temp5,$target5)){
                 echo "upload well";
            }
            else{
                echo "not uploaded";
            }

        }
        $conn->query("INSERT INTO upload(country,city,subcity,contact,rent_type,property_type,price,ward,tole,total_room,living_room,bed_room,kitchen,bathroom,square_meter,`description`,image1,image2,image3,image4,image5,upload_by) values('$country','$city','$subcity','$contact','$renttype','$hometype','$price','$ward','$tole','$totalroom','$living','$bedroom','$kitchen','$bath','$squaremeter','$description','$image1','$image2','$image3','$image4','$image5','')") or die($conn->error);
    header("location:viewproperty.php");
}

?>