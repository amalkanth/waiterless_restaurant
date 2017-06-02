       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div classe="col-md-12">
                     <h2>Admin home</h2>   
                        <h5>Welcome Admin  </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="../admin/additem"><h3></br></br></br></br></br>ADD NEW ITEM</h3> </a></p>
                    <p class="text-muted">menu</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="../admin/feedback"><h3></br></br></br></br></br>recent feedbacks</h3> </a></p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    
                    <p class="main-text"><a href="../admin/menu"><h3></br></br></br></br></br>view menu</h3> </a></p>
                    <p class="text-muted">items</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="../admin/custdetl"><h3></br></br></br></br></br>registered customers</h3> </a></p>
                    <p class="text-muted">points</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                     
                 <!-- /. ROW  -->  
            <div id="div_orders"></div>       
    </div>
   
             <!-- /. PAGE INNER  -->
            </div>
            
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <script>
    function show_orders()
    {
        var http=new XMLHttpRequest();
        
		/*http.onreadystatechange=function()
		{
			if(http.readyState==4)
			{
				document.getElementById("div_orders").innerHTML=http.responseText;
			}
		}
        http.open("GET","ajax_orders.php",true);
        http.send();*/
    }
	function call_orders()
	{
		setInterval(show_orders,1000);
	}
	call_orders();
    </script>
    
   <body>
   </body>

