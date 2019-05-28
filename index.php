<?php 
   
   $weather = ""; 
   $error = "";
   // if someone has requested a city, set up forcast page
    if(array_key_exists('city', $_GET)) {
        
        //ignore all spaced in the string 
        $city = str_replace('', '', $_GET['city']);

        $file_headers = @get_headers("https://www.weather-forecast.com/locations/".$city."London/forecasts/latest");

        if($file_headers[0] == 'HTTP/1.1 4 404 Not found') {
            $error = "That city could not be found."; 
        } else {


            $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/".$city."London/forecasts/latest");
            
            //this will delete eveything from the website, up to the content that you want
            $pageArray = explode( '<div class="b-forecast__overflow"><div class="b-forecast__wrapper b-forecast__wrapper--js"><table 
            class="b-forecast__table js-forecast-table"><thead><tr class="b-forecast__table-description b-forecast__hide-for-small 
            days-summaries"><th></th><td class="b-forecast__table-description-cell--js" colspan="9"><span 
            class="b-forecast__table-description-title"><h2>London Weather Today </h2>(1&ndash;3 days)</span><p class="b-forecast__table-description-content">
            <span class="phrase">' , $forecastPage);

            if(sizeof($pageArray) > 1) {

                // now we delete everything that is after the content that we want
                $secondPageArray = explode('</span></p></div>' , $pageArray[1]);
                if(sizeof($secondPageArray) > 1) {
                    $weather =  $secondPageArray[0]; 

                } else {
                    $error = "That city could not be found.";
                }
            } else {
                $error = "That city could not be found.";
            }
    }
    }



    

?>


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
            margin-top: 100px; 
            width: 450px;

        }

        input {
            margin: 20px 0; 
        }

        .weather {
            margin-top: 15px;
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
                <input type="text" class="form-control" name="city" id="city" aria-describedby="emailHelp" placeholder="Eg. London, Tokyo" value = "<?php echo $_GET['city']; ?>">
            
            </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!–– show weather here as alert-->

        <div id="weather"> <?php 
            
            if($weather){
                echo '<div class="alert alert-success" role="alert">
                '.$weather.'
              </div>';
            } else if ($error) {
                echo '<div class="alert alert-danger" role="alert">
                '.$error.'
              </div>';
            }
        
        ?> </div>



    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>