<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php' ; ?>
	
</head>

<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="previd">precautions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospid">hospitals near you</a>
      </li>    
    </ul>
    </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
			<img src="images/u.png" width="300" height="200">
			</div>			
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
			<h1>Let's stay safe and fight together against cor<span><img src="images/o.png" width="65" height="65"></span>na virus</h1>
			</div>			
		</div>
	</div>
</div>
<!----------Corona update---------------------->
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">COVID-19 WORLDWIDE UPDATES </h3>
	</div>

	<div class="table-responsive">
<table class="table-bordered table-striped text-center" id="tbval">
		<tr>
			<th>Country</th>
			<th>Total Confirmed</th>
			<th>Total Recovered</th>
			<th>Total Deaths</th>
			<th>New Recovered</th>
			<th>New Deaths</th>
		</tr>
</table>


	</div>
</section>

<!-------------------------About section---------------------->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-4">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/about.jpeg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19(Corona Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
			<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>			
		</div>

	</div>
	
</div>
	
<!-------------------------Symptoms section---------------------->
<div class="container-fluid pt-5 pb-5 " id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Corona-Virus Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/cough.jpeg" class="img-fluid" height="120" width="120">
					<figcaption>COUGH</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/sneez.png" class="img-fluid" height="120" width="120">
					<figcaption>RUNNY NOSE</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/fev.png" class="img-fluid" height="120" width="120">
					<figcaption>FEVER</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/soarthroat.jpeg" class="img-fluid" height="120" width="120">
					<figcaption>SORE THROAT</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/short.png" class="img-fluid" height="100" width="100">
					<figcaption>SHORTNESS OF BREATHING</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="images/headache.jpg" class="img-fluid" height="100" width="100">
					<figcaption>SEVERE HEADACHE</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!-------------------------Prevention section---------------------->
<div class="container-fluid sub_section pt-5 pb-5 " id="previd">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps prevention against Corona-Virus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/wash.jpg" height="90" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol based hand rub</p>
				</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/mask.jpg" height="90" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Cover your nose and mouth with disposable tissue or flexed elbow when you vcough or sneeze</p>
				</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/distance.jpg" height="80" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid close contact(2 meter or 3 feet) with people who are unwell and maintain social distancing</p>
				</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/home.jpg" height="80" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay home and self-isolated from others in household if you are feeling unwell</p>
				</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/news.png" height="80" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay alert by watching news and follow the recommended practices</p>
				</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<figure class="text-center">
						<img src="images/warm.png" height="90" width="90" >				
					</figure>
				</div>
				<div class="col-lg-8 col-md-8 col-12">
					<p>If you have corona-virus symptoms, seek medical care urgently</p>
				</div>
				</div>
			</div>

		</div>
	</div>
	</div>
<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p> Copyright @ Kshitija </p>
		
	</div>
	
</footer>
<script>
	function fetch(){
		$.get("https://api.covid19api.com/summary",
			function (data){
				var tbval= getElementById('tbval')
				for(var i=1; i<(data['Countries'].length);i++){
					var x=tbval.insertRow();
					x.inserCell(0);
					tbval.rows[i].cells[0].innerHTML=data['countries'][i-1]['Country'];
					tbval.rows[i].cells[0].style.background='#7a4a91';	
					tbval.rows[i].cells[0].style.color='#fff';

					x.inserCell(1);
					tbval.rows[i].cells[1].innerHTML=data['countries'][i-1]['Total Confirmed];
					tbval.rows[i].cells[1].style.background='#7a4a91';	
					tbval.rows[i].cells[1].style.color='#fff';

					x.inserCell(2);
					tbval.rows[i].cells[2].innerHTML=data['countries'][i-1]['Total Recovered'];
					tbval.rows[i].cells[2].style.background='#7a4a91';	
					tbval.rows[i].cells[2].style.color='#fff';

					x.inserCell(3);
					tbval.rows[i].cells[3].innerHTML=data['countries'][i-1]['Total Deaths'];
					tbval.rows[i].cells[3].style.background='#7a4a91';	
					tbval.rows[i].cells[3].style.color='#fff';

					x.inserCell(4);
					tbval.rows[i].cells[4].innerHTML=data['countries'][i-1]['New Confirmed'];
					tbval.rows[i].cells[4].style.background='#7a4a91';	
					tbval.rows[i].cells[4].style.color='#fff';

					x.inserCell(5);
					tbval.rows[i].cells[5].innerHTML=data['countries'][i-1]['New Deaths'];
					tbval.rows[i].cells[5].style.background='#7a4a91';	
					tbval.rows[i].cells[5].style.color='#fff';
					

				}


			}



			);
	}

</script>

</body>
</html>