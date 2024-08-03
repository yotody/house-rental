<!DOCTYPE html>
<html>
    <head>
        <title>LenderPage</title>
    </head>
    <body>
        <?php
         include "headlender.php";
        ?>
        <!-- Message Section-->
        <div class="message" id="message">
            <hr>
            <h2><center>View Message</center></h2>
            <hr>
            <input type="search" id="messages" onkeyup="search_name()" placeholder="search by Date ( Either year, month or date of message send or Full Format like day/month/year )">
            <table border="1" style="border-style: dotted ;" class="mytable">
                <tr>
                    <th class="no">#No</td>
                    <th>Property id</td>
                    <th>From</td>
                    <th>Date</td>
                    <th>Message</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td class="property_id">12</td>
                    <td class="from">Aimable<br><a href="mailto:yabaimable00@gmail.com" style="text-decoration:none; color:lightseagreen;">yabaimable00@gmail.com</a></td>
                    <td class="date">30/08/2014</td>
                    <td><p style="text-align:justify;">I want to rent your house and i will pay 1000$ and if you agree contact with my email address,I want to rent your house and i will pay 1000$ and if you agree contact with my email address,I want to rent your house and i will pay 1000$ and if you agree contact with my email address</p></td>
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
                td=tr[i].getElementsByTagName("td")[3];
                if(td){
                    textvalue = td.textContent;
                    if(textvalue.toUpperCase().includes(filter)){
                        tr[i].style.display="";
                        td.style.color="red";
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