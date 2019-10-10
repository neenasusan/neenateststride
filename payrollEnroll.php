<!doctype html>
<html>
<head>
	<title>Trial Enroll</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	<style>
/*
		#c1,
		#c2,
		#c3 {
			float: left;
			width: 33.3%;
		}
		
		#r1:after {
			content: "";
			display: table;
			clear: both;
		}
*/
	</style>
</head>

<body>


	<div style="text-align:center;">
		<form autocomplete="off" method="post" action="payrollEnrollDB.php">

			<h2>STAFF PAYROLL DEDUCTION FORM 2019</h2>


			<div>
				<div>
					<input type="radio" name="ticketset" value="1" required>SINGLE TICKET FOR $5<br>
<!--					<label for="1-for-5" class="radio-style-2-label">SINGLE TICKET FOR $5</label>-->
				</div>
				<div class="col_one_fourth">
					<input type="radio" name="ticketset" value="3">SETS OF 3 TICKETS FOR $10<br>
<!--					<label for="3-for-10" class="radio-style-2-label">SETS OF 3 TICKETS FOR $10</label>-->
				</div>
				<div class="col_one_fourth">
					<input type="radio" name="ticketset" value="8">SETS OF 8 TICKETS FOR $20<br>
<!--					<label for="8-for-20" class="radio-style-2-label">SETS OF 8 TICKETS FOR $20</label>-->
				</div>
				<div class="col_one_fourth col_last">
					<input type="radio" name="ticketset" value="15">SETS OF 15 TICKETS FOR $30<br>
<!--					<label for="15-for-30" class="radio-style-2-label">SETS OF 15 TICKETS FOR $30</label>-->
				</div>
			</div>
			<br><br>


			<div id="r1">
				<div id="c1">
					EmployeeID:<br>
					<input type="text" name="clientid"  placeholder="Your employee ID" pattern="[0-9]{8}" required>
					<br><br> Email:
					<br>
					<input type="email" name="email"  placeholder="Your Email" required>
					<br><br> First name:<br>
					<input type="text" name="fname"  placeholder="First Name" required>
					<br><br> Last Name:<br>
					<input type="text" name="lname"  placeholder="Last name" required>
					<br><br>
				</div>

				<div id="c2">
					Address:<br>
					<input type="text" name="address" value="" placeholder="Address" required>
					<br><br> City:

					<br>
					<input type="text" name="city" value="" placeholder="city" required>
					<br><br> Province:

					<br>
					<input type="text" name="province" value="" placeholder="Province" required>
					<br><br> Postal code:<br>
					<input type="text" name="pcode" value="" placeholder="postal code" required>
					<br><br>
				</div>

				<div id="c3">
					Work Phone:<br>
					<input type="text" name="wphone" value="" placeholder="Work Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
					<br><br> Home Phone:<br>
					<input type="text" name="hphone" value="" placeholder="Home Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
					<br><br> Mobile Phone:<br>
					<input type="text" name="mphone" value="" placeholder="Mobile Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
					<br><br>
				</div>

			</div>
			<br><br> PAYROLL SELECTION
			<br><br>



			<div>
				<div>
					<input id="1-for-5" class="radio-style" name="payrollselection" type="radio" value="AHS" required>
					<label for="1-for-5" class="radio-style-2-label">ALBERTA HEALTH SERVICES</label>
				</div>
				<div class="col_one_fourth">
					<input id="3-for-10" class="radio-style" name="payrollselection" type="radio" value="CW">
					<label for="3-for-10" class="radio-style-2-label"> CAREWEST</label>
				</div>
				<div class="col_one_fourth">
					<input id="8-for-20" class="radio-style" name="payrollselection" type="radio" value="CH">
					<label for="8-for-20" class="radio-style-2-label">CONVENANT HEALTH</label>
				</div>
				<div class="col_one_fourth">
					<input id="8-for-20" class="radio-style" name="payrollselection" type="radio" value="APL">
					<label for="8-for-20" class="radio-style-2-label">ALBERTA PUBLIC LABS</label>
				</div>

			</div>





			<br><br>


			<div class="col_full center">
				<label for="template-contactform-designation" class="gold-2 t24">DESIGNATION</label>
				<div class="row nobottommargin">
					<div class="col_one_sixth"></div>
					<div class="col_two_third">
						<select id="template-contactform-designation" name="optin" class="sm-form-control">
							<option value="" disabled selected>Please Select</option>
							<option value="" disabled>---------------------------</option>
							<option class="optin" value="1" required>Southern Alberta</option>
							<option class="optin" value="2">Northern Alberta</option>
							<option value="" disabled>---------------------------</option>
							<option class="optin" value="3">Addiction Services across Northern Alberta </option>
							<option class="optin" value="4">Airdrie Community Health Centre </option>
							<option class="optin" value="5">Alberta Children’s Hospital </option>
							<option class="optin" value="6">Alberta Hospital, Edmonton </option>
							<option class="optin" value="7">Anzac Community Clinic </option>
							<option class="optin" value="8">Banff Mineral Springs Hospital (Banff) </option>
							<option class="optin" value="9">Barrhead Community Cancer Centre </option>
							<option class="optin" value="10">Bassano Health Centre </option>
							<option class="optin" value="11">Beaumont Public Health Centre </option>
							<option class="optin" value="12">Beaverlodge Municipal Hospital </option>
							<option class="optin" value="13">Big Country Hospital </option>
							<option class="optin" value="14">Bonnyville Community Cancer Centre </option>
							<option class="optin" value="15">Bonnyville Health Centre </option>
							<option class="optin" value="16">Bow Valley Community Cancer Centre </option>
							<option class="optin" value="17">Brooks Community Health/Home Care </option>
							<option class="optin" value="18">Brooks Health Centre </option>
							<option class="optin" value="19">Calgary Health Centres (SMCHC, SCHC, ECHC, RRDTC) </option>
							<option class="optin" value="20">Camrose Community Cancer Centre </option>
							<option class="optin" value="21">Cancer Control Alberta </option>
							<option class="optin" value="22">Canmore General Hospital </option>
							<option class="optin" value="23">Cardston Health Centre </option>
							<option class="optin" value="24">Carewest </option>
							<option class="optin" value="25">Central Alberta Cancer Centre (Red Deer) </option>
							<option class="optin" value="26">CK Hui Heart Centre </option>
							<option class="optin" value="27">Claresholm Centre for Mental Health and Addictions </option>
							<option class="optin" value="28">Claresholm General Hospital (CGH) </option>
							<option class="optin" value="29">Claresholm Mental Health Clinic </option>
							<option class="optin" value="30">Community Health - Claresholm Health Unit </option>
							<option class="optin" value="31">Community Health Centres (Calgary) </option>
							<option class="optin" value="32">Conklin Community Clinic </option>
							<option class="optin" value="33">Coronation Hospital &amp; Care Centre </option>
							<option class="optin" value="34">Cross Cancer Institute </option>
							<option class="optin" value="35">Crowsnest Pass Health Centre </option>
							<option class="optin" value="36">Daysland Health Centre </option>
							<option class="optin" value="37">Devon General Hospital </option>
							<option class="optin" value="38">Didsbury District Health Services </option>
							<option class="optin" value="39">Drayton Valley Community Cancer Centre </option>
							<option class="optin" value="40">Drumheller Community Cancer Centre </option>
							<option class="optin" value="41">Drumheller Health Centre </option>
							<option class="optin" value="42">Edmonton General Continuing Care Centre </option>
							<option class="optin" value="43">Elnora Donation Fund </option>
							<option class="optin" value="44">Emergency Medical Services (EMS) Foundation – Calgary </option>
							<option class="optin" value="45">Eye Institute of Alberta </option>
							<option class="optin" value="46">Fairview Health Complex </option>
							<option class="optin" value="47">Fairview Homecare </option>
							<option class="optin" value="48">Foothills Medical Centre </option>
							<option class="optin" value="49">Fort Macleod Health Centre </option>
							<option class="optin" value="50">Fort McKay Health Centre </option>
							<option class="optin" value="51">Fort McMurray Community Cancer Centre </option>
							<option class="optin" value="52">Fort McMurray Queens Street Mental Health </option>
							<option class="optin" value="53">Fort McMurray Recovery Centre </option>
							<option class="optin" value="54">Fort McMurray Timberlea Mental Health Centre </option>
							<option class="optin" value="55">Fort Saskatchewan Community Hospital </option>
							<option class="optin" value="56">Glenrose Rehabilitation Hospital </option>
							<option class="optin" value="57">Grande Prairie Cancer Centre </option>
							<option class="optin" value="58">Grande Prairie Regional Hospital </option>
							<option class="optin" value="59">Grey Nuns Hospital </option>
							<option class="optin" value="60">Grimshaw/Berwyn Community Health Care Centre </option>
							<option class="optin" value="61">High River Community Cancer Centre </option>
							<option class="optin" value="62">High River General Hospital </option>
							<option class="optin" value="63">High River Health Unit </option>
							<option class="optin" value="64">Hinton Community Cancer Centre </option>
							<option class="optin" value="65">Hinton Healthcare Centre </option>
							<option class="optin" value="66">Hythe Continuing Care Centre </option>
							<option class="optin" value="67">Jack Ady Cancer Centre (Lethbridge) </option>
							<option class="optin" value="68">Kaye Edmonton Clinic </option>
							<option class="optin" value="69">Killam Health Centre </option>
							<option class="optin" value="70">Lac La Biche Healthcare Centre </option>
							<option class="optin" value="71">Lacombe Hospital and Care Centre </option>
							<option class="optin" value="72">Ladner Treatment Centre, Addiction Services </option>
							<option class="optin" value="73">Leduc Community Hospital </option>
							<option class="optin" value="74">Leduc Public Health Centre </option>
							<option class="optin" value="75">Lloydminster Community Cancer Centre </option>
							<option class="optin" value="76">Lois Hole Hospital for Women </option>
							<option class="optin" value="77">Manning Community Health Centre </option>
							<option class="optin" value="78">Margery E. Yuill Cancer Centre (Medicine Hat) </option>
							<option class="optin" value="79">Mary Immaculate Care Centre </option>
							<option class="optin" value="80">Mayerthorpe Health Care Centre </option>
							<option class="optin" value="81">Mazankowski Alberta Heart Institute </option>
							<option class="optin" value="82">Mental Health Clinics across Northern Alberta </option>
							<option class="optin" value="83">Mental Health Foundation </option>
							<option class="optin" value="84">Misericordia Hospital </option>
							<option class="optin" value="85">Nanton Community Health Centre </option>
							<option class="optin" value="86">North East Community Health Centre </option>
							<option class="optin" value="87">Northern Lights Regional Health Centre </option>
							<option class="optin" value="88">Oilfields General Hospital (Black Diamond) </option>
							<option class="optin" value="89">Okotoks Health &amp; Wellness Centre </option>
							<option class="optin" value="90">Our Lady of the Rosary Hospital </option>
							<option class="optin" value="91">Oyen Community Health Services </option>
							<option class="optin" value="92">Peace River Community Cancer Centre </option>
							<option class="optin" value="93">Peace River Community Health Centre </option>
							<option class="optin" value="94">Peter Lougheed Centre </option>
							<option class="optin" value="95">Pincher Creek Health Centre </option>
							<option class="optin" value="96">Ponoka Community Health Centre </option>
							<option class="optin" value="97">Ponoka Hospital &amp; Care Centre </option>
							<option class="optin" value="98">Queen Elizabeth II Hospital </option>
							<option class="optin" value="99">Regional EMS Foundation </option>
							<option class="optin" value="100">Rockyview General Hospital </option>
							<option class="optin" value="101">Royal Alexandra Hospital </option>
							<option class="optin" value="102">Sherritt Health Services Centre </option>
							<option class="optin" value="103">Silver Willow Lodge - DAL Unit (Nanton) </option>
							<option class="optin" value="104">South Health Campus </option>
							<option class="optin" value="105">St. Joseph&#39;s Auxiliary Hospital </option>
							<option class="optin" value="106">St. Joseph&#39;s General Hospital (Vegreville) </option>
							<option class="optin" value="107">St. Joseph&#39;s Home (Medicine Hat) </option>
							<option class="optin" value="108">St. Mary&#39;s Health Care Centre </option>
							<option class="optin" value="109">St. Mary&#39;s Hospital (Camrose) </option>
							<option class="optin" value="110">St. Michael&#39;s Health Centre (Lethbridge) </option>
							<option class="optin" value="111">St. Therese Place (Lethbridge) </option>
							<option class="optin" value="112">Stettler Hospital &amp; Care Centre </option>
							<option class="optin" value="113">Stollery Children&#39;s Hospital </option>
							<option class="optin" value="114">Strathcona Community Hospital </option>
							<option class="optin" value="115">Strathmore Hospital </option>
							<option class="optin" value="116">Sturgeon Community Hospital </option>
							<option class="optin" value="117">Swan Hills Healthcare Centre </option>
							<option class="optin" value="118">Sylvan Lake Urgent Care </option>
							<option class="optin" value="119">Taber Health Centre </option>
							<option class="optin" value="120">Taber Health Foundation - Greatest needs </option>
							<option class="optin" value="121">Thickwood Public Health Clinic </option>
							<option class="optin" value="122">Thorsby Public Health Centre </option>
							<option class="optin" value="123">Three Hills Health Initiative </option>
							<option class="optin" value="124">Tofield Health Centre </option>
							<option class="optin" value="125">Tom Baker Cancer Centre </option>
							<option class="optin" value="126">University of Alberta Hospital </option>
							<option class="optin" value="127">Villa Caritas </option>
							<option class="optin" value="128">Vulcan Community Health Centre </option>
							<option class="optin" value="129">Wainwright Health Centre </option>
							<option class="optin" value="130">Westview Health Centre </option>
							<option class="optin" value="131">Willow Creek Continuing Care Centre </option>
							<option class="optin" value="132">Worsley Community Health Services </option>
							<option class="optin" value="133">Youville Home (St. Albert) </option>
						</select>
					</div>
				</div>
			</div>


			<br><br>
			<input type="submit" value="Submit">
		</form>
	</div>




</body>
</html>