<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mediplus - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+22678991654</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">hospital@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a><a href="#">Sign In</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Hospital Center</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Accueil</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>A propos</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Département</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Docteurs</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contactez-nous</span></a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{ route('rendezvous.create') }}" class="nav-link">rendez-vous</a></li>
			  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>Login</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Bienvenu à notre Hopital</span>
	            <h1 class="mb-4">nous sommes là  <br>pour vos soin</h1>
	            <p class="mb-4">Nous vous remercions pour la confiance que vous accordez à notre Centre Hospitalier. L’hospitalisation n’est jamais un moment facile. Nous ferons en sorte que votre séjour se passe dans les meilleures conditions possibles..</p>
	            <p><a href="{{ route('rendezvous.create') }}" class="btn btn-primary py-3 px-4">Prendre un rendez-vous</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">bienvenue à <span>notre hopital,</span> un lieu dédié à votre bien-etre.</h2>
			            <p> Notre équipe qualifiée s'engage à fournir des soins de qualité, avec compassion et professionnalisme. Nous sommes fiers de servir notre communauté et de mettre la santé de nos patients au cœur de notre mission..</p>
			            <p><a href="{{ route('rendezvous.create') }}" class="btn btn-primary py-3 px-4">Prendre un rendez-vous</a> <a href="#" class="btn btn-secondary py-3 px-4">Contactez-nous</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-7 py-5">
	        	<div class="py-lg-5">
		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-12 heading-section ftco-animate">
			            <h2 class="mb-3">Notre service</h2>
			          </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Services d'urgence</h3>
			                <p>En cas d'urgence médicale, composez immédiatement le numéro d'urgence de votre pays. Ne tardez pas à solliciter de l'aide professionnelle. Votre santé est primordiale..</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Medecins qualifiés</h3>
			                <p>Aux médecins qualifiés dévoués à la santé de leurs patients, votre expertise et compassion font une différence significative. Merci pour votre engagement continu envers le bien-être de la communauté. Votre dévouement est une source d'inspiration..</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Examen en plein air</h3>
			                <p>Profitez de l'environnement apaisant pendant votre examen en plein air. Que la nature vous inspire et contribue à votre concentration. Bonne chance et donnez le meilleur de vous-même !.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Service 24 heures</h3>
			                <p>Notre service est disponible pour vous aider 24 heures sur 24, 7 jours sur 7. Peu importe le moment, nous sommes là pour répondre à vos besoins. N'hésitez pas à nous contacter à tout moment..</p>
			              </div>
			            </div>      
			          </div>
			        </div>
			      </div>
		      </div>
		      <div class="col-md-5 d-flex">
	        	<div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
		        	<form action="{{ route('rendezvous.create') }}" class="appointment-form ftco-animate">
		        		<h3>Consultation gratuite</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="nom">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="prenom">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Sélectionnez votre prestation</option>
	                        <option value="">Neurologie</option>
	                        <option value="">Cardiologie</option>
	                        <option value="">Dentaire</option>
	                        <option value="">Ophthalmologie</option>
	                        <option value="">autres services</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Telephone">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-ios-clock"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Heure">
		            		</div>
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Rendez-vous" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
	        </div>
		    </div>
			</div>
		</section>

    <section class="ftco-intro img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Votre santé est notre priorité</h2>
						<p>Nous vous encourageons à prendre votre santé au sérieux. consultez régurlièrement votre professionnel de santé et soyez à l'écoute de votre corps.</p>
					
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Neurologie</a></h3>
    								<p>votre bien-etre neurologique est notre priorité</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Chirurgical</a></h3>
    								<p>En tant que Chirurgiens, nous comprenons l'importance de chaque intervention</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Dentaire</a></h3>
    								<p>Votre sourire est notre priorité. En tant que dentistes, nous sommes déterminés à vous offrir des soins dentaires exceptionnels</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Ophtalmologie</a></h3>
    								<p>Votre vision est précieuse, et en tant qu'ophtalmologues, notre engagement est de prendre soin de vos yeux</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Cardiologie</a></h3>
    								<p>Votre santé cardiaque est au cœur de nos préoccupations en tant que cardiologues.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Traumatologie</a></h3>
    								<p>Notre mission est de vous aider à surmonter les défis liés aux blessures et aux traumatismes</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">gynécologues</a></h3>
    								<p>En tant que gynécologues, notre mission est de veiller à votre santé reproductive</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">radiographie</a></h3>
    								<p>En tant que service de radiologie, notre engagement est de fournir des images précises pour guider vos soins de santé</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Cardiologie</a></h3>
    								<p>Votre santé cardiaque est au cœur de nos préoccupations en tant que cardiologues</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Nos médecins qualifiés</h2>
            <p>Si vous avez des questions médicales, il est recommandé de consulter directement vos médecins qualifiés pour des conseils personnalisés en fonction de votre situation de santé.</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Lloyd Wilson</h3>
								<span class="position mb-2">Neurologue</span>
								<div class="faded">
									<p>Votre santé est ma priorité. N'hésitez pas à communiquer ou poser des questions. Ensemble, travaillons à votre bien-être. Prenez soin de vous.
										.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>

	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Rachel Parker</h3>
								<span class="position mb-2">Ophtamologiste</span>
								<div class="faded">
									<p>Votre santé est ma priorité. N'hésitez pas à communiquer ou poser des questions. Ensemble, travaillons à votre bien-être. Prenez soin de vous.
										.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
		
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Ian Smith</h3>
								<span class="position mb-2">Dentiste</span>
								<div class="faded">
									<p>Votre santé est ma priorité. N'hésitez pas à communiquer ou poser des questions. Ensemble, travaillons à votre bien-être. Prenez soin de vous.
										.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
		  
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Alicia Henderson</h3>
								<span class="position mb-2">Pediatre</span>
								<div class="faded">
									<p>Votre santé est ma priorité. N'hésitez pas à communiquer ou poser des questions. Ensemble, travaillons à votre bien-être. Prenez soin de vous.
										.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
		 
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						
						<h2 class="mb-4">plus de 5100 patients nous font confiance</h2>
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Prendre rendez-vous</a></p>
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>années d'expérience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>patients heureux</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Nombre de médecins</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Nombre d'employés</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Obtient Toutes les mises à jour ici</h2>
            <p>Consultez le programme du jour pour connaître les traitements et rendez-vous médicaux prévus.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">juillet 9, 2023</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Votre santé est notre priorité</a></h3>
                <p>Nous sommes là pour vous soutenir tout au long de votre parcours de guerison.</p>

              </div>
            </div>
        	</div>
        </div>
      </div>
    </section>

	

          
   

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">contactez-nous</h2>
            <p> nous tenons à vous assurer de notre engagement continu envers votre bien-être. N'hésitez pas à nous contacter pour toute question ou préoccupation. Votre santé est notre priorité.
			</p>
          </div>
        </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="{{ route('Contactpost') }}" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>
		</section>
		
		  <div class="col-lg-12">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d608646.5779056688!2d-2.0198178398169353!3d13.182811976618224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe47e1af9855%3A0x1278af12903c216!2sCampus%20Num%C3%A9rique%20Francophone%20de%20Ouagadougou%20(AUF%20OUAGA)!5e0!3m2!1sfr!2sbf!4v1701786703087!5m2!1sfr!2sbf" style="border:0; width: 100%; height: 350px;"></iframe>
	
		</div>
    

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hospital center</h2>
              <p> Nous sommes ici pour vous accompagner et faire en sorte que votre séjour soit le plus confortable possible.

			  </p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/mariebelyse.rukundo.1"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Departments</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurologie</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Ophtalmologie</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>radiographie</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Chirurgical</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiologie</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dentaire</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Accueil</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>A propos</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Départments</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Docteurs</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
               
                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">j'ai des questionsd?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+22657706926</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">hospital@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>