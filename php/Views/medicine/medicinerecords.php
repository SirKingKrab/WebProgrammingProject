<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Fit List </title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    
    <body>
        <div id = "header">
            <nav class="navbar navbar-fixed navbar-default" id = "navbar">
              <div class="container-fluid">
                <div id = "navbaritems">
                  <ul class = "nav navbar-nav">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="index.html"> Fit List </a>
                    </div>          
                    <li><a href="foodrecords.html">Food </a></li>
                    <li><a href="drinkrecords.html"> Drink </a></li>
                    <li><a href="exerciserecords.html"> Exercise </a></li>
                    <li><a href="weightrecords.html"> Weight </a></li>
                    <li><a href="sleeprecords.html"> Sleep </a></li>
                    <li><a href="bloodpressurerecords.html"> Blood Pressure </a></li>
                    <li><a href="medicinerecords.html"> Medicine </a></li>
                    <li><a href = "#"><img src = "http://www.iid.com/Home/ShowImage?id=299&t=635648001335730000" style = "width: 30px"></a></li>            
                    <li><a href = "#"><img src = "https://www.hrc.co.nz/index.php/download_file/view_inline/893/" style = "width: 30px"></a></li>
                    <li><a href = "#"><img src = "http://a4.mzstatic.com/us/r30/Purple69/v4/14/79/45/147945c1-8234-f71b-2018-9c22475473f2/icon320x320.jpeg" style = "width: 30px"></a></li>                  
                </div>
              </div>
            </nav>
        </div>
    
        <div class="container">
          <div class="jumbotron" id = "frontPageInfo">
            <h1> My Medicine Records </h1> 
            <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Medicine</label>
                            <div class="col-sm-10">
                              <input type= "medicine" class="form-control" id="txtmedicine" placeholder="medicine">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Dosage</label>
                            <div class="col-sm-10">
                              <input type= "dosage" class="form-control" id="txtmedicine" placeholder="dosage">
                            </div>
                          </div>                          
                </form>         
      
          <button class="btn btn-success" id = "add">Add</button> 
          <table class="table table-hover" id = "table">
            <thead>
              <tr>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Date & Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Tylenol </td>
                <td> 4 mL </td>
                <td> -- </td>
              </tr>

            </tbody>
          </table>
    </div>

      <script>
        $('#alert').hide();
        $('#myModal').on('show.bs.modal', function () 
        {
          $('#alert').show();
        })      
      </script>

        <div class = "footer">
          <div class = "Jumbotron">
            <p> Copyright 2015.  </p>
             <a href = "https://twitter.com/ClubSeltzer"><img src = "http://www.iid.com/Home/ShowImage?id=299&t=635648001335730000" style = "width: 30px"></a>             
             <a href = "#"><img src = "https://www.hrc.co.nz/index.php/download_file/view_inline/893/" style = "width: 30px"></a>
             <a href = "#"><img src = "http://a4.mzstatic.com/us/r30/Purple69/v4/14/79/45/147945c1-8234-f71b-2018-9c22475473f2/icon320x320.jpeg" style = "width: 30px"></a>
          </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
        <script type="text/javascript">
          (function($){
            $(function(){
              $("#add").on('click', function(e){
                var self = this;
                var name = $("#name").text();
                var calories = $("#calories").text();
                var totalfat = $("#totalfat").text();
                var sugar = $("#sugar").text();
                var servings = $("#servings").text();

                $("#table").append("<tr> <td> " + name + " </td> <td> " + name + " </td> <td>" + Date() + " </td> </tr>");            
                return false;
              });
            });
          })(jQuery);            
            
            
        </script>
    </body>    
</html>