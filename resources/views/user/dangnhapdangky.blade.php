 
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Đăng Nhập Và Đăng Ký</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="{{asset('assetsUser/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all">

<!-- Style --><link href="{{asset('assetsUser/css/styleLog.css')}}" rel="stylesheet" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>Đăng Nhập Tài Khoản</h1>

	<div class="w3layoutscontaineragileits">
	<h2></h2>
		<form action="{{ route('dangnhap') }}" method="POST">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="results">
 				@if(Session::get('message'))
				 <div class="alert alert-danger">
 					{{ Session::get('message') }}
				 </div>
				@endif
				<br>
			</div>
				<span class="text-danger">@error('email') {{ $message }} @enderror</span>
				<input type="email" name="email" placeholder="EMAIL" value="{{ old ('email')}}"> <br>
				<span class="text-danger">@error('password') {{ $message }} @enderror</span>
				<input type="password" name="password" placeholder="MẬT KHẨU" >
				<ul class="agileinfotickwthree">
					<li>
						<input type="checkbox" name="remember_me" value="remember_me">
						<label for="remember_me"><span></span>Nhớ Mật Khẩu</label>
						<a href="#">Quên Mật Khẩu?</a>
					</li>
				</ul>
				<div class="aitssendbuttonw3ls">
					<input type="submit" value="ĐĂNG NHẬP">
					<p> Đăng Ký Tài Khoản Mới <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Vào Đây</a></p>
					<div class="clear"></div>
				</div>
		</form>
	</div>
	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Form Đăng Ký</h3>
				<form action="{{ route('dangky') }}" method="post" id="form">
					{{ csrf_field() }}
					@if(Session::get('message'))
						<div class="alert alert-success">
							{{ Session::get('message') }}
						</div>
					@endif
					<!-- @if(count($errors)>0)
 						<div class="alert alert-danger">
 							@foreach($errors->all() as $err)
 								{{$err}}
							@endforeach
					@endif -->
						<div class="form-sub-w3ls">
							<span class="text-danger">@error('txtname') {{ $message }} @enderror</span>
							<input placeholder="Họ Tên"  type="text"  name="txtname" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<span class="text-danger">@error('txtemail') {{ $message }} @enderror</span>
							<input placeholder="Email" class="mail" type="email"  name="txtemail" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<span class="text-danger">@error('txtphone') {{ $message }} @enderror</span>
							<input placeholder="Số điện thoại" class="number" type="text"  name="txtphone" maxlength="10" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<span class="text-danger">@error('txtpassword') {{ $message }} @enderror</span>
							<input placeholder="Mật Khẩu"  type="password" name="txtpassword" maxlength="20" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<span class="text-danger">@error('txtrepassword') {{ $message }} @enderror</span>
							<input placeholder="Nhập Lại Mật Khẩu"  type="password" name="txtrepassword" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<!-- <div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">
							Tôi chấp nhận các Điều khoản & Điều kiện</label>
					</div> -->
					<div class="submit-w3l">
						<input type="submit" value="Đăng Ký">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	
	<script type="text/javascript" src="{{asset('assetsUser/js/jquery-2.1.4.min.js')}}"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="{{asset('assetsUser/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
 	
	<!-- <script>
		$( "#form-dang-ky" ).submit(function( event ) {
  			alert( "Handler for .submit() called." );
			  	$.ajax({
				type: "POST",
				url: {{ route('dangky') }},
				data: $( this ).serializeArray(),
				success: function(response) {
					console.log("response: ", response);
				}
				});
  		event.preventDefault();
		});
	</script> -->


	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});

		$(document).ready(function() {
                $('form').parsley();

                @if (session('status'))
                    @if (session('status') == 'success')
                        alertify.success("{!! session('message') !!}");
                    @else
                        alertify.error("{!! session('message') !!}");
                    @endif
                @endif

                $('#username').focus();

                $(".password").click(function() {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
            });
	</script>

</body>
<!-- //Body -->
</html>