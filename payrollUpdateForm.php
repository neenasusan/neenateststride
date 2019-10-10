
<form method="post" action="payrollUpdateFormDB.php">
	<h1>UPDATE YOUR INFO HERE</h1>
	<h2>Welcome Back  <?php echo strtoupper("   $name !!"); ?></h2>
	
	<div id="r1">
		<div id="c1">
			EmployeeID:<br>
			<input type="hidden" name="clientid" value="<?php echo "$clientid"; ?>" placeholder="Your employee ID" pattern="[0-9]{8}" required>
			<br><br> Email:
			<br>
			<input type="hidden" name="email"  value="<?php echo "$email"; ?>" placeholder="Your Email" required>
			<br><br> Address:<br>
			<input type="text" name="address" value="<?php echo "$address"; ?>"  required>
			<br><br> Postal Code:<br>
			<input type="text" name="pcode" value="<?php echo "$pcode"; ?>" required>
			<br><br>
		</div>
		
		
		<div>
				<div>
					<input type="radio" name="ticketset" value="1" <?php if($ticketset=='1'){?> checked<?php } ?> required>SINGLE TICKET FOR $5<br>
<!--					<label for="1-for-5" class="radio-style-2-label">SINGLE TICKET FOR $5</label>-->
				</div>
				<div class="col_one_fourth">
					<input type="radio" name="ticketset" value="3" <?php if($ticketset=='3'){?> checked<?php } ?> >SETS OF 3 TICKETS FOR $10<br>
<!--					<label for="3-for-10" class="radio-style-2-label">SETS OF 3 TICKETS FOR $10</label>-->
				</div>
				<div class="col_one_fourth">
					<input type="radio" name="ticketset" value="8" <?php if($ticketset=='8'){?> checked<?php } ?> >SETS OF 8 TICKETS FOR $20<br>
<!--					<label for="8-for-20" class="radio-style-2-label">SETS OF 8 TICKETS FOR $20</label>-->
				</div>
				<div class="col_one_fourth col_last">
					<input type="radio" name="ticketset" value="15" <?php if($ticketset=='15'){?> checked<?php } ?> >SETS OF 15 TICKETS FOR $30<br>
<!--					<label for="15-for-30" class="radio-style-2-label">SETS OF 15 TICKETS FOR $30</label>-->
				</div>
		</div>
		
		<br><br><br>
		
		<div class="col_full center">
				<label for="template-contactform-designation" class="gold-2 t24">DESIGNATION</label>
				<div class="row nobottommargin">
					<div class="col_one_sixth"></div>
					<div class="col_two_third">
						<select id="template-contactform-designation" name="optin" class="sm-form-control">
							<option value="" disabled selected>Please Select</option>
							<option value="" disabled>---------------------------</option>
							<option class="optin" value="1" <?php if($optin=='1'){?> selected<?php } ?> required>Southern Alberta</option>
							<option class="optin" value="2" <?php if($optin=='2'){?> selected<?php } ?> >Northern Alberta</option>
							<option value="" disabled>---------------------------</option>
							<option class="optin" value="3" <?php if($optin=='3'){?> selected<?php } ?> >Addiction Services across Northern Alberta </option>
							<option class="optin" value="4" <?php if($optin=='4'){?> selected<?php } ?> >Airdrie Community Health Centre </option>
							<option class="optin" value="5" <?php if($optin=='5'){?> selected<?php } ?> >Alberta Children’s Hospital </option>
							<option class="optin" value="6" <?php if($optin=='6'){?> selected<?php } ?> >Alberta Hospital, Edmonton </option>
							<option class="optin" value="7" <?php if($optin=='7'){?> selected<?php } ?> >Anzac Community Clinic </option>
							<option class="optin" value="8" <?php if($optin=='8'){?> selected<?php } ?> >Banff Mineral Springs Hospital (Banff) </option>
							<option class="optin" value="9" <?php if($optin=='9'){?> selected<?php } ?> >Barrhead Community Cancer Centre </option>
							<option class="optin" value="10" <?php if($optin=='10'){?> selected<?php } ?> >Bassano Health Centre </option>
							<option class="optin" value="11" <?php if($optin=='11'){?> selected<?php } ?> >Beaumont Public Health Centre </option>
							<option class="optin" value="12" <?php if($optin=='12'){?> selected<?php } ?> >Beaverlodge Municipal Hospital </option>
							<option class="optin" value="13" <?php if($optin=='13'){?> selected<?php } ?> >Big Country Hospital </option>
							<option class="optin" value="14" <?php if($optin=='14'){?> selected<?php } ?> >Bonnyville Community Cancer Centre </option>
							<option class="optin" value="15" <?php if($optin=='15'){?> selected<?php } ?> >Bonnyville Health Centre </option>
							<option class="optin" value="16" <?php if($optin=='16'){?> selected<?php } ?> >Bow Valley Community Cancer Centre </option>
							<option class="optin" value="17" <?php if($optin=='17'){?> selected<?php } ?> >Brooks Community Health/Home Care </option>
							<option class="optin" value="18" <?php if($optin=='18'){?> selected<?php } ?> >Brooks Health Centre </option>
							<option class="optin" value="19" <?php if($optin=='19'){?> selected<?php } ?> >Calgary Health Centres (SMCHC, SCHC, ECHC, RRDTC) </option>
							<option class="optin" value="20" <?php if($optin=='20'){?> selected<?php } ?> >Camrose Community Cancer Centre </option>
							<option class="optin" value="21" <?php if($optin=='21'){?> selected<?php } ?> >Cancer Control Alberta </option>
							<option class="optin" value="22" <?php if($optin=='22'){?> selected<?php } ?> >Canmore General Hospital </option>
							<option class="optin" value="23" <?php if($optin=='23'){?> selected<?php } ?> >Cardston Health Centre </option>
							<option class="optin" value="24" <?php if($optin=='24'){?> selected<?php } ?> >Carewest </option>
							<option class="optin" value="25" <?php if($optin=='25'){?> selected<?php } ?> >Central Alberta Cancer Centre (Red Deer) </option>
							<option class="optin" value="26" <?php if($optin=='26'){?> selected<?php } ?> >CK Hui Heart Centre </option>
							<option class="optin" value="27" <?php if($optin=='27'){?> selected<?php } ?> >Claresholm Centre for Mental Health and Addictions </option>
							<option class="optin" value="28" <?php if($optin=='28'){?> selected<?php } ?> >Claresholm General Hospital (CGH) </option>
							<option class="optin" value="29" <?php if($optin=='29'){?> selected<?php } ?> >Claresholm Mental Health Clinic </option>
							<option class="optin" value="30" <?php if($optin=='30'){?> selected<?php } ?> >Community Health - Claresholm Health Unit </option>
							<option class="optin" value="31" <?php if($optin=='31'){?> selected<?php } ?> >Community Health Centres (Calgary) </option>
							<option class="optin" value="32" <?php if($optin=='32'){?> selected<?php } ?> >Conklin Community Clinic </option>
							<option class="optin" value="33" <?php if($optin=='33'){?> selected<?php } ?> >Coronation Hospital &amp; Care Centre </option>
							<option class="optin" value="34" <?php if($optin=='34'){?> selected<?php } ?> >Cross Cancer Institute </option>
							<option class="optin" value="35" <?php if($optin=='35'){?> selected<?php } ?> >Crowsnest Pass Health Centre </option>
							<option class="optin" value="36" <?php if($optin=='36'){?> selected<?php } ?> >Daysland Health Centre </option>
							<option class="optin" value="37" <?php if($optin=='37'){?> selected<?php } ?> >Devon General Hospital </option>
							<option class="optin" value="38" <?php if($optin=='38'){?> selected<?php } ?> >Didsbury District Health Services </option>
							<option class="optin" value="39" <?php if($optin=='39'){?> selected<?php } ?> >Drayton Valley Community Cancer Centre </option>
							<option class="optin" value="40" <?php if($optin=='40'){?> selected<?php } ?> >Drumheller Community Cancer Centre </option>
							<option class="optin" value="41" <?php if($optin=='41'){?> selected<?php } ?> >Drumheller Health Centre </option>
							<option class="optin" value="42" <?php if($optin=='42'){?> selected<?php } ?> >Edmonton General Continuing Care Centre </option>
							<option class="optin" value="43" <?php if($optin=='43'){?> selected<?php } ?> >Elnora Donation Fund </option>
							<option class="optin" value="44" <?php if($optin=='44'){?> selected<?php } ?> >Emergency Medical Services (EMS) Foundation – Calgary </option>
							<option class="optin" value="45" <?php if($optin=='45'){?> selected<?php } ?> >Eye Institute of Alberta </option>
							<option class="optin" value="46" <?php if($optin=='46'){?> selected<?php } ?> >Fairview Health Complex </option>
							<option class="optin" value="47" <?php if($optin=='47'){?> selected<?php } ?> >Fairview Homecare </option>
							<option class="optin" value="48" <?php if($optin=='48'){?> selected<?php } ?> >Foothills Medical Centre </option>
							<option class="optin" value="49" <?php if($optin=='49'){?> selected<?php } ?> >Fort Macleod Health Centre </option>
							<option class="optin" value="50" <?php if($optin=='50'){?> selected<?php } ?> >Fort McKay Health Centre </option>
							<option class="optin" value="51" <?php if($optin=='51'){?> selected<?php } ?> >Fort McMurray Community Cancer Centre </option>
							<option class="optin" value="52" <?php if($optin=='52'){?> selected<?php } ?> >Fort McMurray Queens Street Mental Health </option>
							<option class="optin" value="53" <?php if($optin=='53'){?> selected<?php } ?> >Fort McMurray Recovery Centre </option>
							<option class="optin" value="54" <?php if($optin=='54'){?> selected<?php } ?> >Fort McMurray Timberlea Mental Health Centre </option>
							<option class="optin" value="55" <?php if($optin=='55'){?> selected<?php } ?> >Fort Saskatchewan Community Hospital </option>
							<option class="optin" value="56" <?php if($optin=='56'){?> selected<?php } ?> >Glenrose Rehabilitation Hospital </option>
							<option class="optin" value="57" <?php if($optin=='57'){?> selected<?php } ?> >Grande Prairie Cancer Centre </option>
							<option class="optin" value="58" <?php if($optin=='58'){?> selected<?php } ?> >Grande Prairie Regional Hospital </option>
							<option class="optin" value="59" <?php if($optin=='59'){?> selected<?php } ?> >Grey Nuns Hospital </option>
							<option class="optin" value="60" <?php if($optin=='60'){?> selected<?php } ?> >Grimshaw/Berwyn Community Health Care Centre </option>
							<option class="optin" value="61" <?php if($optin=='61'){?> selected<?php } ?> >High River Community Cancer Centre </option>
							<option class="optin" value="62" <?php if($optin=='62'){?> selected<?php } ?> >High River General Hospital </option>
							<option class="optin" value="63" <?php if($optin=='63'){?> selected<?php } ?> >High River Health Unit </option>
							<option class="optin" value="64" <?php if($optin=='64'){?> selected<?php } ?>>Hinton Community Cancer Centre </option>
							<option class="optin" value="65" <?php if($optin=='65'){?> selected<?php } ?>>Hinton Healthcare Centre </option>
							<option class="optin" value="66" <?php if($optin=='66'){?> selected<?php } ?>>Hythe Continuing Care Centre </option>
							<option class="optin" value="67" <?php if($optin=='67'){?> selected<?php } ?>>Jack Ady Cancer Centre (Lethbridge) </option>
							<option class="optin" value="68" <?php if($optin=='68'){?> selected<?php } ?>>Kaye Edmonton Clinic </option>
							<option class="optin" value="69" <?php if($optin=='69'){?> selected<?php } ?>>Killam Health Centre </option>
							<option class="optin" value="70" <?php if($optin=='70'){?> selected<?php } ?>>Lac La Biche Healthcare Centre </option>
							<option class="optin" value="71" <?php if($optin=='71'){?> selected<?php } ?>>Lacombe Hospital and Care Centre </option>
							<option class="optin" value="72" <?php if($optin=='72'){?> selected<?php } ?>>Ladner Treatment Centre, Addiction Services </option>
							<option class="optin" value="73" <?php if($optin=='73'){?> selected<?php } ?>>Leduc Community Hospital </option>
							<option class="optin" value="74" <?php if($optin=='74'){?> selected<?php } ?>>Leduc Public Health Centre </option>
							<option class="optin" value="75" <?php if($optin=='75'){?> selected<?php } ?>>Lloydminster Community Cancer Centre </option>
							<option class="optin" value="76" <?php if($optin=='76'){?> selected<?php } ?>>Lois Hole Hospital for Women </option>
							<option class="optin" value="77" <?php if($optin=='77'){?> selected<?php } ?>>Manning Community Health Centre </option>
							<option class="optin" value="78" <?php if($optin=='78'){?> selected<?php } ?>>Margery E. Yuill Cancer Centre (Medicine Hat) </option>
							<option class="optin" value="79" <?php if($optin=='79'){?> selected<?php } ?>>Mary Immaculate Care Centre </option>
							<option class="optin" value="80" <?php if($optin=='80'){?> selected<?php } ?>>Mayerthorpe Health Care Centre </option>
							<option class="optin" value="81" <?php if($optin=='81'){?> selected<?php } ?> >Mazankowski Alberta Heart Institute </option>
							<option class="optin" value="82" <?php if($optin=='82'){?> selected<?php } ?> >Mental Health Clinics across Northern Alberta </option>
							<option class="optin" value="83" <?php if($optin=='83'){?> selected<?php } ?> >Mental Health Foundation </option>
							<option class="optin" value="84" <?php if($optin=='84'){?> selected<?php } ?> >Misericordia Hospital </option>
							<option class="optin" value="85" <?php if($optin=='85'){?> selected<?php } ?> >Nanton Community Health Centre </option>
							<option class="optin" value="86" <?php if($optin=='86'){?> selected<?php } ?> >North East Community Health Centre </option>
							<option class="optin" value="87" <?php if($optin=='87'){?> selected<?php } ?> >Northern Lights Regional Health Centre </option>
							<option class="optin" value="88" <?php if($optin=='88'){?> selected<?php } ?> >Oilfields General Hospital (Black Diamond) </option>
							<option class="optin" value="89" <?php if($optin=='89'){?> selected<?php } ?> >Okotoks Health &amp; Wellness Centre </option>
							<option class="optin" value="90" <?php if($optin=='90'){?> selected<?php } ?> >Our Lady of the Rosary Hospital </option>
							<option class="optin" value="91" <?php if($optin=='91'){?> selected<?php } ?> >Oyen Community Health Services </option>
							<option class="optin" value="92" <?php if($optin=='92'){?> selected<?php } ?> >Peace River Community Cancer Centre </option>
							<option class="optin" value="93" <?php if($optin=='93'){?> selected<?php } ?> >Peace River Community Health Centre </option>
							<option class="optin" value="94" <?php if($optin=='94'){?> selected<?php } ?> >Peter Lougheed Centre </option>
							<option class="optin" value="95" <?php if($optin=='95'){?> selected<?php } ?> >Pincher Creek Health Centre </option>
							<option class="optin" value="96" <?php if($optin=='96'){?> selected<?php } ?> >Ponoka Community Health Centre </option>
							<option class="optin" value="97" <?php if($optin=='97'){?> selected<?php } ?> >Ponoka Hospital &amp; Care Centre </option>
							<option class="optin" value="98" <?php if($optin=='98'){?> selected<?php } ?> >Queen Elizabeth II Hospital </option>
							<option class="optin" value="99" <?php if($optin=='99'){?> selected<?php } ?> >Regional EMS Foundation </option>
							<option class="optin" value="100" <?php if($optin=='100'){?> selected<?php } ?> >Rockyview General Hospital </option>
							<option class="optin" value="101" <?php if($optin=='101'){?> selected<?php } ?> >Royal Alexandra Hospital </option>
							<option class="optin" value="102" <?php if($optin=='102'){?> selected<?php } ?> >Sherritt Health Services Centre </option>
							<option class="optin" value="103" <?php if($optin=='103'){?> selected<?php } ?> >Silver Willow Lodge - DAL Unit (Nanton) </option>
							<option class="optin" value="104" <?php if($optin=='104'){?> selected<?php } ?> >South Health Campus </option>
							<option class="optin" value="105" <?php if($optin=='105'){?> selected<?php } ?> >St. Joseph&#39;s Auxiliary Hospital </option>
							<option class="optin" value="106" <?php if($optin=='106'){?> selected<?php } ?> >St. Joseph&#39;s General Hospital (Vegreville) </option>
							<option class="optin" value="107" <?php if($optin=='107'){?> selected<?php } ?> >St. Joseph&#39;s Home (Medicine Hat) </option>
							<option class="optin" value="108" <?php if($optin=='108'){?> selected<?php } ?> >St. Mary&#39;s Health Care Centre </option>
							<option class="optin" value="109" <?php if($optin=='109'){?> selected<?php } ?> >St. Mary&#39;s Hospital (Camrose) </option>
							<option class="optin" value="110" <?php if($optin=='110'){?> selected<?php } ?> >St. Michael&#39;s Health Centre (Lethbridge) </option>
							<option class="optin" value="111" <?php if($optin=='111'){?> selected<?php } ?> >St. Therese Place (Lethbridge) </option>
							<option class="optin" value="112" <?php if($optin=='112'){?> selected<?php } ?> >Stettler Hospital &amp; Care Centre </option>
							<option class="optin" value="113" <?php if($optin=='113'){?> selected<?php } ?> >Stollery Children&#39;s Hospital </option>
							<option class="optin" value="114" <?php if($optin=='114'){?> selected<?php } ?> >Strathcona Community Hospital </option>
							<option class="optin" value="115" <?php if($optin=='115'){?> selected<?php } ?> >Strathmore Hospital </option>
							<option class="optin" value="116" <?php if($optin=='116'){?> selected<?php } ?> >Sturgeon Community Hospital </option>
							<option class="optin" value="117" <?php if($optin=='117'){?> selected<?php } ?> >Swan Hills Healthcare Centre </option>
							<option class="optin" value="118" <?php if($optin=='118'){?> selected<?php } ?> >Sylvan Lake Urgent Care </option>
							<option class="optin" value="119" <?php if($optin=='119'){?> selected<?php } ?> >Taber Health Centre </option>
							<option class="optin" value="120" <?php if($optin=='120'){?> selected<?php } ?> >Taber Health Foundation - Greatest needs </option>
							<option class="optin" value="121" <?php if($optin=='121'){?> selected<?php } ?> >Thickwood Public Health Clinic </option>
							<option class="optin" value="122" <?php if($optin=='122'){?> selected<?php } ?> >Thorsby Public Health Centre </option>
							<option class="optin" value="123" <?php if($optin=='123'){?> selected<?php } ?> >Three Hills Health Initiative </option>
							<option class="optin" value="124" <?php if($optin=='124'){?> selected<?php } ?> >Tofield Health Centre </option>
							<option class="optin" value="125" <?php if($optin=='125'){?> selected<?php } ?> >Tom Baker Cancer Centre </option>
							<option class="optin" value="126" <?php if($optin=='126'){?> selected<?php } ?> >University of Alberta Hospital </option>
							<option class="optin" value="127" <?php if($optin=='127'){?> selected<?php } ?> >Villa Caritas </option>
							<option class="optin" value="128" <?php if($optin=='128'){?> selected<?php } ?> >Vulcan Community Health Centre </option>
							<option class="optin" value="129" <?php if($optin=='129'){?> selected<?php } ?> >Wainwright Health Centre </option>
							<option class="optin" value="130" <?php if($optin=='130'){?> selected<?php } ?> >Westview Health Centre </option>
							<option class="optin" value="131" <?php if($optin=='131'){?> selected<?php } ?> >Willow Creek Continuing Care Centre </option>
							<option class="optin" value="132" <?php if($optin=='132'){?> selected<?php } ?> >Worsley Community Health Services </option>
							<option class="optin" value="133" <?php if($optin=='133'){?> selected<?php } ?> >Youville Home (St. Albert) </option>
						</select>
					</div>
				</div>
			</div>
  <br><br><br>
		<input type="submit" value="Submit">
</form> 
