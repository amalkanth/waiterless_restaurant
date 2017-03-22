<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><head>
<style type="text/css">
.flat-form {
    background-color : transparent;
	
	color: white;
	margin: 25px auto;
	width: 390px;
	height: 340px;
	position: relative;
	font-family: 'Roboto';
  .tabs {
    display: block;
    background: #c0392b;
    width: 100%;
    height: 40px;
    margin: 0;
    margin-bottom: 20px;
    padding: 0;
    position: relative;
    list-style-type: none;
    li {
      display: block;
      margin: 0;
      padding: 0;
      float: left;
      a {
        display: block;
        background: #c0392b;
        color: white;
        text-decoration: none;
        font-size: 16px;
        float: left;
        padding: 12px 22px;
        &.active {
          background: #e74c3c;
          border-right: none;
          @include transition( all 0.5s linear );
        } 
        &:hover {
          background: lighten( #c0392b, 10% );
          @include transition( all 0.5s linear );
        }       
      }
      &:last-child a {
        text-align: center;
        width: 174px;
        padding-left: 0;
        padding-right: 0;
        border-right: none;
      }      
    }
; 	background-color: #FFFF99;
	background-color: #FFFF66;
	background-color: #e74c3c;
	background-color: #ffff66;
  }
  .form-action {
    padding: 0 20px;
    position: relative;
  }
  h1 {
	font-size: 42px;
	padding-bottom: 10px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  }
  p {
    font-size: 12px;
    padding-bottom: 10px;
    line-height: 25px;
  }
  a {
	color: #000;
	text-decoration: none;
    &:hover{
      text-decoration: underline;
	font-weight: bold;
    }
  }
  form {
    padding-right: 20px !important;
    input{
      &[type=text],
      &[type=password],
      &[type=submit] {
        font-family: 'Roboto';
      }
      &[type=text],
      &[type=password] {
        width: 100%;
        height: 40px;
        margin-bottom: 10px;
        padding-left: 15px;
        background: #fff;
        border: none;
        color: #e74c3c;
        outline: none;
      }
      &.button {
        border: none;
        display: block;
        background: #136899;
        height: 40px;
        width: 80px;
        color: #ffffff;
        text-align: center;
        @include border-radius( 5px );
        @include box-shadow( 0px 3px 1px #2075aa );
        @include transition( all 0.15s linear );
        &:hover {
          background: #1e75aa;
          @include box-shadow( 0 3px 1px #237bb2 );
        }
        &:active {
          background: #136899;
          @inclue box-shadow( 0 3px 1px #0f608c );
        }
      }  
      $placeholder-color: #e74c3c;
      &::-webkit-input-placeholder {color: $placeholder-color;}
      &:-moz-placeholder {color: $placeholder-color;}
      &::-moz-placeholder {color: $placeholder-color;}
      &:-ms-input-placeholder {color: $placeholder-color;}      
    }
  }
  .show {display: block;}
  .hide {display: none;}
}





// Body Stuff below
body {
  background: #1a1a1a;
}
.flat-form .tabs li {
	font-weight: bold;
}
.flat-form .tabs li {
	color: #000;
}
.flat-form ul li .active {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>
<script type="text/javascript">
$('.tabs').on('click', 'li a', function(e){
	  e.preventDefault();
	  var $tab = $(this),
	       href = $tab.attr('href');

	   $('.active').removeClass('active');
	   $tab.addClass('active');

	   $('.show')
	      .removeClass('show')
	      .addClass('hide')
	      .hide();
	  
	    $(href)
	      .removeClass('hide')
	      .addClass('show')
	      .hide()
	      .fadeIn(550);
	});

</script>
<div class="flat-form">
  <ul>
    <li>
      <a href="#login" class="active">Login</a>
    </li>
    <li>
      <a href="#register">Register</a>
    </li>
    <li>
      <a href="#reset">Reset Password</a>
    </li>
  </ul>
  <div id="login" class="form-action show">
    <h1>Login .</h1>
    <form action =user/userhome>
      <ul>
        <li>
          <input type="text" placeholder="Username" />
        </li>
        </br></br><li>
          <input type="password" placeholder="Password" />
        </li>
        </br></br><li>
          <input type="submit" value="Login" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#login.form-action-->
  <div id="register" class="form-action hide">
    <h1>Register</h1>
    
    <form>
      <ul>
        <li>
          <input type="text" placeholder="Username" />
        </li>
        <li>
          <input type="password" placeholder="Password" />
        </li>
        <li>
          <input type="submit" value="Sign Up" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#register.form-action-->
  <div id="reset" class="form-action hide">
    <h1>Reset Password</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, provident in accusamus possimus.</p>
    <form>
      <ul>
        <li>
          <input type="text" placeholder="Email" />
        </li>
        <li>
          <input type="text" placeholder="Birthday" />
        </li>
        <li>
          <input type="submit" value="Send" class="button" />
        </li>
      </ul>
    </form>
  </div>
  <!--/#register.form-action-->
</div>