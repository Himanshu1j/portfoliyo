<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;

        }
        body{
            background-color: rgb(25,25,25);
        }
    .container{
      color: green;
      text-align: center;
      font-size: 40px;
      margin-top: 10%;
      /* background-color: yellowgreen; */
      /* background-size: contain; */
    }
    h1{
        padding: 100px;
        font-family: cursive;
    }
    .container img{
        width: 200px;
        text-align: center;
    }
    @media  screen and (max-width: 768px) {
        h1{
            font-size: 20px;
        }
        
    }
    </style>
</head>
<body>
   <div class="container">
    <img src="<?php echo base_url();?>/assets/happys.png" alt="">
    <h1>Thanks for your  interest </h1>
   </div>
</body>
</html>