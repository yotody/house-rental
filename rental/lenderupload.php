<!DOCTYPE html>
<html>
    <body>
        <?php
            include "headlender.php";
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
        $conn->query("INSERT INTO upload(country,city,subcity,contact,rent_type,property_type,price,ward,tole,total_room,living_room,bed_room,kitchen,bathroom,square_meter,`description`,image1,image2,image3,image4,image5,upload_by) values('$country','$city','$subcity','$contact','$renttype','$hometype','$price','$ward','$tole','$totalroom','$living','$bedroom','$kitchen','$bath','$squaremeter','$description','$target1','$target2','$target3','$target4','$target5','$_SESSION[username]')") or die($conn->error);
    header("location:viewproperty.php");
}
        ?>

        <div class="upload" id="upload">
            <hr>
            <h2><center>Upload Property</center></h2>
            <hr>
            <div class="row">
                <form action="lenderupload.php" method="POST" enctype="multipart/form-data">
                     <div class="col-1">
                                <h3>Country</h3>
                                <select name="country">
                                    <option>Select Country</option>
                                    <option value="Ethiopia">Ethiopia</option>   
                                </select>
                                <h3>City</h3>
                                <select name="city">
                                    <option>Select City</option>
                                    <option value="Addis Ababa">Addis Ababa</option>   
                                </select>
                                <h3>Sub City</h3>
                                <select name="subcity">
                                    <option>Select Sub City</option>
                                    <option value="Bole">Bole</option>
                                    <option value="Arada">Arada</option>
                                    <option value="Ledeta">Ledeta</option>   
                                    <option value="Kolfe">Kolfe</option>
                                </select>
                                <h3>Contact Number</h3>
                                <input type="text" name="contact" placeholder="Enter Contact number">
                                <h3>Rent Type</h3>
                                <select name="type">
                                    <option>Rent Type</option>
                                    <option value="Full House Rent">Full House Rent</option>
                                    <option value="Room Rent">Room Rent</option> 
                                </select>
                                <h3>Property Type</h3>
                                <select name="hometype">
                                    <option value="">Property Type</option>
                                    <option value="Vila">vila</option>
                                    <option value="Penthouse">penthouse</option>
                                    <option value="Apartement">Apartment</option>
                                    <option value="Condominium">Condominium</option>
                                </select>
                                <h3>Estimation price in birr</h3>
                                <input type="number" name="price" placeholder="Enter Price in birr">
                                <h3>Ward Number</h3>
                                <input type="number" name="ward" placeholder="Enter ward Number">
                                <h3>Tole</h3>
                                <input type="text" name="tole" placeholder="Enter tole">
                                <h3>Total Number of Room</h3>
                                <input type="number" name="room" placeholder="Number of room">
                                <h3>Number of Living Room</h3>
                                <input type="number" name="living" placeholder="Number of living room">
                                <h3>Number of Bedroom</h3>
                                <input type="number" name="bed" placeholder="Number of bedroom">
                </div>
                <div class="col-2">
                                <h3>Number of Kitchen</h3>
                                <input type="number" name="kitchen" placeholder="Number of kitchen">
                                <h3>Number of Bathroom</h3>
                                <input type="number" name="bath" placeholder="Number of bathroom">
                                <h3>Square Meter</h3>
                                <input type="number" name="square" placeholder="Enter Square Meter" required>
                                <h3>Description</h3>
                                <textarea type="comment" name="description" placeholder="Enter Additional information about Your property like School around, supermarket e.t.c..." style="width: 100%; height:100px;"></textarea>
                                <h3>Add Real Sample pictures</h3>
                                <h4>image1</h4>
                                <input type="file" name="image1">
                                <h4>image2</h4>
                                <input type="file" name="image2">
                                <h4>image3</h4>
                                <input type="file" name="image3">
                                <h4>image4</h4>
                                <input type="file" name="image4">
                                <h4>image5</h4>
                                <input type="file" name="image5">
                                <input type="submit" name="upload" value="Upload" style="margin-top: 20px ; cursor:pointer;" class="finalupload">
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>