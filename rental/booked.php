<!DOCTYPE html>
<html>
    <head>
        <title>LenderPage</title>
    </head>
    <body>
        <?php
         include "headlender.php";
        ?>
        <div class="viewproperty">
            <hr>
                <h2><center>Booked Property</center></h2>
            <hr>
            <input type="search" id="messages" onkeyup="search_name()" placeholder="Search by Date Of Booked">
            <div style="overflow-x: auto; width:100%;">
                <table border="1" style="width: 100%;">
                        <tr class="header">
                            <th>id</th>
                            <th>Booked By </th>
                            <th>Booker Address</th>
                            <th>Property Tole</th>
                            <th>Property Ward number</th>
                            <th>Date of Booked</th>
                        </tr>
                </table>
             </div>
        <script type="application/javascript">
            function search_name(){
            let input, filter, table, td, tr, textvalue; 

            input = document.getElementById("messages");
            filter = input.value.toUpperCase();
            table = document.getElementsByClassName("mytable");
            tr = document.getElementsByTagName("tr");

            for(i=0; i < tr.length ; i++){
                td=tr[i].getElementsByTagName("td")[5];
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