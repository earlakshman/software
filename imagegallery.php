
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- bootstrap connect start -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- bootstrap connect end -->
    
    <style>
        body{
            background-color: gray;
        }
       *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .row{
            background-color: white;
            width:90%;
            margin: 5px auto;
            border: 2px solid blue;
           display:table;
        }
               
        .column {
            background-color: white;
            float: left;
            width: 20%;
            transition: transform .2s;
            padding: 8px 8px;
        }
        .column:hover{
            box-shadow: 6px 6px 6px black;
            transform: scale(1.03); 
            border-radius: 5px;
        }
        img{
            width:100%;
        }
        #myModal {
            transition: 0.3s;
        }
        @media screen and (max-width: 900px) {
            .column {
                width: 25%;
                display: block;
            }
        }

        @media screen and (max-width: 700px) {
            .column {
                width: 50%;
                display: block;
            }
        }
        @media screen and (max-width: 500px) {
            .column {
                width: 100%;
                display: block;
            }
        }
        
        
       
        
       
        
    </style>
</head>

<body>

    <h2>Responsive "Meet The Team" Section</h2>
    <p>Resize the browser window to see the effect.</p>
    <br>
    <?php
    //$directory = "./image/";
    $filecount = count(glob("./image2/" . "*"));
    echo "There were $filecount files"; 
    ?>
   <div class="row">
        <?php for($x=1;$x<=$filecount;$x++){?>
            <div class="column">
       
                <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
                     
             
                    <img onclick="myFun(this.src)" src="image2/sample (<?php echo $x?>).jpg" alt="Jane" style="width:100%" >
                
                </div>
            
            
        </div>
        
        <?php }?>    
    </div>
    
 <!-- The Modal -->
 <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="" alt="" id="modelImg">
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    function myFun(src) {
        document.getElementById('modelImg').src = (src);
    }
</script>
</html>