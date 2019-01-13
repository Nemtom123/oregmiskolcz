<?php
/**
 * Created by PhpStorm.
 * User: dobia
 * Date: 2018.12.27.
 * Time: 23:55
 */
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Dobiász Tamás"/>
    <title>Öreg Miskolcz Hotel & Étterem Miskolc</title>
    <meta name="description" content="Öreg Miskolc Hotel és Étterem">
    <meta name="keywords" content="Öreg Miskolc Hotel és Étterem">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="jquery-elastic-grid-master/css/elastic_grid.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/cs-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/css/freepik.hotels.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.min.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/modernizr.custom.min.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="http://maps.google.com/maps-api-v3/api/js/35/7/intl/hu_ALL/common.js">

    </script>
    <script type="text/javascript" charset="UTF-8"
            src="http://maps.google.com/maps-api-v3/api/js/35/7/intl/hu_ALL/util.js"></script>
</head>


<div class="mg-page-title parallax" style="background-position: 50% 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #a6926d">Öreg Miskolcz Hotel Foglalás rendszere</h2>
                <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mg-booking-form">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active show" href="#select-room"
                                                                    aria-controls="select-room" role="tab"
                                                                    data-toggle="tab" aria-selected="false"><span
                                    class="mg-bs-tab-num">1</span><span class="mg-bs-bar"></span>Szoba választás</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#personal-info"
                                                                    aria-controls="personal-info" role="tab"
                                                                    data-toggle="tab" aria-selected="true"><span
                                    class="mg-bs-tab-num">2</span><span class="mg-bs-bar"></span>Személyes adatok</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#payment"
                                                                    aria-controls="payment" role="tab"
                                                                    data-toggle="tab"><span
                                    class="mg-bs-tab-num">3</span><span class="mg-bs-bar"></span>Fizetés</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#thank-you"
                                                                    aria-controls="thank-you" role="tab"
                                                                    data-toggle="tab"><span
                                    class="mg-bs-tab-num">4</span>Köszönöm</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="select-room" role="tabpanel">
                            <div class="mg-saerch-room" >
                                <div class="mg-book-now mt80"style="background-color: rgba(114,83,49,0.93)">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h2 class="mg-bn-title">Szobák keresése<span class="mg-bn-big">Árak &amp; Elérhetőségek</span>
                                            </h2>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="mg-bn-forms">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-group date mg-check-in">
                                                                <div class="input-group-addon"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                                <input class="form-control" type="text"
                                                                       id="exampleInputEmail1" placeholder="Bejelentkezés"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-group date mg-check-out">
                                                                <div class="input-group-addon"><i
                                                                        class="far fa-calendar-alt"></i></div>
                                                                <input class="form-control" type="text"
                                                                       id="exampleInputEmail1" placeholder="Kijelentkezés"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-3">
                                                            <div class="row">
                                                                <div class="col-6">

                                                                    <div class="cs-select cs-skin-elastic" tabindex="0">
                                                                        <select class="cs-select cs-skin-elastic">
                                                                            <option value="" disabled="" selected="">
                                                                                Felnőtt
                                                                            </option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="col-6">

                                                                    <div class="cs-select cs-skin-elastic" tabindex="0">
	                                                                    <select class="cs-select cs-skin-elastic">
                                                                            <option value="0" disabled="" selected="">
                                                                                Gyerek
                                                                            </option>
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-3">
                                                            <button class="btn btn-main btn-block" type="submit">
                                                                Ellenőrizd most
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mg-available-rooms">
                                <div class="mg-avl-room">
                                    <div class="row">
                                        <div class="col-sm-5"><a href="#"><img class="img-fluid" src="img/18.jpg" alt=""></a></div>
                                        <div class="col-sm-7">
                                            <h3 class="mg-avl-room-title"><a href="#"> Super Luxus Egyágyas szoba
                                                </a><span>18.300 Ft<sup></sup>/éj</span></h3>
                                            <p>Super Luxus Egyágyas szoba igazi kikapcsolodással. Teljes kényelemmel
                                            Reggelivel és a Miskolc Tapolca Barlangfürdő bérlettel</p>
                                            <div class="row mg-room-fecilities">
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li><i class="fa fa-bed"></i> 1 király ágy
                                                        </li>
                                                        <li><i class="fa fa-coffee"></i> Reggeli
                                                        </li>
                                                        <li><i class="far fa-sun"></i> légkondícionáló
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-down"></i> GYM létesítmény
                                                        </li>
                                                        <li><i class="fa fa-tv" aria-hidden="true"></i> TV LCD
                                                        </li>
                                                        <li><i class="fa fa-wifi"></i> Wi-fi szolgáltatás
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="nav"><a class="btn btn-main btn-next-tab" href="#personal-info" style="background-color: #705130"><i class="fa fa-spinner fa-spin fa-fw"></i> Szoba választása</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-avl-room">
                                    <div class="row">
                                        <div class="col-sm-5"><a href="#"><img class="img-fluid"
                                                                               src="img/18.jpg"
                                                                               alt=""></a></div>
                                        <div class="col-sm-7">
                                            <h3 class="mg-avl-room-title"><a href="#"> Super Luxus Kétágyas szoba
                                                    </a><span>23.900 Ft<sup> </sup>/ Éj</span></h3>
                                            <p>Super Luxus Kétágyas szoba igazi kikapcsolodással. Teljes kényelemmel
	                                            Reggelivel és a Miskolc Tapolca Barlangfürdő bérlettel</p>
                                            <div class="row mg-room-fecilities">
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li><i class="fa fa-bed" aria-hidden="true"></i></i> 2 Királyi ágy
                                                        </li>
                                                        <li><i class="fa fa-coffee"></i> Reggeli
                                                        </li>
                                                        <li><i class="far fa-sun"></i> légkondícionáló
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-down"></i> GYM Létesítmény
                                                        </li>
                                                        <li><i class="fa fa-tv"></i> TV LCD
                                                        </li>
                                                        <li><i class="fa fa-wifi"></i> Wi-fi szolgáltatás
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
	                                        <div class="nav"><a class="btn btn-main btn-next-tab" href="#personal-info" style="background-color: #705130"><i class="fa fa-spinner fa-spin fa-fw"></i> Szoba választása</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mg-avl-room">
		                            <div class="row">
			                            <div class="col-sm-5"><a href="#"><img class="img-fluid"
			                                                                   src="img/18.jpg"
			                                                                   alt=""></a></div>
			                            <div class="col-sm-7">
				                            <h3 class="mg-avl-room-title"><a href="#" style="color: #a6926d">Super Luxus Háromágyas szoba
						                            </a><span> 29.900 Ft<sup> </sup> /Éj</span></h3>
				                            <p>Super Luxus Háromágyas szoba igazi kikapcsolodással. Teljes kényelemmel
					                            Reggelivel és a Miskolc Tapolca Barlangfürdő bérlettel</p>
				                            <div class="row mg-room-fecilities">
					                            <div class="col-sm-6">
						                            <ul>
							                            <li><i class="fa fa-bed"></i> 3 Királyi ágy
							                            </li>
							                            <li><i class="fa fa-coffee"></i> Reggeli
							                            </li>
							                            <li><i class="far fa-sun"></i> Légkondícionáló
							                            </li>
						                            </ul>
					                            </div>
					                            <div class="col-sm-6">
						                            <ul>
							                            <li><i class="fa fa-arrow-circle-down"></i> GYM Létesítmény
							                            </li>
							                            <li><i class="fa fa-tv"></i> TV LCD
							                            </li>
							                            <li><i class="fa fa-wifi"></i> Wi-fi szolgáltatás
							                            </li>
						                            </ul>
					                            </div>
				                            </div>
				                            <div class="nav"><a class="btn btn-main btn-next-tab" href="#personal-info" style="background-color: #725331"><i class="fa fa-spinner fa-spin fa-fw"></i> Szoba választása</a></div>
			                            </div>
		                            </div>
	                            </div>
	                            <div class="mg-avl-room">
		                            <div class="row">
			                            <div class="col-sm-5"><a href="#"><img class="img-fluid"
			                                                                   src="img/18.jpg"
			                                                                   alt=""></a></div>
			                            <div class="col-sm-7">
				                            <h3 class="mg-avl-room-title" style="color: #a6926d"><a href="#">Super Luxus Öreg Miskolcz
						                            </a><span>39.990 Ft<sup>/ 2 szoba</sup> /Éj</span></h3>
				                            <p>Összenyitható szobák 2 fő részére
				                            két egymás melletti szoba, külön-külön fürdőszobáva
				                            A szobaárak tartalmazzák a reggelit,a wellness részleg használatot, internet hozzáférést a szobában.</p>
				                            <div class="row mg-room-fecilities">
					                            <div class="col-sm-6">
						                            <ul>
							                            <li><i class="fa fa-bed"></i> Összenyitható szobák.
							                            </li>
							                            <li><i class="fa fa-coffee"></i> Reggeli
							                            </li>
							                            <li><i class="far fa-sun"></i> Légkondicionállás
							                            </li>
						                            </ul>
					                            </div>
					                            <div class="col-sm-6">
						                            <ul>
							                            <li><i class="fa fa-arrow-circle-down"></i> GYM létesítmény
							                            </li>
							                            <li><i class="fa fa-tv"></i> TV LCD
							                            </li>
							                            <li><i class="fa fa-wifi"></i> Wi-fi szolgáltatás
							                            </li>
						                            </ul>
					                            </div>
				                            </div>
				                            <div class="nav"><a class="btn btn-main btn-next-tab" href="#personal-info" style="background-color: #725331"><i class="fa fa-spinner fa-spin fa-fw"></i> Szoba választása</a></div>
			                            </div>
		                            </div>
	                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="personal-info" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mg-book-form-personal">
                                        <h2 class="mg-sec-left-title">SZEMÉLYES ADATOK</h2>
                                        <div class="row pb40">
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Keresztnév</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Utca</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Város</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Ország</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Vezetéknév</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Házszám</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Írányítószám</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Ország</label>
                                                    <select class="custom-select">
                                                        <option value="">Válaszd ki az országodat</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="France">France</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="" disabled="true">────────</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia, Plurinational State of">Bolivia,
                                                            Plurinational State of
                                                        </option>
                                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint
                                                            Eustatius and Saba
                                                        </option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory
                                                        </option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cabo Verde">Cabo Verde</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, the Democratic Republic of the">Congo, the
                                                            Democratic Republic of the
                                                        </option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaçao">Curaçao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)
                                                        </option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories
                                                        </option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and McDonald Islands">Heard Island
                                                            and McDonald Islands
                                                        </option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)
                                                        </option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                            of
                                                        </option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea,
                                                            Democratic People's Republic of
                                                        </option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic
                                                        </option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, the former Yugoslav Republic of">
                                                            Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia,
                                                            Federated States of
                                                        </option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of
                                                        </option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine, State of">Palestine, State of</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Réunion">Réunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                        <option value="Saint Helena, Ascension and Tristan da Cunha">
                                                            Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten">Sint Maarten</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Georgia and the South Sandwich Islands">
                                                            South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United
                                                            Republic of
                                                        </option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands
                                                        </option>
                                                        <option value="United States">United States</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela, Bolivarian Republic of">Venezuela,
                                                            Bolivarian Republic of
                                                        </option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands,
                                                            British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="mg-sec-left-title">Account Info</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="tel">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="email">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Re-Password</label>
                                                    <input class="form-control" type="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix mg-terms-input">
                                            <div class="float-right">
                                                <label>
                                                    <input type="checkbox"> By Sign up you are agree with our <a
                                                        href="#">terms and condition</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="nav justify-content-between"><a
                                                class="btn btn-default btn-prev-tab active show"
                                                href="#select-room">Back</a><a
                                                class="btn btn-dark-main btn-next-tab" href="#payment">Next</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mg-cart-container">
                                        <aside class="mg-widget mt50" id="mg-room-cart">
                                            <h2 class="mg-widget-title">Foglalási részletek</h2>
                                            <div class="mg-widget-cart">
                                                <div class="mg-cart-room"><img class="img-fluid"
                                                                               src="img/18.jpg"
                                                                               alt="Delux Room">
                                                    <h3>Super Luxus Szoba</h3>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Érkezés:</strong><span></span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Kijelentkezés:</strong><span></span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Felnőttek:</strong><span></span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Gyermek:</strong><span></span>
                                                </div>
                                                <div class="mg-cart-total"><strong>Összeg:</strong><span></span>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payment" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mg-book-form-billing">
                                        <h2 class="mg-sec-left-title">SZÁMLAINFORMÁCIÓ</h2>
                                        <div class="row pb40">
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Address Line 1</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>City</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>State/Region</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Address Line 2</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Zip/Post Code</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="mg-book-form-input">
                                                    <label>Country</label>
                                                    <select class="custom-select">
                                                        <option value="">Select your country</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="France">France</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="" disabled="true">────────</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia, Plurinational State of">Bolivia,
                                                            Plurinational State of
                                                        </option>
                                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint
                                                            Eustatius and Saba
                                                        </option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory
                                                        </option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cabo Verde">Cabo Verde</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, the Democratic Republic of the">Congo, the
                                                            Democratic Republic of the
                                                        </option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaçao">Curaçao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)
                                                        </option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories
                                                        </option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and McDonald Islands">Heard Island
                                                            and McDonald Islands
                                                        </option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)
                                                        </option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                            of
                                                        </option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea,
                                                            Democratic People's Republic of
                                                        </option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic
                                                        </option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, the former Yugoslav Republic of">
                                                            Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia,
                                                            Federated States of
                                                        </option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of
                                                        </option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine, State of">Palestine, State of</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Réunion">Réunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                        <option value="Saint Helena, Ascension and Tristan da Cunha">
                                                            Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten">Sint Maarten</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Georgia and the South Sandwich Islands">
                                                            South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United
                                                            Republic of
                                                        </option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands
                                                        </option>
                                                        <option value="United States">United States</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela, Bolivarian Republic of">Venezuela,
                                                            Bolivarian Republic of
                                                        </option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands,
                                                            British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="mg-sec-left-title">Card Info</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>Card Number</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mg-book-form-input">
                                                    <label>CVV</label>
                                                    <input class="form-control" type="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mg-book-form-input">
                                                    <label>Expire</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <select class="custom-select">
                                                                <option value="">Month</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="custom-select">
                                                                <option value="">Year</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav justify-content-between"><a class="btn btn-default btn-prev-tab"
                                                                                    href="#personal-info">Back</a><a
                                                class="btn btn-dark-main btn-next-tab" href="#thank-you">Pay Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mg-cart-container">
                                        <aside class="mg-widget mt50" id="mg-room-cart">
                                            <h2 class="mg-widget-title">Foglalási részletek</h2>
                                            <div class="mg-widget-cart">
                                                <div class="mg-cart-room"><img class="img-fluid"
                                                                               src="img/18.jpg"
                                                                               alt="Delux Room">
                                                    <h3>Super Delux</h3>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Check In:</strong><span>27 Jan, 2015</span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Check Out:</strong><span>28 Jan, 2015</span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Adults:</strong><span>2</span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Child:</strong><span>1</span>
                                                </div>
                                                <div class="mg-cart-address"><strong>Your Address:</strong>
                                                    <address><strong>John Doe</strong><br> Level 13, 2 Elizabeth St,
                                                        Melbourne<br> Victoria 3000 Australia
                                                    </address>
                                                </div>
                                                <div class="mg-cart-total"><strong>Total:</strong><span>$249.99</span>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="thank-you" role="tabpanel">
                            <div class="alert alert-success alert-dismissible clearfix">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <div class="mg-alert-icon"><i class="fa fa-check"></i></div>
                                <h3 class="mg-alert-payment">Thank you! Your booking is confirmed. Invoice Sent in your
                                    email address</h3>
                            </div>
                            <div class="mg-cart-container mg-paid">
                                <aside class="mg-widget mt50" id="mg-room-cart">
                                    <h2 class="mg-widget-title">Foglalási részletek</h2>
                                    <div class="mg-widget-cart">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mg-cart-room"><img class="img-fluid"
                                                                               src="img/19.jpg"
                                                                               alt="Delux Room">
                                                    <h3>Super Delux</h3>
                                                    <p>Verbis texit statua status suo quidque concordia. Octavio,
                                                        ignavi, iudicante intereant accusamus vitiis primos ullum
                                                        paranda zenonem. Censes cadere urbanitas texit dicebas maius
                                                        tranquilli, foris morborum divinum que medium utilior crudelis
                                                        affert, quaerendum refert sequimur atqui ullus d ornamenta
                                                        consumeret ut divinum, concedo percurri elaborare.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="mg-payment-id">Your Payment ID: #105152396140</h3>
                                                <div class="mg-widget-cart-row"><strong>Check In:</strong><span></span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Check Out:</strong><span></span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Adults:</strong><span>2</span>
                                                </div>
                                                <div class="mg-widget-cart-row"><strong>Child:</strong><span>1</span>
                                                </div>
                                                <div class="mg-cart-address"><strong>Your Address:</strong>
                                                    <address><strong>John Doe</strong><br> Level 13, 2 Elizabeth St,
                                                        Melbourne<br> Victoria 3000 Australia
                                                    </address>
                                                </div>
                                                <div class="mg-cart-total"><strong>Total:</strong><span>$249.99</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jssor.slider.mini.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/selectFx.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/starrr.min.js"></script>
<script src="assets/js/nivo-lightbox.min.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js"></script>
<script src="assets/js/scripts.js"></script>
