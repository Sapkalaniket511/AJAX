<html>
    <head>
        <script>
            function sendServer(str){
                if(str=="")
                {
                    document.getElementById("country").innerHTML="";
                    return;
                }

                var xhttp=new XMLHttpRequest();
                xhttp.onreadystatechange=function(){
                   if(this.readyState==4 && this.status==200){
                        document.getElementById("country").innerHTML=this.responseText;
                    }
                }
                 xhttp.open("GET","ajax.php?q="+str,true);
                 xhttp.send();
            }
        </script>
    </head>
    <body>
            <?php
            
                $city=array(
                 "japan" => "tokyo",
                 "Mexico" => "mexico city",
                "usa" => "new york city",
                "india" => "mumbai",
                "korea" => "seoul",
                "china" => "shanghai",
                "nigeria" => "lagos",
                "argentina" => "buenos aires",
                "egypt" => "cairo",
                "uk" => "london"
                 );
                if(!isset($_POST['submit'])){
            ?>
 
            <form method="post" action="">
            <p>select city:</p>
            <select name="city" onChange="sendServer(this.value)">
 
            <?php 
                foreach($city as $sel){
                echo "<option value=".$sel.">$sel</option>\n";
                }
            }
            ?>
 
            </select> 
            
            </form>
 
            <P>country:<span id="country"></span></P>
 


    </body>
</html>