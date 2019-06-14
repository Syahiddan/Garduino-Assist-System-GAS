<html>
<head>
 <span id="header"></span>
 <script>
   if(!sessionStorage.getItem("id") && !sessionStorage.getItem("position"))
   {
      window.location.href = "index.php";
   }

 </script>
 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
  $("#header").load("src/header.php");
</script>
<!-- <meta charset="UTF-8"> -->
<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> -->

<link href='./lib/fullcalendar.min.css' rel='stylesheet'/>
<link href='./lib/fullcalendar.print.css' rel='stylesheet' media='print'/>
<script src='./lib/jquery.min.js'></script>
<script src='./lib/moment.min.js'></script>
<script src='./lib/jquery-ui.custom.min.js'></script>
<script src='./lib/fullcalendar.min.js'></script>
</head>
<style>
#calendar {
  width: 900px;
  margin: 0 auto;
}
</style>
<body>
  <span id="worker_toolbar">
    <script>
      $("#worker_toolbar").load("src/worker-toolbar.php");
    </script>
  </span>
  <div class="container-fluid" style="margin-top: 50px">
    <div class="row" id="worker_slider">
      <script>
        $("#worker_slider").load("src/worker-slider.php");
      </script>
    </div>
    <span id="directory_bar">
          <script>
                    $("#directory_bar").load("src/directory-bar.php");
                </script>
    </span>
    <div class="row">
      <div class="col-12 text-center noInternet d-none">No Internet Connection</div>
    </div>
    <div class="row mt-2" >
      <div id="calendar"></div>
    </div>
  </div>


  <div class="container col-12 d-none form-activity mt-3 pb-3 border border-info bg-light rounded fixed-bottom" style="position: relative;z-index: 1">

    <div class="row">
      <div class="col-12 text-right">  
        <img class="btn-close mt-2" src="asset/close.png" height="20">
      </div>
    </div>

    <div class="text-center col-12">

      <h4> Activity Details: </h4>

      <div class="mt-3 row">

        <p class="col-3 my-auto"><small>Activity name :</small> </p>
        <input class="col-9 form-control activity-title"type="text" disabled>
        <p class="col-3 my-auto"><small>Organizer : </small></p>
        <input class="col-9 form-control activity-organizer"type="text" disabled>
        <p class="col-3 my-auto"><small>Start date : </small></p>
        <input class="col-9 form-control start-date"type="datetime" disabled>
        <p class="col-3 my-auto"><small>End date : </small></p>
        <input class="col-9 form-control end-date"type="datetime" disabled>
        <p class="col-3 my-auto"><small>Start time : </small></p>
        <input class="col-9 form-control start-time"type="time" disabled>
        <p class="col-3 my-auto"><small>End time : </small></p>
        <input class="col-9 form-control end-time"type="time" disabled>

      </div>

    </div>
  </div>

  <script>

    function fmt(date) {

      return date.format("YYYY-MM-DD HH:mm");

    }

    $(document).ready(function(){
  
      
      $.post("http://192.168.137.1/gasMobile/server.php",{function:"for_schedule"},function(data){
      },"json")
      .done(function(data){
        $(".div-directory").find(".bg-info.col-2.text-white.btn").text("SCHEDULE");
        var calendar = $('#calendar').fullCalendar({

           aspectRatio: 1.0,
           editable: true,
           header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month'
          },


          eventClick: function (event) {

            //$("body").css("height",$("body").outerHeight()+$(".col-12.form-activity").outerHeight());

            
            $(".form-activity").removeClass("d-none");

            $('.form-activity .activity-id').val(event.id);
            $('.form-activity .activity-title').val(event.title);
            $('.form-activity .start-time').val(moment(event.sdate).format('HH:mm:ss'));
            $('.form-activity .end-time').val(moment(event.edate).format('HH:mm:ss'));
            $('.form-activity .start-date').val(moment(event.start).format('DD-MM-YYYY'));
            $('.form-activity .end-date').val(moment(event.end).format('DD-MM-YYYY'));
            $('.form-activity .activity-organizer').val(event.organizer);
            $("body").animate({scrollTop:$(".form-activity").offset().top},1000);
          },


          //looping sini
          events: data

        });
        $('#calendar').fullCalendar('option', 'contentHeight', 400);
        $(".fc-center h2").css("font-size","20px");
        $(".fc-center h2").addClass("mt-2");
      })
      .fail(function(data){
        $(".noInternet").removeClass("d-none");
      });

      $(".btn-close").on("click",function(){
        $(".form-activity").addClass("d-none");
      });
    });
    

  </script>



</body>
</html>
