<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>TAS User Login</title>
<meta name="robots" content="noindex, nofollow" />

<link rel="icon" type="image/png" href="https://www.tashome.in/images/favicon.png" sizes="16x16">
<link type="text/css" rel="stylesheet" href="https://www.tashome.in/css/materialize.min.css" media="screen" />
<link type="text/css" rel="stylesheet" href="https://www.tashome.in/css/all.min.css" media="screen" />

<link href="https://www.tashome.in/css/admin-style.css" rel="stylesheet">
<link href="https://www.tashome.in/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<link href="https://www.tashome.in/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="https://www.tashome.in/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">

<body class="login_body">

<div id="preloader">
<div id="status">&nbsp;</div>
</div>

<div class="page-login z-depth-2 white">
<div class="row">
<p class="back_arrow"><a href="https://www.tashome.in/"><i class="material-icons">arrow_back</i></a></p>
<h3 class="center">User Login</h3>
<form action="https://www.tashome.in/login/check_login" method="post" class="col s12">
<div class="input-field">
<input type="text" name="contact" class="validate" required />
<label for="contact">Enter Username</label>
</div>
<div class="input-field">
<input type="password" name="password" class="validate" required />
<label for="password">Enter password</label>
</div><br>
<span>
<input type="checkbox" class="filled-in" id="filled-in-box" />
<label class="check_lable" for="filled-in-box">Remember Me</label>
</span>
<a href="https://www.tashome.in/login/forgot/admin" class="forgot_pwd right">Forgot password</a>
<div class="input-field center"><br>
<button type="submit" name="login" class="waves-effect waves-light btn btn-action">Login</button>
</div>
<br><p class="center">Are you service provider? <a href="https://www.tashome.in/login/vendor">Click Here</a> to login</p>
</form>
</div>
</div>

<script type="ac6dd2cf0ba4919615570848-text/javascript" src="https://www.tashome.in/js/jquery.min.js"></script>
<script type="ac6dd2cf0ba4919615570848-text/javascript" src="https://www.tashome.in/js/materialize.min.js"></script>
<script type="ac6dd2cf0ba4919615570848-text/javascript" src="https://www.tashome.in/js/bootstrap-material-datetimepicker.js"></script>

<script type="ac6dd2cf0ba4919615570848-text/javascript" src="https://www.tashome.in/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script type="ac6dd2cf0ba4919615570848-text/javascript" src="https://www.tashome.in/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="https://www.tashome.in/plugins/toast-master/js/jquery.toast.js" type="ac6dd2cf0ba4919615570848-text/javascript"></script>
<script type="ac6dd2cf0ba4919615570848-text/javascript">
/*error message alert*/
$('select').material_select();

/*-----Model-----*/
$(document).ready(function(){
  $('.modal').modal();
});

/*---warning popup----*/
$(document).ready(function() {
    $('.card-alert > button').on('click', function(){
        $(this).closest('div.card-alert').fadeOut('slow');
    })
})

//date time picker
$('#date').bootstrapMaterialDatePicker({
  format : 'DD/MM/YYYY',
  minDate : new Date(),
  weekStart : 0, 
  time: false
});

//date time picker
$('#dob').bootstrapMaterialDatePicker({
  format : 'DD/MM/YYYY',
  weekStart : 0, 
  time: false
});

//admin initialization
$(function () {
"use strict";
//sidenav collapse
$('.button-collapse').sideNav({
    menuWidth: 240,
    edge: 'left',
    closeOnClick: true
});
$('.right-sidebar-button').sideNav({
    menuWidth: 240,
    edge: 'right',
    closeOnClick: false
});
$(".dropdown-button").dropdown({});
});

//preloader
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

//datatable
$(document).ready(function () {
    $('#datatable').dataTable();
});

//select service field
$(document).ready(function(){
 $('#service').change(function(){
  var service_id = $('#service').val();
  
  if(service_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/admin/fetch_field",
    method:"POST",
    data:{service_id:service_id},
    success:function(data)
    {
     $('#service_field').html(data);
    }
   });
  }
  else
  {
   $('#service_field').html('<option value="">Select State</option>');
  }
 });
});

//image preview
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


function readimage1(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg1').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage2(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg2').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage3(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg3').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage4(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg4').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage5(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg5').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage6(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg6').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage7(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg7').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage8(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg8').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage9(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg9').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage10(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg10').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage11(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg11').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage12(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg12').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage13(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg13').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage14(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg14').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage15(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg15').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

function readimage16(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#uploadImg16').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
  }
}

//select branch
$(document).ready(function(){
 $('#state').change(function(){
  var state_id = $('#state').val();
  
  if(state_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/vendor/fetch_branch",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#branch_id').html(data);
    }
   });
  }
  else
  {
   $('#branch_id').html('<option value="">Select Branch Name*</option>');
  }
 });
});

//select service by category id
$(document).ready(function(){
 $('#serv_category').change(function(){
  var category_id = $('#serv_category').val();
  
  if(category_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/vendor/fetch_services",
    method:"POST",
    data:{category_id:category_id},
    success:function(data)
    {
     $('#service_by_id').html(data);
    }
   });
  }
  else
  {
   $('#service_by_id').html('<option value="">Select Services*</option>');
  }
 });
});

//select service type
$(document).ready(function(){
 $('#our_service').change(function(){
  var service_id = $(this).val();

  if(service_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/enquiry/fetch_service_field",
    method:"POST",
    data:{service_id:service_id},
    success:function(data)
    {
     $('#service_type').html(data);
    }
   });
 }else{
    $('#service_type').html('<option value="">Type of Service</option>');
 }

 });

//select work type
 $('#our_service').change(function(){
  var service_id = $(this).val();

  if(service_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/enquiry/fetch_service_field_data",
    method:"POST",
    data:{service_id:service_id},
    success:function(data)
    {
     $('#work_type').html(data);
    }
   });
  }else{
    $('#work_type').html('<option value="">Type of Work</option>');
  }
  
 });
});

//select service by category id
$(document).ready(function(){
 $('#vendor_id').change(function(){
  var vendor_id = $(this).val();
  
  if(vendor_id != '')
  {
   $.ajax({
    url:"https://www.tashome.in/vendor/fetch_contact",
    method:"POST",
    data:{vendor_id:vendor_id},
    success:function(data)
    {
     $('#contact').html(data);
    }
   });
  }
  else
  {
   $('#contact').html('<option value="">Contact No.*</option>');
  }

 });
});

</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="ac6dd2cf0ba4919615570848-|49" defer=""></script></body>
</html>