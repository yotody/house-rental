<!DOCTYPE html>
<html>
    <head>
        <title>LenderPage</title>
    </head>
    <body>
        <?php
         include "headlender.php";
        ?>
        <div class="update">
            <hr>
                <h2><center>Update Property</center></h2>
            <hr>
            <input type="search" id="messages" onkeyup="search_name()" placeholder="search by id">
            <div style="overflow-x: auto;">
                <?php $result= $conn->query("SELECT *FROM upload")?>
                <table border="1">
                        <tr class="header">
                            <th>id</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Sub City</th>
                            <th>Contact</th>
                            <th>Rent Type</th>
                            <th>Property Type</th>
                            <th>Price</th>
                            <th>Ward Number</th>
                            <th>Tole</th>
                            <th>Number of room</th>
                            <th>Number of Living room</th>
                            <th>Number of bedroom</th>
                            <th>Number of kitchen</th>
                            <th>Number of bathroom</th>
                            <th>Squ. Meter</th>
                            <th>Descripton</th>
                            <th>images</th>
                            <th style="padding-left:50px;padding-right:50px;">Edit or Delete</th>
                        </tr>
                        <?php while($row=$result->fetch_assoc()){?>
                            <?php if($row['upload_by']==$_SESSION['username']){?>
                                <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['country'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['subcity'];?></td>
                                <td><?php echo $row['contact'];?></td>
                                <td><?php echo $row['rent_type'];?></td>
                                <td><?php echo $row['property_type'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['ward'];?></td>
                                <td><?php echo $row['tole'];?></td>
                                <td><?php echo $row['total_room'];?></td>
                                <td><?php echo $row['living_room'];?></td>
                                <td><?php echo $row['bed_room'];?></td>
                                <td><?php echo $row['kitchen'];?></td>
                                <td><?php echo $row['bathroom'];?></td>
                                <td><?php echo $row['square_meter'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><img src="<?php echo $row['image2'];?>" alt="no image"></td>
                                <td style="text-align: center;"><br><br><a href="#" class="Edit" style="padding:10% 20% 10% 20%;">Edit</a><br><br><br><br><a href="#" class="delete" style="padding:10% 20% 10% 20%;">Delete</a><br><br><br></td>
                                </tr>

                           <?php }?>

                        <?php } ?>
                </table>
            </div>
        </div>
        <script type="application/javascript">
            function search_name(){
            let input, filter, table, td, tr, textvalue; 

            input = document.getElementById("messages");
            filter = input.value.toUpperCase();
            table = document.getElementsByClassName("mytable");
            tr = document.getElementsByTagName("tr");

            for(i=0; i < tr.length ; i++){
                td=tr[i].getElementsByTagName("td")[0];
                if(td){
                    textvalue = td.textContent;
                    if(textvalue.toUpperCase().includes(filter)){
                        tr[i].style.display="";

                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
            }
            }
        </script>
    </body>
</html>