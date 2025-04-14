<x-app-layout>
  <html>
  <title w3-color-white>Carbon Footprint</title> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Carbon Footprint') }}
        </h2>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, follow">
<style type="text/css" id="operaUserStyle"></style></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">


<div class="fp-header">
    <h1>carbon footprint calculator</h1>
</div>
<form method="post" id="footprint-form" action="/footprintcalc" novalidate="novalidate">
    <div id="fp-tabs" class="container">
        <ul class="nav nav-pills" id="footprintcalculator_tabs">
            <li class="active ok-fp-tabs" id="household-pill">
                <a data-toggle="tab" href="/footprintcalc#household-tab">Household <i id="household-error" class="fa fa-exclamation-circle fb-hide-error-icon"></i></a>
            </li>
            <li class="ok-fp-tabs" id="transport-pill">
                <a data-toggle="tab" href="/footprintcalc#transport-tab">Transport <i id="transport-error" class="fa fa-exclamation-circle fb-hide-error-icon"></i></a>
            </li>
            <li class="ok-fp-tabs" id="lifestyle-pill">
                <a data-toggle="tab" href="/footprintcalc#lifestyle-tab">Lifestyle <i id="lifestyle-error" class="fa fa-exclamation-circle fb-hide-error-icon"></i></a>
            </li>
        </ul>
        <div class="container tab-content">
            <!-- #region Household -->
            <div class="tab-pane active" id="household-tab">
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">About your household</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-row">
                    <div class="col-md-4 fp-desc">Number of people in the household</div>
                    <div class="col-md-4 col-xs-12 fp-desc">
                        <input type="number" value="4" class="fp-textfield" data-val="true" data-val-range="Household size  must be from 1 to 12" data-val-range-max="12" data-val-range-min="1" data-val-required="The HouseholdSize field is required." id="HouseholdViewModel_HouseholdSize" name="HouseholdViewModel.HouseholdSize">
                    </div>
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.HouseholdSize" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Country of residence</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row"><select class="fp-dropdown-list select2-hidden-accessible" data-val="true" data-val-required="Please select your Country of Residence" id="selectedCountry" name="HouseholdViewModel.SelectedResidenceCountryId" onchange="toggleNycFerry()" tabindex="-1" aria-hidden="true"><option value="">Select country</option>
                    <option value="86">Afghanistan</option>
                    <option value="87">Albania</option>
                    <option value="88">Algeria</option>
                    <option value="90">Andorra</option>
                    <option value="91">Angola</option>
                    <option value="94">Antigua and Barbuda</option>
                    <option value="3">Argentina</option>
                    <option value="4">Armenia</option>
                    <option value="6">Australia</option>
                    <option value="7">Austria</option>
                    <option value="8">Azerbaijan</option>
                    <option value="9">Bahamas</option>
                    <option value="95">Bahrain</option>
                    <option value="10">Bangladesh</option>
                    <option value="96">Barbados</option>
                    <option value="11">Belarus</option>
                    <option value="12">Belgium</option>
                    <option value="13">Belize</option>
                    <option value="97">Benin</option>
                    <option value="98">Bhutan</option>
                    <option value="15">Bolivia</option>
                    <option value="16">Bosnia and Herzegowina</option>
                    <option value="99">Botswana</option>
                    <option value="17">Brazil</option>
                    <option value="102">Brunei Darussalam</option>
                    <option value="18">Bulgaria</option>
                    <option value="103">Burkina Faso</option>
                    <option value="104">Burundi</option>
                    <option value="105">Cambodia</option>
                    <option value="106">Cameroon</option>
                    <option value="2">Canada</option>
                    <option value="107">Cape Verde</option>
                    <option value="108">Central African Republic</option>
                    <option value="109">Chad</option>
                    <option value="20">Chile</option>
                    <option value="21">China</option>
                    <option value="22">Colombia</option>
                    <option value="112">Comoros</option>
                    <option value="113">Congo</option>
                    <option value="242">Congo, Democratic Republic of</option>
                    <option value="114">Cook Islands</option>
                    <option value="23">Costa Rica</option>
                    <option value="115">Cote D'Ivoire</option>
                    <option value="24">Croatia</option>
                    <option value="25">Cuba</option>
                    <option value="26">Cyprus</option>
                    <option value="27">Czech Republic</option>
                    <option value="28">Denmark</option>
                    <option value="116">Djibouti</option>
                    <option value="117">Dominica</option>
                    <option value="29">Dominican Republic</option>
                    <option value="30">Ecuador</option>
                    <option value="31">Egypt</option>
                    <option value="118">El Salvador</option>
                    <option value="119">Equatorial Guinea</option>
                    <option value="120">Eritrea</option>
                    <option value="121">Estonia</option>
                    <option value="122">Ethiopia</option>
                    <option value="125">Fiji</option>
                    <option value="32">Finland</option>
                    <option value="33">France</option>
                    <option value="129">Gabon</option>
                    <option value="130">Gambia</option>
                    <option value="34">Georgia</option>
                    <option value="35">Germany</option>
                    <option value="131">Ghana</option>
                    <option value="37">Greece</option>
                    <option value="133">Grenada</option>
                    <option value="38">Guatemala</option>
                    <option value="136">Guinea</option>
                    <option value="137">Guinea-bissau</option>
                    <option value="138">Guyana</option>
                    <option value="139">Haiti</option>
                    <option value="141">Honduras</option>
                    <option value="40">Hungary</option>
                    <option value="142">Iceland</option>
                    <option value="41">India</option>
                    <option value="42">Indonesia</option>
                    <option value="143">Iran (Islamic Republic of)</option>
                    <option value="144">Iraq</option>
                    <option value="43">Ireland</option>
                    <option value="44">Israel</option>
                    <option value="45">Italy</option>
                    <option value="46">Jamaica</option>
                    <option value="47">Japan</option>
                    <option value="48">Jordan</option>
                    <option value="49">Kazakhstan</option>
                    <option value="145">Kenya</option>
                    <option value="146">Kiribati</option>
                    <option value="147">Korea</option>
                    <option value="50">Korea, Democratic People's Republic of</option>
                    <option value="51">Kuwait</option>
                    <option value="148">Kyrgyzstan</option>
                    <option value="149">Lao People's Democratic Republic</option>
                    <option value="150">Latvia</option>
                    <option value="151">Lebanon</option>
                    <option value="152">Lesotho</option>
                    <option value="153">Liberia</option>
                    <option value="154">Libyan Arab Jamahiriya</option>
                    <option value="155">Liechtenstein</option>
                    <option value="156">Lithuania</option>
                    <option value="157">Luxembourg</option>
                    <option value="159">Macedonia</option>
                    <option value="160">Madagascar</option>
                    <option value="161">Malawi</option>
                    <option value="52">Malaysia</option>
                    <option value="162">Maldives</option>
                    <option value="163">Mali</option>
                    <option value="164">Malta</option>
                    <option value="165">Marshall Islands</option>
                    <option value="167">Mauritania</option>
                    <option value="168">Mauritius</option>
                    <option value="53">Mexico</option>
                    <option value="170">Micronesia</option>
                    <option value="171">Moldova</option>
                    <option value="172">Monaco</option>
                    <option value="173">Mongolia</option>
                    <option value="174">Montenegro</option>
                    <option value="176">Morocco</option>
                    <option value="177">Mozambique</option>
                    <option value="178">Myanmar</option>
                    <option value="179">Namibia</option>
                    <option value="180">Nauru</option>
                    <option value="181">Nepal</option>
                    <option value="54">Netherlands</option>
                    <option value="55">New Zealand</option>
                    <option value="184">Nicaragua</option>
                    <option value="185">Niger</option>
                    <option value="186">Nigeria</option>
                    <option value="187">Niue</option>
                    <option value="56">Norway</option>
                    <option value="190">Oman</option>
                    <option value="57">Pakistan</option>
                    <option value="191">Palau</option>
                    <option value="244">Palestine, State of</option>
                    <option value="192">Panama</option>
                    <option value="193">Papua New Guinea</option>
                    <option value="58">Paraguay</option>
                    <option value="59">Peru</option>
                    <option value="60">Philippines</option>
                    <option value="61">Poland</option>
                    <option value="62">Portugal</option>
                    <option value="64">Qatar</option>
                    <option value="65">Romania</option>
                    <option value="66">Russia</option>
                    <option value="196">Rwanda</option>
                    <option value="197">Saint Kitts and Nevis</option>
                    <option value="198">Saint Lucia</option>
                    <option value="199">Saint Vincent and the Grenadines</option>
                    <option value="200">Samoa</option>
                    <option value="201">San Marino</option>
                    <option value="202">Sao Tome and Principe</option>
                    <option value="67">Saudi Arabia</option>
                    <option value="203">Senegal</option>
                    <option value="85">Serbia</option>
                    <option value="204">Seychelles</option>
                    <option value="205">Sierra Leone</option>
                    <option value="68">Singapore</option>
                    <option value="69">Slovakia (Slovak Republic)</option>
                    <option value="70">Slovenia</option>
                    <option value="206">Solomon Islands</option>
                    <option value="207">Somalia</option>
                    <option value="71">South Africa</option>
                    <option value="243">South Sudan</option>
                    <option value="72">Spain</option>
                    <option value="209">Sri Lanka</option>
                    <option value="212">Sudan</option>
                    <option value="213">Suriname</option>
                    <option value="215">Swaziland</option>
                    <option value="73">Sweden</option>
                    <option value="74">Switzerland</option>
                    <option value="216">Syrian Arab Republic</option>
                    <option value="217">Tajikistan</option>
                    <option value="218">Tanzania</option>
                    <option value="76">Thailand</option>
                    <option value="245">Timor-Leste</option>
                    <option value="219">Togo</option>
                    <option value="221">Tonga</option>
                    <option value="222">Trinidad and Tobago</option>
                    <option value="223">Tunisia</option>
                    <option value="77">Turkey</option>
                    <option value="224">Turkmenistan</option>
                    <option value="226">Tuvalu</option>
                    <option value="227">Uganda</option>
                    <option value="78">Ukraine</option>
                    <option value="79">United Arab Emirates</option>
                    <option value="80">United Kingdom</option>
                    <option value="1">United States</option>
                    <option value="82">Uruguay</option>
                    <option value="83">Uzbekistan</option>
                    <option value="228">Vanuatu</option>
                    <option value="229">Vatican City State (Holy See)</option>
                    <option value="84">Venezuela</option>
                    <option value="230">Viet Nam</option>
                    <option value="235">Yemen</option>
                    <option value="236">Zambia</option>
                    <option value="237">Zimbabwe</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-selectedCountry-container"><span class="select2-selection__rendered" id="select2-selectedCountry-container"><span class="select2-selection__placeholder">Select country</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.SelectedResidenceCountryId" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div id="cityRow" class="row fp-dropdown-row" style="display: none;">
                    <div class="col-md-4 fp-desc">City</div>
                    <div class="col-md-4 fp-dropdown-row"><select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedCityId field is required." id="selectedCity" name="HouseholdViewModel.SelectedCityId" onchange="toggleNycFerry()"></select></div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-4 fp-desc">Size of housing (m2)</div>
                    <div class="col-md-4 col-xs-12 fp-desc"><input type="number" value="100" class="fp-textfield" data-val="true" data-val-range="Housing size must be from 25 to 1000" data-val-range-max="1000" data-val-range-min="25" data-val-required="The HousingSize field is required." id="HouseholdViewModel_HousingSize" name="HouseholdViewModel.HousingSize"></div>
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.HousingSize" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Type of housing</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row">
                            <select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedHousingTypeOptionId field is required." id="HouseholdViewModel_SelectedHousingTypeOptionId" name="HouseholdViewModel.SelectedHousingTypeOptionId"><option selected="selected" value="1">Detached</option>
                        <option value="2">Semi detached</option>
                        <option value="3">Attached single family home</option>
                        <option value="4">Flat</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.SelectedHousingTypeOptionId" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-bolt fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">Energy consumption</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-row">
                    <div class="col-md-4 fp-desc">Electricity consumption</div>
                    <div class="col-md-4 fp-desc" id="fp-desc-knowkw">
                        <input type="number" value="" class="fp-textfield" data-val="true" data-val-range="The Value must be from 0 to 1000" data-val-range-max="1000" data-val-range-min="0" data-val-required="Please enter your Electricity Cosumption" id="HouseholdViewModel_ElectricityConsumption" name="HouseholdViewModel.ElectricityConsumption">KWh/month
                    </div>
                    <div class="col-md-4 fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" id="know-energy-source" data-val="true" data-val-required="The NotKnownElectricityConsumption field is required." name="HouseholdViewModel.NotKnownElectricityConsumption" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">I don't know the KWh/month</span>
                    </div>
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.ElectricityConsumption" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-4 fp-desc">…from a clean energy source</div>
                    <div class="col-md-4 fp-desc">
                        <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The Value must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The CleanSource field is required." id="HouseholdViewModel_CleanSource" name="HouseholdViewModel.CleanSource"> %
                    </div>
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.CleanSource" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-row fp-selectlist fp-checkbox" id="fp-energyconsumption-list">
                    <div class="col-xs-12 fp-listitem fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" data-val="true" data-val-required="The UsageLightbulbs field is required." id="HouseholdViewModel_UsageLightbulbs" name="HouseholdViewModel.UsageLightbulbs" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">I use energy efficient lightbulbs</span>
                    </div>
                    <div class="col-xs-12 fp-listitem fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" data-val="true" data-val-required="The UsageEnergyStar field is required." id="HouseholdViewModel_UsageEnergyStar" name="HouseholdViewModel.UsageEnergyStar" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">I use ENERGY STAR appliances</span>
                    </div>
                    <div class="col-xs-12 fp-listitem fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" data-val="true" data-val-required="The UsageThermostat field is required." id="HouseholdViewModel_UsageThermostat" name="HouseholdViewModel.UsageThermostat" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">I have a programmable/smart thermostat</span>
                    </div>
                    <div class="col-xs-12 fp-listitem fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" data-val="true" data-val-required="The UsageEnergySavingDevices field is required." id="HouseholdViewModel_UsageEnergySavingDevices" name="HouseholdViewModel.UsageEnergySavingDevices" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">Energy-saving devices</span>
                    </div>
                    <div class="col-xs-12 fp-listitem fp-checkbox">
                        <span><div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" data-val="true" data-val-required="The UsageSolarWaterHeater field is required." id="HouseholdViewModel_UsageSolarWaterHeater" name="HouseholdViewModel.UsageSolarWaterHeater" value="true" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></span>
                        <span class="fp-checkbox-desc">I have a solar water heater</span>
                    </div>
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Heating energy source</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row"><select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedHeatingSourceOptionId field is required." id="HouseholdViewModel_SelectedHeatingSourceOptionId" name="HouseholdViewModel.SelectedHeatingSourceOptionId"><option selected="selected" value="5">Coal</option>
                        <option value="6">Natural Gas</option>
                        <option value="7">Heating oil</option>
                        <option value="8">Wood</option>
                        <option value="9">Vegetable oil</option>
                        <option value="10">Peat</option>
                        <option value="11">Charcoal</option>
                        <option value="12">No heating</option>
                        <option value="13">Electricity</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="HouseholdViewModel.SelectedHeatingSourceOptionId" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-next-row">
                    <div class="col-md-3 col-sm-6 col-xs-12 pull-right fp-next-button">
                        <a href="#transport-tab" data-toggle="tab" onclick="activateTargetPill('transport-pill', 'household-pill')" class="btn btn-unfccc">Next</a>
                    </div>
                </div>
                <div class="row">
                    <div class="fp-did-you-know">
                        <span>Did you know?</span>
                        <span>90% of the energy used by traditional bulbs is wasted in producing heat.</span>
                    </div>
                </div>
            </div>
            <!-- #endregion -->
            <!-- #region Transport -->
            <div class="tab-pane" id="transport-tab">
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-car fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">How do you get around?</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-row">
                    <div class="col-xs-12 fp-desc-only">Average hours per week traveled by all household members using:</div>
                </div>
                <div class="row fp-row fp-input-list">
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">Intercity Train</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Intercity Train  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The Intercity field is required." id="TransportViewModel_Intercity" name="TransportViewModel.Intercity">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">Subway</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Subway  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The Subway field is required." id="TransportViewModel_Subway" name="TransportViewModel.Subway">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">Intercity Bus</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Intercity Bus  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The Bus field is required." id="TransportViewModel_Bus" name="TransportViewModel.Bus">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">City Bus</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by City Bus  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The CityBus field is required." id="TransportViewModel_CityBus" name="TransportViewModel.CityBus">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">Tram</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Tram  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The Tram field is required." id="TransportViewModel_Tram" name="TransportViewModel.Tram">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item">
                        <div class="col-md-5 col-xs-8 fp-desc">Bike/walk</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Bike/walk  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The BikeWalk field is required." id="TransportViewModel_BikeWalk" name="TransportViewModel.BikeWalk">
                        </div>
                    </div>
                    <div class="col-md-4 fp-input-item" id="nyc-ferry">
                        <div class="col-md-5 col-xs-8 fp-desc">Ferry</div>
                        <div class="col-md-2 col-xs-2 fp-desc">
                            <input type="number" value="0" class="fp-textfield" data-val="true" data-val-range="The average hours traveled by Ferry  must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The Ferry field is required." id="TransportViewModel_Ferry" name="TransportViewModel.Ferry">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 fp-error-message">
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.Intercity" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.Subway" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.Bus" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.CityBus" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.Tram" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.BikeWalk" data-valmsg-replace="true"></span>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <span class="field-validation-valid" data-valmsg-for="TransportViewModel.Ferry" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-xs-12 fp-desc-only">Do you use a <b>car</b>?</div>
                </div>
                <div id="carUsageSection"></div>
                <div class="row fp-row">
                    <div class="col-md-2 ">
                        <div class="col-xs-12 add-vehicle-button">
                            <a onclick="addVehicleUsage(true)" class="addCarUsage btn btn-unfccc fp-add-car-button" aria-expanded="true">Add</a>
                        </div>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-xs-12 fp-desc-only">Do you use a <b>motorbike</b>?</div>
                </div>
                <div id="motorbikeUsageSection"></div>
                <div class="row fp-row">
                    <div class="col-md-2 ">
                        <div class="col-xs-12 add-vehicle-button">
                            <a onclick="addVehicleUsage(false)" class="addMotorbikeUsage btn btn-unfccc fp-add-car-button" aria-expanded="true">Add</a>
                        </div>
                    </div>
                </div>
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-plane fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">Private flights per year for all household members:</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-row">
                    <div class="col-md-8 col-xs-12 fp-desc"><b>Very long range</b> round-trip flights (&gt;12000 km or &gt;14 hours one way) per year</div>
                    <div class="col-md-4 col-xs-12 fp-desc ">
                        <input type="number" value="0" class="fp-textfield-wide" data-val="true" data-val-range="The Value must be from 0 to 120" data-val-range-max="120" data-val-range-min="0" data-val-required="The VeryLongRangeFlight field is required." id="TransportViewModel_VeryLongRangeFlight" name="TransportViewModel.VeryLongRangeFlight">
                    </div>
                    <div class="col-xs-12 col-md-offset-8 col-md-4 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="TransportViewModel.VeryLongRangeFlight" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-8 col-xs-12 fp-desc"><b>Long range</b> round-trip flights (&lt;12000 km or &lt;14 hours one way) per year</div>
                    <div class="col-md-4 col-xs-12 fp-desc ">
                        <input type="number" value="0" class="fp-textfield-wide" data-val="true" data-val-range="The Value must be from 0 to 120" data-val-range-max="120" data-val-range-min="0" data-val-required="The LongRangeFlight field is required." id="TransportViewModel_LongRangeFlight" name="TransportViewModel.LongRangeFlight">
                    </div>
                    <div class="col-xs-12 col-md-offset-8 col-md-4 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="TransportViewModel.LongRangeFlight" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-8 col-xs-12 fp-desc"><b>Medium range</b> round-trip flights (&lt;6000 km or &lt;8 hours one way) per year</div>
                    <div class="col-md-4 col-xs-12 fp-desc ">
                        <input type="number" value="0" class="fp-textfield-wide" data-val="true" data-val-range="The Value must be from 0 to 120" data-val-range-max="120" data-val-range-min="0" data-val-required="The MediumRangeFlight field is required." id="TransportViewModel_MediumRangeFlight" name="TransportViewModel.MediumRangeFlight">
                    </div>
                    <div class="col-xs-12 col-md-offset-8 col-md-4 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="TransportViewModel.MediumRangeFlight" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-8 col-xs-12 fp-desc"><b>Short range</b> round-trip flights (&lt;3000 km  or &lt;6 hours one way) per year</div>
                    <div class="col-md-4 col-xs-12 fp-desc ">
                        <input type="number" value="0" class="fp-textfield-wide" data-val="true" data-val-range="The Value must be from 0 to 120" data-val-range-max="120" data-val-range-min="0" data-val-required="The ShortRangeFlight field is required." id="TransportViewModel_ShortRangeFlight" name="TransportViewModel.ShortRangeFlight">
                    </div>
                    <div class="col-xs-12 col-md-offset-8 col-md-4 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="TransportViewModel.ShortRangeFlight" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-next-row">
                    <div class="col-md-3 col-sm-6 col-xs-12 fp-next-button">
                        <a href="#lifestyle-tab" data-toggle="tab" onclick="activateTargetPill('lifestyle-pill', 'transport-pill')" class="btn btn-unfccc">Next</a>
                    </div>
                </div>
                <div class="row">
                    <div class="fp-did-you-know">
                        <span>Did you know?</span>
                        <span>The average car manufactured in 2008 pollutes 7% more than the average car manufactured in 2018.</span>
                    </div>
                </div>
            </div>
            <!-- #endregion -->
            <!-- #region Lifestyle -->
            <div class="tab-pane" id="lifestyle-tab">
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">About your lifestyle</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Your household preferred diet is</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row"><select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedDietOptionId field is required." id="LifestyleViewModel_SelectedDietOptionId" name="LifestyleViewModel.SelectedDietOptionId"><option selected="selected" value="19">Meat in most meals</option>
                        <option value="20">Meat in some meals</option>
                        <option value="21">Meat very rarely/just fish</option>
                        <option value="22">Vegetarian</option>
                        <option value="23">Vegan</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="LifestyleViewModel.SelectedDietOptionId" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Do you buy mostly local products?</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row"><select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedLocalProductsOptionId field is required." id="LifestyleViewModel_SelectedLocalProductsOptionId" name="LifestyleViewModel.SelectedLocalProductsOptionId"><option value="24">Always</option>
                        <option value="25">Sometimes</option>
                        <option selected="selected" value="26">I'm not considering this option</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="LifestyleViewModel.SelectedLocalProductsOptionId" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="row fp-dropdown-row">
                    <div class="col-md-4 fp-desc">Do you buy from environmentally responsible companies?</div>
                    <div class="col-md-4 col-xs-12 fp-dropdown-row"><select class="fp-dropdown-list" data-val="true" data-val-required="The SelectedResponsibleCompaniesOptionId field is required." id="LifestyleViewModel_SelectedResponsibleCompaniesOptionId" name="LifestyleViewModel.SelectedResponsibleCompaniesOptionId"><option value="28">Always</option>
                        <option value="29">Sometimes</option>
                        <option selected="selected" value="30">I'm not considering this option</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="LifestyleViewModel.SelectedResponsibleCompaniesOptionId" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-row">
                    <div class="col-md-4 fp-desc">How many times a week does your family eat out?</div>
                    <div class="col-md-4 col-xs-12 fp-desc">
                        <input type="number" value="0" class="fp-textfield-medium" data-val="true" data-val-range="The Value must be from 0 to 100" data-val-range-max="100" data-val-range-min="0" data-val-required="The MealsOut field is required." id="LifestyleViewModel_MealsOut" name="LifestyleViewModel.MealsOut">
                    </div>
                    <div class=" col-md-offset-4 col-xs-12 col-md-8 fp-error-message">
                        <span class="field-validation-valid" data-valmsg-for="LifestyleViewModel.MealsOut" data-valmsg-replace="true"> </span>
                    </div>
                </div>
                <div class="row fp-subheader-row">
                    <span>
                        <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                        <text class="fp-subheader-text">How do you handle waste?</text>
                    </span>
                </div>
                <div class="row">
                    <hr class="fp-section-line">
                </div>
                <div class="row fp-row">
                    <div class="col-xs-12 fp-desc-only">I recycle or compost:</div>
                </div>
                <meta charset="UTF-8">
  <title>Checkboxes in One Row</title>
  <style>
    .checkbox-group {
      display: flex;
      gap: 20px;
      margin: 20px;
    }

    .checkbox-group label {
      display: flex;
      align-items: center;
      font-family: Arial, sans-serif;
    }

    input[type="checkbox"] {
      margin-right: 5px;
    }
    col-md-4 fp-desc{
        color : white;
    }
  </style>
</head>
<body>

  <form method="POST" action="process.php">
    <div class="checkbox-group">
      <label><input type="checkbox" name="items[]" value="food">Food</label>
      <label><input type="checkbox" name="items[]" value="paper">Paper</label>
      <label><input type="checkbox" name="items[]" value="tin cans">Tin Cans</label>
      <label><input type="checkbox" name="items[]" value="plastic">Plastic</label>
      <label><input type="checkbox" name="items[]" value="glass">Glass</label>
    </div>
    
  </form>

  <script>
    // Optional: Handle checkbox values in JavaScript
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(cb => {
      cb.addEventListener('change', () => {
        console.log(`${cb.value} is ${cb.checked ? 'checked' : 'unchecked'}`);
      });
    });
  </script>
  
                <div class="row fp-next-row">
                    <div class="col-md-5 col-sm-8 col-xs-12 pull-right fp-next-button">
                        <button onclick="calculateResult()" value="" type="button" class="btn btn-unfccc">Calculate my footprint</button>
                        <button id="confirm-button" type="submit" formaction="/footprintresult" value="" formmethod="post" style="display: none"></button>
                    </div>
                </div>
                <div class="row">
                    <div class="fp-did-you-know">
                        <span>Did you know?</span>
                        <span>Beef and palm oil production are amongst the largest contributors to pollution due to deforestation.</span>
                    </div>
                </div>
            </div>
            <!-- #endregion -->
        </div>
    </div>

    <script>
        var lastCarIndex = -1;
        var lastMotorbikeIndex = -1;

        function addVehicleUsage(isCar) {
            var appendStr = "";
            var vehicleType = "";
            var lastVehicleIndex = 0;
            if (isCar) {
                vehicleType = "Car";
                lastCarIndex++;
                lastVehicleIndex = lastCarIndex;
                appendStr = '<div id="carItem_' + lastVehicleIndex + '" class="row add-car-section">';
            } else {
                vehicleType = "Motorbike";
                lastMotorbikeIndex++;
                lastVehicleIndex = lastMotorbikeIndex;
                appendStr = '<div id="motorbikeItem_' + lastVehicleIndex + '" class="row add-car-section">';
            }

            appendStr += '<div class="col-md-2 fuel-type-section">';
            appendStr += '<div class="col-xs-12 fp-desc-only car-section-header">';

            if (isCar) {
                appendStr += '<span><i class="fa fa-car car-section-icon" aria-hidden="true"></i></span>';
            } else {
                appendStr += '<span><i class="fa fa-motorcycle car-section-icon" aria-hidden="true"></i></span>';
            }

            appendStr += '</div><div class="col-xs-12 car-section-input">';
            appendStr += '<div class="col-xs-12 fp-dropdown-fuel">';
            appendStr += '<select class="fp-dropdown-list" data-val="true" data-val-number="The field SelectedFuelTypeOptionId must be a number." id="TransportViewModel_' + vehicleType +'UsageList_' +
                lastVehicleIndex +
                '__SelectedFuelTypeOptionId" name="TransportViewModel.' + vehicleType + 'UsageList[' +
                lastVehicleIndex +
                '].SelectedFuelTypeOptionId">';
            appendStr += '<option value="0">'+ 'Please select '+'</option>';

            if (isCar) {
                    appendStr += '<option value="' + '15' + '">' + 'Gasoline' + '</option>';
                    appendStr += '<option value="' + '16' + '">' + 'Diesel' + '</option>';
                    appendStr += '<option value="' + '17' + '">' + 'Hybrid' + '</option>';
                    appendStr += '<option value="' + '18' + '">' + 'Electric' + '</option>';
            } else {
                    appendStr += '<option value="' + '31' + '">' + 'Gasoline' + '</option>';
                    appendStr += '<option value="' + '32' + '">' + 'Electric' + '</option>';
            }

            appendStr += '</select></div></div>';
            appendStr += '<div class="col-xs-12 fp-error-message">';
            appendStr += '<span id="validation_TransportViewModel_' +
                vehicleType + 'UsageList_' + lastVehicleIndex +'__SelectedFuelTypeOptionId" class="field-validation-valid" data-valmsg-for="TransportViewModel.' + vehicleType + 'UsageList[' + lastVehicleIndex + '].SelectedFuelTypeOptionId" class="field-validation-valid" data-valmsg-for="TransportViewModel.' + vehicleType + 'UsageList[' + lastVehicleIndex +'].SelectedFuelTypeOptionId" data-valmsg-replace="true"></span>';
            appendStr += '</div></div>';

            appendStr += '<div class="col-md-4 mileage-section">';
            appendStr += '<div class="col-xs-12 fp-desc-only car-section-header">' +'Annual mileage ' +'(<span class="distanceUnit">' +distanceUnit +'</span>)';
            appendStr += '</div>';
            appendStr += '<div class="col-xs-12 car-section-input">';
            appendStr +='<input type="number" value="" class="fp-textfield-medium" data-val="true" data-val-number="The field AnnualMileage must be a number." id="TransportViewModel_' + vehicleType +'UsageList_' +
                lastVehicleIndex + '__AnnualMileage" name="TransportViewModel.' + vehicleType + 'UsageList[' + lastVehicleIndex +'].AnnualMileage"></div>';
            appendStr += '<div class="col-xs-12 fp-error-message">';
            appendStr += '<span id="validation_TransportViewModel_' + vehicleType + 'UsageList_' + lastVehicleIndex +'__AnnualMileage" class="field-validation-valid" data-valmsg-for="TransportViewModel.' + vehicleType + 'UsageList[' + lastVehicleIndex + '].AnnualMileage" data-valmsg-replace="true"></span>';
            appendStr += '</div></div>';

            appendStr += '<div class="col-md-4 consumption-section">';
            appendStr += '<div class="col-xs-12 fp-desc-only car-section-header">' +
                'Average consumption ' +
                '(<span class="volumeUnit">' +
                volumeUnit +
                '</span>/100 <span class="distanceUnit">' +
                distanceUnit +
                '</span>)';
            appendStr += '</div>';
            appendStr += '<div class="col-xs-12 car-section-input">';
            appendStr +=
                '<input type="number" value="" class="fp-textfield-medium" data-val="true" data-val-number="The field AverageConsumption must be a number." id="TransportViewModel_' +
                vehicleType +
                'UsageList_' +
                lastVehicleIndex +
                '__AverageConsumption" name="TransportViewModel.' +
                vehicleType +'UsageList[' +lastVehicleIndex +
                '].AverageConsumption"></div>';
            appendStr += '<div class="col-xs-12 fp-error-message">';
            appendStr += '<span id="validation_TransportViewModel_' +
                vehicleType + 'UsageList_' + lastVehicleIndex +'__AverageConsumption" class="field-validation-valid" data-valmsg-for="TransportViewModel.' + vehicleType + 'UsageList[' + lastVehicleIndex +'].AverageConsumption" data-valmsg-replace="true"></span>';
            appendStr += '</div></div>';

            appendStr += '<div class="col-md-2 add-section">';
            appendStr += '<div class="col-xs-12 fp-desc-only car-section-header"></div>';
            appendStr += '<div class="col-xs-12 car-section-input">';

            if (isCar) {
                appendStr += '<a id="remove' +
                    vehicleType +
                    '_' +
                    lastVehicleIndex +
                    '" onclick="removeVehicle(true,' +
                    lastVehicleIndex +
                    ')" class="btn btn-unfccc fp-remove-car-button" aria-expanded="true"><span><i class="fa fa-trash car-section-icon" aria-hidden="true"></i></span></a>';
                appendStr += '</div></div>';

                if (lastVehicleIndex === 0) {
                    $("#carUsageSection").after(appendStr);
                } else {
                    $("#carItem_" + (lastVehicleIndex - 1)).after(appendStr);
                }

                setAddVehicleUsageButtonState(true);
            } else {
                appendStr += '<a id="remove' +
                    vehicleType +
                    '_' +
                    lastVehicleIndex +
                    '" onclick="removeVehicle(false,' +
                    lastVehicleIndex +
                    ')" class="btn btn-unfccc fp-remove-car-button" aria-expanded="true"><span><i class="fa fa-trash car-section-icon" aria-hidden="true"></i></span></a>';
                appendStr += '</div></div>';

                if (lastVehicleIndex === 0) {
                    $("#motorbikeUsageSection").after(appendStr);
                } else {
                    $("#motorbikeItem_" + (lastVehicleIndex - 1)).after(appendStr);
                }

                setAddVehicleUsageButtonState(false);
            }
        }

        function removeVehicle(isCar, indexToRemove) {
            var vehicleType = "";
            var lastVehicleIndex = 0;
            if (isCar) {
                vehicleType = "Car";
                lastVehicleIndex = lastCarIndex;
                $("#carItem_" + indexToRemove).remove();
            } else {
                vehicleType = "Motorbike";
                lastVehicleIndex = lastMotorbikeIndex;
                $("#motorbikeItem_" + indexToRemove).remove();
            }

            for (var currentIndex = 0; currentIndex <= lastVehicleIndex; currentIndex++) {
                if (currentIndex <= indexToRemove) {
                    continue;
                } else {
                    if (isCar) {
                        $("#carItem_" + currentIndex).attr("id", "carItem_" + (currentIndex - 1));
                        $('#removeCar_' + currentIndex)
                            .attr('onclick', 'removeVehicle(true,' + (currentIndex - 1) + ')');
                    } else {
                        $("#motorbikeItem_" + currentIndex).attr("id", "motorbikeItem_" + (currentIndex - 1));
                        $('#removeMotorbike_' + currentIndex)
                            .attr('onclick', 'removeVehicle(false,' + (currentIndex - 1) + ')');
                    }

                    $('#remove' + vehicleType + '_' + currentIndex)
                        .attr('id', 'remove' + vehicleType + '_' + (currentIndex - 1));

                    $("#TransportViewModel_" + vehicleType + "UsageList_" + currentIndex + "__SelectedFuelTypeOptionId")
                        .attr("name",
                            "TransportViewModel." +
                            vehicleType +
                            "UsageList[" +
                            (currentIndex - 1) +
                            "].SelectedFuelTypeOptionId");
                    $("#TransportViewModel_" + vehicleType + "UsageList_" + currentIndex + "__AnnualMileage").attr(
                        "name",
                        "TransportViewModel." + vehicleType + "UsageList[" + (currentIndex - 1) + "].AnnualMileage");
                    $("#TransportViewModel_" + vehicleType + "UsageList_" + currentIndex + "__AverageConsumption").attr(
                        "name",
                        "TransportViewModel." +
                        vehicleType +
                        "UsageList[" +
                        (currentIndex - 1) +
                        "].AverageConsumption");

                    $("#TransportViewModel_" +
                        vehicleType +
                        "" +
                        vehicleType +
                        "UsageList_" +
                        currentIndex +
                        "__SelectedFuelTypeOptionId").attr("id",
                        "TransportViewModel_" +
                        vehicleType +
                        "UsageList_" +
                        (currentIndex - 1) +
                        "__SelectedFuelTypeOptionId");
                    $("#TransportViewModel_" + vehicleType + "UsageList_" + currentIndex + "__AnnualMileage").attr("id",
                        "TransportViewModel_" + vehicleType + "UsageList_" + (currentIndex - 1) + "__AnnualMileage");
                    $("#TransportViewModel_" + vehicleType + "UsageList_" + currentIndex + "__AverageConsumption").attr(
                        "id",
                        "TransportViewModel_" +
                        vehicleType +
                        "UsageList_" +
                        (currentIndex - 1) +
                        "__AverageConsumption");
                }
            }

            if (isCar) {
                lastCarIndex--;
                setAddVehicleUsageButtonState(true);
            } else {
                lastMotorbikeIndex--;
                setAddVehicleUsageButtonState(false);
            }
        }

        function setAddVehicleUsageButtonState(isCar) {
            var vehicleType = "";
            var lastVehicleIndex = 0;
            if (isCar) {
                vehicleType = "Car";
                lastVehicleIndex = lastCarIndex;
            } else {
                vehicleType = "Motorbike";
                lastVehicleIndex = lastMotorbikeIndex;
            }

            if (lastVehicleIndex >= 9) {
                $(".add" + vehicleType + "Usage").attr("disabled", true);
            } else {
                $(".add" + vehicleType + "Usage").attr("disabled", false);
            }
        }

        function setErrorMessageForVehicles(validationResult) {
            var carList = validationResult.CarListValidation;

            carList.forEach(function (item, index, array) {
                $("#validation_TransportViewModel_CarUsageList_" + index + "__SelectedFuelTypeOptionId")
                    .addClass('field-validation-valid').removeClass('field-validation-error');
                $("#validation_TransportViewModel_CarUsageList_" + index + "__AnnualMileage")
                    .addClass('field-validation-valid').removeClass('field-validation-error');
                $("#validation_TransportViewModel_CarUsageList_" + index + "__AverageConsumption")
                    .addClass('field-validation-valid').removeClass('field-validation-error');

                if (item['SelectedFuelTypeOptionIdMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_CarUsageList_" + index +
                        "__SelectedFuelTypeOptionId").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_CarUsageList_" +
                        index + "__SelectedFuelTypeOptionId").innerHTML = '<span for="TransportViewModel_CarUsageList_' + index + '__SelectedFuelTypeOptionId" id="validationFor_TransportViewModel_CarUsageList_' +
                        index + '__SelectedFuelTypeOptionId" class="">' + item.SelectedFuelTypeOptionIdMessage + '</span>';

                    $("#validation_TransportViewModel_CarUsageList_" + index + "__SelectedFuelTypeOptionId")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }

                if (item['AnnualMileageMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_CarUsageList_" + index +
                        "__AnnualMileage").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_CarUsageList_" +
                        index + "__AnnualMileage").innerHTML = '<span for="TransportViewModel_CarUsageList_' + index + '__AnnualMileage" id="validationFor_TransportViewModel_CarUsageList_' +
                        index + '__AnnualMileage" class="">' + item.AnnualMileageMessage + '</span>';

                    $("#validation_TransportViewModel_CarUsageList_" + index + "__AnnualMileage")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }

                if (item['AverageConsumptionMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_CarUsageList_" + index +
                        "__AverageConsumption").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_CarUsageList_" +
                        index + "__AverageConsumption").innerHTML = '<span for="TransportViewModel_CarUsageList_' + index + '__AverageConsumption" id="validationFor_TransportViewModel_CarUsageList_' +
                        index + '__AverageConsumption" class="">' + item.AverageConsumptionMessage + '</span>';

                    $("#validation_TransportViewModel_CarUsageList_" + index + "__AverageConsumption")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }
            });

            var motorbikeList = validationResult.MotorbikeListValidation;

            motorbikeList.forEach(function (item, index, array) {
                $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__SelectedFuelTypeOptionId")
                    .addClass('field-validation-valid').removeClass('field-validation-error');
                $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AnnualMileage")
                    .addClass('field-validation-valid').removeClass('field-validation-error');
                $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AverageConsumption")
                    .addClass('field-validation-valid').removeClass('field-validation-error');

                if (item['SelectedFuelTypeOptionIdMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" + index +
                        "__SelectedFuelTypeOptionId").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" +
                        index + "__SelectedFuelTypeOptionId").innerHTML = '<span for="TransportViewModel_MotorbikeUsageList_' + index + '__SelectedFuelTypeOptionId" id="validationFor_TransportViewModel_MotorbikeUsageList_' +
                        index + '__SelectedFuelTypeOptionId" class="">' + item.SelectedFuelTypeOptionIdMessage + '</span>';

                    $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__SelectedFuelTypeOptionId")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }

                if (item['AnnualMileageMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" + index +
                        "__AnnualMileage").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" +
                        index + "__AnnualMileage").innerHTML = '<span for="TransportViewModel_MotorbikeUsageList_' + index + '__AnnualMileage" id="validationFor_TransportViewModel_MotorbikeUsageList_' +
                        index + '__AnnualMileage" class="">' + item.AnnualMileageMessage + '</span>';

                    $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AnnualMileage")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }

                if (item['AverageConsumptionMessage'].length > 0) {
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" + index +
                        "__AverageConsumption").innerHTML = "";
                    document.getElementById("validation_TransportViewModel_MotorbikeUsageList_" +
                        index + "__AverageConsumption").innerHTML = '<span for="TransportViewModel_MotorbikeUsageList_' + index + '__AverageConsumption" id="validationFor_TransportViewModel_MotorbikeUsageList_' +
                        index + '__AverageConsumption" class="">' + item.AverageConsumptionMessage + '</span>';

                    $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AverageConsumption")
                        .addClass('field-validation-error').removeClass('field-validation-valid');

                }
            });
        }

        function validateVehicleUsageSection(callback) {
            carArray = [];
            for (var index = 0; index <= lastCarIndex; index++) {
                var fueltypId = $("#TransportViewModel_CarUsageList_" + index + "__SelectedFuelTypeOptionId").val();
                var annualMileage = $("#TransportViewModel_CarUsageList_" + index + "__AnnualMileage").val();
                if (annualMileage == null|| annualMileage == "") {
                    annualMileage = -1;
                }
                var averageConsumption = $("#TransportViewModel_CarUsageList_" + index + "__AverageConsumption").val();
                if (averageConsumption == null || averageConsumption == "") {
                    averageConsumption = -1;
                }

                carArray.push({ "FrontendIndex": index, "SelectedFuelTypeOptionId": fueltypId, "AnnualMileage": annualMileage, "AverageConsumption": averageConsumption });
            }
            var carArrayJson = JSON.stringify(carArray);

            motorbikeArray = [];
            for (var index = 0; index <= lastMotorbikeIndex; index++) {
                var fueltypId = $("#TransportViewModel_MotorbikeUsageList_" + index + "__SelectedFuelTypeOptionId").val();
                var annualMileage = $("#TransportViewModel_MotorbikeUsageList_" + index + "__AnnualMileage").val();
                if (annualMileage == null || annualMileage == "") {
                    annualMileage = -1;
                }
                var averageConsumption = $("#TransportViewModel_MotorbikeUsageList_" + index + "__AverageConsumption").val();
                var averageConsumption = $("#TransportViewModel_MotorbikeUsageList_" + index + "__AverageConsumption").val();
                if (averageConsumption == null || averageConsumption == "") {
                    averageConsumption = -1;
                }

                motorbikeArray.push({ "FrontendIndex": index ,"SelectedFuelTypeOptionId": fueltypId, "AnnualMileage": annualMileage, "AverageConsumption": averageConsumption });
            }
            var motorbikeArrayJson = JSON.stringify(motorbikeArray);
            var hasError = false;
            $.ajax({
                type: 'GET',
                url: '/ValidateVehicleUsageLists',
                dataType: 'json',
                data: { carListJson: carArrayJson, motorbikeListJson: motorbikeArrayJson },
                success: function (vehicleUsageListsValidationJson) {
                    var validationResult = JSON.parse(vehicleUsageListsValidationJson);
                    var carList = validationResult.CarListValidation;

                    carList.forEach(function (item, index, array) {
                        $("#validation_TransportViewModel_CarUsageList_" + index + "__SelectedFuelTypeOptionId")
                            .addClass('field-validation-valid').removeClass('field-validation-error');
                        $("#validation_TransportViewModel_CarUsageList_" + index + "__AnnualMileage")
                            .addClass('field-validation-valid').removeClass('field-validation-error');
                        $("#validation_TransportViewModel_CarUsageList_" + index + "__AverageConsumption")
                            .addClass('field-validation-valid').removeClass('field-validation-error');

                        if (item['SelectedFuelTypeOptionIdMessage'].length > 0 || item['AnnualMileageMessage'].length > 0 || item['AnnualMileageMessage'].length > 0) {
                            hasError = true;
                        }
                    });

                    var motorbikeList = validationResult.MotorbikeListValidation;

                    motorbikeList.forEach(function (item, index, array) {
                        $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__SelectedFuelTypeOptionId")
                            .addClass('field-validation-valid').removeClass('field-validation-error');
                        $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AnnualMileage")
                            .addClass('field-validation-valid').removeClass('field-validation-error');
                        $("#validation_TransportViewModel_MotorbikeUsageList_" + index + "__AverageConsumption")
                            .addClass('field-validation-valid').removeClass('field-validation-error');

                        if (item['SelectedFuelTypeOptionIdMessage'].length > 0 || item['AnnualMileageMessage'].length > 0 || item['AnnualMileageMessage'].length > 0) {
                            hasError = true;
                        }
                    });
                    callback(hasError, validationResult);
                },
                error: function(ex) {
                    hasError = true;
                    callback(hasError);
                }
            });

        }

    </script>

<input name="__RequestVerificationToken" type="hidden" value="CfDJ8Mdmpw1wNHJDiMZkHSQMuQecMZrhtN7yH3PS9TtJZ_e3U4DBfjsUOs8ebCubuTwJff05iYxu3rGef7_5xKuibov5hwhMk4_TISPnfNrEJw2XkfVOdswbywCOqL3t1diVesgr7V2CTep3bBWNFKFx_bI"><input name="HouseholdViewModel.NotKnownElectricityConsumption" type="hidden" value="false"><input name="HouseholdViewModel.UsageLightbulbs" type="hidden" value="false"><input name="HouseholdViewModel.UsageEnergyStar" type="hidden" value="false"><input name="HouseholdViewModel.UsageThermostat" type="hidden" value="false"><input name="HouseholdViewModel.UsageEnergySavingDevices" type="hidden" value="false"><input name="HouseholdViewModel.UsageSolarWaterHeater" type="hidden" value="false"><input name="LifestyleViewModel.RecycleFood" type="hidden" value="false"><input name="LifestyleViewModel.RecyclePaper" type="hidden" value="false"><input name="LifestyleViewModel.RecycleTinCans" type="hidden" value="false"><input name="LifestyleViewModel.RecyclePlastic" type="hidden" value="false"><input name="LifestyleViewModel.RecycleGlass" type="hidden" value="false"></form>


    
</div>

            </div>
            
        </div>
    <style>
        
    </x-slot>






</style>

    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("");
  min-height: 90%;
}
</style>


  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p> Rolsa Technologies, for a greener future works in the cleantech industry and provides instalation of green technology services.</p>
      <p>All rights reserved.</a></p> 
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Podcacasts</span><br>
          <span>Lets talk about our environment</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Posts</span><br>
          <span>Our future</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Green Energy</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span> 
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Renewable</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Solar panels</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Wind Turbines</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-opacity"> Reach Studios</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

</html>
</x-app-layout>