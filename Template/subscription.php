<?php    session_start(); 



?>


<!DOCTYPE html>
<html>
	<head>
    <!-- OPTIMIZELY  -->
    <script src="https://cdn.optimizely.com/js/2987000340.js"></script>

		<!-- SEO -->
    <meta charset="utf-8" />
<title>Sign up</title>
<meta name="description" content="Create a free  account" />
<meta name="keywords" content="create free account sign up " />

<!--meta property="og:image" content="LogoUIA.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:title" content="Create free account | DataCamp" />
<meta name="twitter:title" content="Create free account | DataCamp" />
<meta name="twitter:description" content="Create a free DataCamp account" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@DataCamp" />
<meta name="twitter:image" content="https://www.datacamp.com/datacamp-sq.png" />
<meta name="twitter:image:width" content="300" />
<meta name="twitter:image:height" content="300" />
<meta name="twitter:creator" content="@DataCamp" />
<meta name="twitter:domain" content="www.datacamp.com" />
<meta name="fb:app_id" content="408074879325153" />-->

		<!-- Typekit -->
		<script src="https://use.typekit.net/pjc4zfc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

		<!-- Main CSS -->
		<link rel="stylesheet" media="all" href="https://cdn.datacamp.com/main-app/assets/application-9539da5e8436633a0756007a9ef1d131.css" />
		<link rel="shortcut icon" type="image/x-icon" href="LogoUIA.png" />
		<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="MJ9Gvt32xxMDjohwzk1Y4acglaNeZB8Hss0NuoZFfCA48MAMmCRmxq2mahI8RkVOpS1w3BHTk+BgSX9olNPv0A==" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4795905ee2","applicationID":"7334808","transactionName":"JlkNEEQLVA0DE0wUBgJfEBBEBUwICQ8QSQ0AQQ==","queueTime":0,"applicationTime":33,"agent":""}</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
		<base href="/">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="fragment" content="!">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Google site verification for webmaster tools -->
		<meta name="google-site-verification" content="ao3s4PdjisD2QsfTbldo7YJx7VX2QLkPEtlDpyFTjo8" />
    <!-- <meta name="google-site-verification" content="eIXyTuB-EggMhj3B0bS4DBmMtPkUHXSpNAyolCX1lKE" /> -->

		<!-- Tracking for segment IO -->
		<script type="text/javascript">
		  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
        analytics.load('vaFcOplBJk5aNDXhTnXUaH4XcZSVOL1m');
		  	// Identify user at the client side

			analytics.page();
		  }}();
		</script>

    <!-- DataCamp Analytics -->
    <script src="https://cdn.datacamp.com/datacamp-analytics-1.1.7.min.js"></script>
    <script type="text/javascript">
      window.DC = window.DC || {}
      window.DC.analytics = new DCAnalytics({"api_domain": "https://www.datacamp.com", "collection": "main", "autotrack_utm": true, "autotrack_data_attr": true });
    </script>

      <!-- Hotjar -->
      <script>
        (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:265001,hjsv:5};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
      <!-- End Hotjar -->
      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '286618111707433');
        fbq('track', "PageView");
      </script>
      <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=286618111707433&ev=PageView&noscript=1" /></noscript>
      <!-- End Facebook Pixel Code -->
	</head>

	<body>


			<!-- Include the template -->
			
<section class="bg bg-navigation">
  <div class="container">
    <nav class="clearfix">
  <div class="navbar--title">
    <a class="clearfix no-link-style" data-dc-track="" data-dc-referrer="main" href="/">
      <div class="logo"></div>
      <div class="logo-title">e-Paradigm</div>
</a>    
  </div>


  <ul class="nav hidden-xs hidden-sm">
      <li><a class="btn btn-secondary-light" data-dc-track="" data-dc-referrer="main" href="Testing/Template/subscription.php">Create Free Account</a></li>
      <li><a data-dc-track="" data-dc-referrer="main" href="Testing/Template/login.php">Log in</a></li>
      <li class="spacer"></li>
   <!-- <li><a data-dc-track="" data-dc-referrer="main" href="/community">Community</a></li>
      <li><a data-dc-track="" data-dc-referrer="main" href="/groups/business">Business</a></li>-->
      <li><a  href="Testing/Template/subscription.php">RefreshPage</a></li>
    <li><a data-dc-track="" data-dc-referrer="main" href="/courses">Courses</a></li>
    <li><a class="hidden-md" data-dc-track="" data-dc-referrer="main" href="/">Home</a></li>
  </ul>
  <div class="nav--resp-menu-toggle hidden-lg hidden-md">
    <a class="no-link-style" href=""><i class="fa fa-bars fa-2x"></i></a>
  </div>
</nav>

  </div>
</section>

  <div class="container container-single-form create-account">
  <div class="row">
    <div class="col-md-9 col-sm-10 col-md-offset-1 col-sm-offset-1 registration-form">
      <h2 class="text-center">Create Your Free Account</h2>
      <div class="row">
        <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
            <div class="row">
              <div class="col-sm-4">
                <a class="btn btn-secondary btn-linkedin js-registration-btn" href="/users/auth/linkedin">
                  <i class="fa fa-linkedin-square"></i> LinkedIn
</a>              </div>
              <div class="col-sm-4">
                <a class="btn btn-secondary btn-facebook js-registration-btn" href="/users/auth/facebook">
                  <i class="fa fa-facebook"></i> Facebook
</a>              </div>
              <div class="col-sm-4">
                <a class="btn btn-secondary btn-google-plus js-registration-btn" href="/users/auth/google_oauth2">
                  <i class="fa fa-google-plus"></i> Google +
</a>              </div>
            </div>

          <form  action="Testing/Template/subscription.php" accept-charset="UTF-8" method="post">
             <fieldset>
              
                <input autofocus="autofocus" required="required" placeholder="Surname" class="has-inline-icon" type="text" value="" name="surname" id="user_email" />
            </fieldset>
			<fieldset>
              
                <input autofocus="autofocus" required="required" placeholder="Name" class="has-inline-icon" type="text" value="" name="name" id="user_email" />
            </fieldset>
            <fieldset>
              <i class="fa fa-envelope-o fa-lg inline-icon"></i>
                <input autofocus="autofocus" required="required" placeholder="Email" class="has-inline-icon" type="email" value="" name="email" id="user_email" />
            </fieldset>

            <fieldset>
              <i class="fa fa-lock fa-lg inline-icon"></i>
              <input required="required" placeholder="Password" class="has-inline-icon" type="password" name="password1" id="user_password" />
            </fieldset>
			<fieldset>
              <i class="fa fa-lock fa-lg inline-icon"></i>
              <input required="required" placeholder="Password" class="has-inline-icon" type="password" name="password2" id="user_password" />
            </fieldset>

            <div class="submit text-center">
              <input type="submit" name="submit" value="Create Free Account" class="btn btn-primary m0 js-registration-btn" />
              <p class="terms">By signing up you agree to our terms of service</p>
              <p class="terms">Already have an account? <a href="Testing/Template/login.php">Sign in</a></p>
            </div>
</form>        </div>
      </div>
    </div>
	</div>
</div>



<?php  
		
		// echo $_POST['conditions'] . '<br/>';echo $_POST['category'] . '<br/>';
				// echo $_POST['password1'] . '<br/>';
				// echo $_POST['password2'] . '<br/>';
				// echo $_POST['nom'] . '<br/>';
				// echo $_POST['prenom'] . '<br/>';
		
		
				if(isset($_POST['submit']))
				{ Validation();
					
			
			
			     ;}
		
		function Validation()  {
		
		 if (!isset($_POST['password1']) OR !isset($_POST['password2']) OR $_POST['password1'] != $_POST['password2']) { echo '<script> alert("Please, rewrite your password.");</script>';}
		
		elseif (isset($_POST['name']) AND 
		isset($_POST['surname']) AND 

		isset($_POST['email']) AND 
		 isset($_POST['password1']) AND isset($_POST['password2']) AND 
	
		
		$_POST['password1'] = $_POST['password2'] )
		
			
			{      
					
					
						
					//ARRAY FOR THE QUESTIONS COMPLETED								
					/*$questionComplete=array (
														'C1Q1'  => 0,
														'C1Q2' => 0,
														'C1Q3'   => 0,
														'C1Q4'  => 0,
														'C2Q1' => 0,
														'C2Q2'   => 0,
														'C2Q3'  => 0,
														'C2Q4' => 0,
														'C3Q1'   => 0,
														'C3Q2'  => 0,
														'C3Q3' => 0,
														'C3Q4'   => 0,
														'C4Q1'  => 0,
														'C4Q2' => 0,
														'C4Q3'   => 0,
														'C4Q4'  => 0
														
													)	;		*/					
													
													
													
													
					$email=$_POST['email'];
					// $password=$_POST['password1'];
					$surname=$_POST['surname'];
					$name=$_POST['name'];//$level=$_POST['level']; 
					$password=$_POST['password1'];
			         echo $email;
						//$salt = "ahiadhdoskfb";
					//$newPwd = hash('sha256', $password . $salt);
				  try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=TutoCalculator;charset=utf8', 'root', 'mysql');
					}
					catch (Exception $e)
					{
							die('Erreur : ' . $e->getMessage());
					}
					
						
						
					//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES($_POST[\'email\'], $_POST[\'password1\'],$_POST[\'nom\'] ,$_POST[\'prenom\'])');
						//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES(\'email\', \'password1\',\'nom\' ,\'prenom\')');
						
						$req = $bdd->prepare('INSERT INTO user(email, surname,name, password) VALUES(:email, :surname, :name, :password)');
						$req->execute(array(
							'email' => $email,
							 
							 'surname' => $surname,
							 'name' => $name,
							 'password' => $password
							 
							
							));

						
						
						
						$reponse = $bdd->query('SELECT * FROM user');
						while ($donnees = $reponse->fetch()) {
						$donnees = $reponse->fetch();
						echo $donnees['email'];  }
						$reponse->closeCursor();
						
						
						    $_SESSION['email']=$email;
							$_SESSION['name']=$name;
							$_SESSION['surname']=$surname;
							$_SESSION['answer']='Write the answer here.';
							$_SESSION['questionComplete']=$questionComplete;
							$_SESSION['score']=0;
							$_SESSION['pourcentage']=0;
		

//////RETRIEVE THE USER'S ID
/*
	  $reponse = $bdd->query('SELECT id FROM user');
	  $reponse1 = $bdd->query('SELECT email FROM user');
	$reponse2 = $bdd->query('SELECT password FROM user');
	while ($donnees = $reponse->fetch() AND $donnees2 = $reponse2->fetch() AND $donnees1 = $reponse1->fetch()) {
						
	if ($email == $donnees1['email'] AND $password == $donnees2['password']) 
    { 
         $_SESSION['id']=$donnees['id'];
		 
		 
		 
	}
}
	$reponse->closeCursor();
	$reponse1->closeCursor();
	$reponse2->closeCursor();*/

///////

		
						
							echo 'Le user a bien été ajouté !';
		echo '<script> alert("You have subscribed successfully ! Thanks a lot!"); alert("Welcome to e-Paradigm, ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . '.");location.href = "Testing/Template/Code1.html";</script>';
			
		           }   else { 
				   
				   echo '<script> alert("Please, fill all the blanks."); </script>'; }
				   // echo '<script> alert("Vbien ouejsssssssssssssss."); </script>';
				   // echo '<br/>prenom:' . empty($_POST['prenom']);
			       // echo '<br/>password2:' . isset($_POST['password2']);			
			       // echo '<br/>conditions:' . isset($_POST['conditions']);			
			       // echo '<br/>category:' . isset($_POST['category']);
					// echo $_SESSION['prenom'];
				   
				    } 
				   
				   
				  
				   
				   
				   
				   ?>





































<div class="bottom-navigation">
	<div class="container clearfix">
		<div class="navbar--title">
			<a class="clearfix no-link-style" href="/">
				
				<div class="logo-title">e-Paradigm</div>
</a>		<!--	<a class="small-link" href="/careers">We&#39;re hiring!</a>-->
		</div>
		<ul class="inline clearfix hidden-xs">
			<li><a target="_blank" href="http://www.r-fiddle.org/">Terms of Service</a></li>-
			<li><a target="_blank" href="http://www.rdocumentation.org">About the team</a></li>
			<li><a href="/about">About</a></li>
		</ul>
		<div class="social-icons clearfix">
			<a target="_blank" href="https://twitter.com/datacamp"><i class="fa fa-twitter"></i></a>
			<a target="_blank" href="https://www.facebook.com/pages/DataCamp/726282547396228"><i class="fa fa-facebook"></i></a>
			<a target="_blank" href="https://www.linkedin.com/company/datamind-org"><i class="fa fa-linkedin"></i></a>
			<a target="_blank" href="https://www.youtube.com/channel/UC79Gv3mYp6zKiSwYemEik9A"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>


<script type="text/javascript">
	analytics.track('Visit Sign Up Page', { nonInteraction: 1 })
	DC.analytics.track_event('Visit Sign Up Page', "visit", { nonInteraction: 1 })
</script>


		</div>
		<!-- The required Braintree lib -->
		<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
		<script src="https://js.braintreegateway.com/v1/braintree-data.js"></script>
    <!-- DataCamp Main JS -->
    <script src="https://cdn.datacamp.com/main-app/assets/application-49803fb312a658980b83fae7960e1c14.js"></script>

		
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
      // This identifies your website in the createToken call below
      Stripe.setPublishableKey('pk_live_4bvFOkHgRQgjsTiRzCWM0yLk');
    </script>
    
<script src="//static.tapfiliate.com/tapfiliate.js" type="text/javascript" async></script>
<script type="text/javascript">
  window['TapfiliateObject'] = i = 'tap';
  window[i] = window[i] || function () {
      (window[i].q = window[i].q || []).push(arguments);
  };

  tap('create', '1802-65ce86');
  tap('detectClick', function() {
		Cookies.set("tap_vid", tap.vid, { expires: 36500 });
	});
	alert("signup");
</script>

	</body>
</html>
