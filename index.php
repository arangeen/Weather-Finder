<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Weather Finder</title>

    <style type="text/css">
        
        

        body {
            height: 100%;
            backgorund: none; 
            
        }

        html {
            height; 100%
        }

        .bg { 
             /* The image used */
            background-image: url("img/background.jpg");

            /* Full height */
    `       height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container{

            text-align: center; 
            margin-top: 200px; 
            width: 450px;

        }

        input {
            margin: 20px 0; 
        }

    </style>

  </head>
  <body background="img/background.jpg" >

  
     <div class="container">

        <h1> What's The Weather? </h1> 
        

        <!–– now adding bootstrap form-->

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter the name of a city.</label>
                <input type="text" class="form-control" name="city" id="city" aria-describedby="emailHelp" placeholder="Eg. London, Tokyo">
            
            </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        



    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>