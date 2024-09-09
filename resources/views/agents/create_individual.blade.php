@extends('layouts.main')

@section('title','Terra || Home')

@section('content')

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Step Form -->
      <form class="js-step-form py-md-5" data-hs-step-form-options='{
              "progressSelector": "#addUserStepFormProgress",
              "stepsSelector": "#addUserStepFormContent",
              "endSelector": "#addUserFinishBtn",
              "isValidate": false
            }'>
        <div class="row justify-content-lg-center">
          <div class="col-lg-12">
            <!-- Step -->
            <ul id="addUserStepFormProgress"
              class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                      "targetSelector": "#addUserStepProfile"
                    }'>
                  <span class="step-icon step-icon-soft-dark">1</span>
                  <div class="step-content">
                    <span class="step-title">Personal Information</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                      "targetSelector": "#businessInfo"
                    }'>
                  <span class="step-icon step-icon-soft-dark">2</span>
                  <div class="step-content">
                    <span class="step-title">Business Information</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                      "targetSelector": "#uploadDoc"
                    }'>
                  <span class="step-icon step-icon-soft-dark">3</span>
                  <div class="step-content">
                    <span class="step-title">Document Upload</span>
                  </div>
                </a>
              </li>
            </ul>
            <!-- End Step -->

            <!-- Content Step Form -->
            <div id="addUserStepFormContent">
              <!-- Card -->
              <div id="addUserStepProfile" class="card card-lg active">
                <div class="card-body">
                  <!-- Form -->
                  
                  <!-- End Form -->

                  <!-- Form -->
                  <div class="js-add-field row" data-hs-add-field-options='{
                          "template": "#addPhoneFieldTemplate",
                          "container": "#addPhoneFieldContainer",
                          "defaultCreated": 0
                        }'>
                        <div class="row mb-4">
                          <div class="col-lg-6">
                            <div class="">
                              <label for="firstNameLabel" class="form-label">First Name
                              </label>
          
                              <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="James" aria-label="James">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="">
                              <label for="middleNameLabel" class="form-label">Middle Name
                              </label>
          
                              <input type="text" class="form-control" name="middleName" id="middleNameLabel" placeholder="Clarice" aria-label="Clarice">
                            </div>
                          </div>
                          <div class="col-lg-6 mt-3">
                            <div class="">
                              <label for="lastNameLabel" class="form-label">Last Name
                              </label>
          
                              <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Donald" aria-label="Donald">
                            </div>
                          </div>
          
                          <div class="col-lg-6 mt-3">
                            <label for="emailLabel" class="form-label">Email
                            </label>
          
                            <input type="email" class="form-control" name="email" id="emailLabel" placeholder="clarice@site.com" aria-label="clarice@site.com">
                          </div>
                          <div class="col-sm-6 mt-3">
                            <label for="emailLabel" class="form-label">Gender
                            </label>
          
                            <select id="inputGroupLightGenderSelect" class="form-select">
                              <option>Select</option>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
          
                          <div class="col-sm-6 mt-3">
                            <label for="numberLabel" class="form-label">Phone Number
                            </label>
          
                            <input type="text" class="form-control" name="phoneNumber" id="phoneLabel" placeholder="09083747247" minlength="11" maxlength="11">
                          </div>
                        </div>

                    <div class="col-6">
                      <div class="">
                        <label class="form-label" for="exampleFormControlTextarea1">Residential Address</label>
                        <input type="text" class="form-control" data-name="addressLine"
                          placeholder="Your address" aria-label="Your address" />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <label for="state" class="col-form-label form-label">State</label>

                      <select class="input-location-dependant form-control d-block"
                        onchange="toggleLGA(this, 'select-lga1');" name="state" id="state"
                        style="display: block !important">
                        <!-- <option value="" selected="selected" disabled>
                              - Select -
                            </option> -->
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="AkwaIbom">AkwaIbom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">
                          Cross River
                        </option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">FCT</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamafara</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <label for="city" class="col-form-label form-label">LGA</label>
                      <select name="lga" id="lga" class="form-control select-lga1" required></select>
                      <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="col-lg-6">
                      <div class="">
                        <label class="col-form-label form-label" for="exampleFormControlTextarea1">City</label>
                        <input type="text" class="form-control" name="city" placeholder="Lagos"
                          aria-label="Your address" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">BVN</label>
                      <div class="mb-">
                        <input type="number" minlength="11" maxlength="11" class="form-control" name="BVN"
                          id="BVN" placeholder="09503478450" aria-label="BVN" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">NIN</label>
                      <input type="number" minlength="11" maxlength="11" class="form-control" name="NIN"
                        id="busLabel" placeholder="04085767823" aria-label="busLabel" />
                    </div>

                 
                 

                    <div class="col-sm-6">
                      <label for="id" class="col-form-label form-label">Means of id type
                      </label>
                      <select class="form-select">
                        <option>Select</option>
                        <option>National ID</option>
                        <option>Voter's Card</option>
                        <option>International Passport</option>
                        <option>Driver's license</option>
                      </select>
                    </div>

                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Means of ID Number</label>
                      <input type="text" minlength="11" maxlength="11" class="form-control" name="idNum"
                        id="idNum" placeholder="0489995898" aria-label="busLabel" />
                    </div>

                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Issue Date</label>
                      <div class="">
                        <input type="date" class="form-control" name="issueDate" id="issueDate" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Expiry Date</label>
                      <div class="">
                        <input type="date" class="form-control" name="expireDate" id="expireDate" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Bank Name
                        <i class="bi-info-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="This is the bank account from which you will always fund your virtual wallet." data-bs-original-title="This is the bank account from which you will always fund your virtual wallet."></i>
                      </label>
                      
                      <div class="mb-">

                        <select name="bankName" class="form-control">
                          <option value="" selected disabled>
                            Select a bank
                          </option>
                          <option value="1">Access Bank Plc</option>
                          <option value="2">Citibank Nigeria Limited</option>
                          <option value="3">Ecobank Nigeria Plc</option>
                          <option value="4">Fidelity Bank Plc</option>
                          <option value="5">First Bank Nigeria Limited</option>
                          <option value="6">
                            First City Monument Bank Plc
                          </option>
                          <option value="7">Globus Bank Limited</option>
                          <option value="8">Guaranty Trust Bank Plc</option>
                          <option value="9">
                            Heritage Banking Company Ltd.
                          </option>
                          <option value="10">Keystone Bank Limited</option>
                          <option value="11">Parallex Bank Ltd</option>
                          <option value="12">Polaris Bank Plc</option>
                          <option value="13">Premium Trust Bank</option>
                          <option value="14">Providus Bank</option>
                          <option value="15">Stanbic IBTC Bank Plc</option>
                          <option value="16">
                            Standard Chartered Bank Nigeria Ltd.
                          </option>
                          <option value="17">Sterling Bank Plc</option>
                          <option value="18">
                            SunTrust Bank Nigeria Limited
                          </option>
                          <option value="19">Titan Trust Bank Ltd</option>
                          <option value="20">Union Bank of Nigeria Plc</option>
                          <option value="21">United Bank For Africa Plc</option>
                          <option value="22">Unity Bank Plc</option>
                          <option value="23">Wema Bank Plc</option>
                          <option value="24">Zenith Bank Plc</option>
                          <option value="25">
                            Consolidated Microfinance Bank
                          </option>
                          <option value="26">
                            First City Monument Bank Microfinance Bank
                          </option>
                          <option value="27">Ecobank Microfinance Bank</option>
                          <option value="28">United Microfinance Bank</option>
                          <option value="29">Skye Microfinance Bank</option>
                          <option value="30">Wema Microfinance Bank</option>
                          <option value="31">Jaiz Microfinance Bank</option>
                          <option value="32">Access Microfinance Bank</option>
                          <option value="33">
                            Guaranty Trust Microfinance Bank
                          </option>
                          <option value="34">
                            Diamond Bank Microfinance Bank
                          </option>
                          <option value="35">PiggyVest</option>
                          <option value="36">Kuda Bank</option>
                          <option value="37">Carbon</option>
                          <option value="38">Mono</option>
                          <option value="39">Flutterwave</option>
                          <option value="40">Wyre</option>
                          <option value="41">Paystack</option>
                          <option value="42">Opay</option>
                          <option value="43">Palmpay</option>
                          <option value="44">Remitly</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Account Number</label>
                      <div class="mb-">
                        <input type="number" minlength="10" maxlength="10" class="form-control" name="acountName"
                          id="BVN" placeholder="0083847488" aria-label="Account Number" />
                      </div>
                    </div>
                   

                  </div>

                  <!-- End Form -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <!-- <div>
                    <a href="./sole-proprietor.html">Sign up as Sole Proprietor
                      <i class="bi-chevron-right"></i></a>
                  </div> -->
                  <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#businessInfo"
                            }'>
                    Next <i class="bi-chevron-right"></i>
                  </button>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <div id="businessInfo" class="card card-lg" style="display: none">
                <div class="card-body">
                  <!-- Form -->
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Business name </label>
                      <div class="mb-">
                        <input type="text" class="form-control" name="businessName	" id="businessName"
                          placeholder="Business name	" aria-label="Business name	" />
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <label for="locationLabel" class="col-form-label form-label">Business Registration
                          Number </label>
                        <input type="text" class="form-control" name="BIN" id="bin" placeholder="32873283629"
                          aria-label="busLabel" />
                      </div> -->
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Business Phone
                        Number</label>
                      <div class=" ">
                        <input type="text" minlength="11" maxlength="11" class="form-control" name="busNum"
                          id="busNum" placeholder="Business Phone Number" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Business email address
                      </label>
                      <div class=" ">
                        <input type="email" class="form-control" name="busEmail" id="busEmail"
                          placeholder="Business email address	" />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Business Address </label>
                      <div class="mb-">
                        <input type="text" class="form-control" name="businessAddress	" id="businessAddress"
                          placeholder="Business Address " aria-label="Business Address" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="state" class="col-form-label form-label">State</label>

                      <select class="input-location-dependant form-control d-block d-none"
                        onchange="toggleLGA(this, 'select-lga1');" name="state" id="state"
                        style="display: block !important">
                        <!-- <option value="" selected="selected" disabled>
                                  - Select -
                                </option> -->
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="AkwaIbom">AkwaIbom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">
                          Cross River
                        </option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">FCT</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamafara</option>
                      </select>
                    </div>

                    <div class="col-lg-6">
                      <label for="city" class="col-form-label form-label">LGA</label>
                      <select name="lga" id="lga" class="form-control select-lga1" required=""></select>
                      <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="col-lg-6">
                      <label for="locationLabel" class="col-form-label form-label">Tax ID Number</label>
                      <div class=" ">
                        <input type="email" class="form-control" name="TIN" id="TIN"
                          placeholder="Tax ID Number	" />
                      </div>
                    </div>
                    

                  </div>
                </div>
                <!-- End Body -->
                <div class="card-footer d-sm-flex align-items-sm-center">
                  <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                    data-hs-step-form-prev-options='{
"targetSelector": "#addUserStepProfile"
}'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="ms-auto">

                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                            "targetSelector": "#uploadDoc"
                          }'>
                      Next <i class="bi-chevron-right"></i>
                    </button>
                  </div>

                  <!-- End Footer -->
                </div>
                <!-- End Footer -->
              </div>

              <div id="uploadDoc" class="card card-lg" style="display: none">
                <!-- Profile Cover -->
                <div class="profile-cover">
                  <div class="profile-cover-img-wrapper">
                    <img class="profile-cover-img" src="assets/img/1920x400/img1.jpg" alt="Image Description" />
                  </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <!-- Body -->
                <div class="card-body">
                  <!-- Form -->
                  <div class="row">

                    <div class="col-lg-6">
                      <label for="addressLine1Label" class="col-form-label form-label">Upload ID
                      </label>

                      <div class="">
                        <input type="file" class="form-control" name="profImg" id="profImg" />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <label for="addressLine1Label" class="col-form-label form-label">Upload Personal
                        Photograph/Picture
                      </label>

                      <div class="">
                        <input type="file" class="form-control" name="personalPhoto" id="personalPhoto" />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <label for="addressLine1Label" class="col-form-label form-label">Upload Utility Bill
                      </label>

                      <div class="">
                        <input type="file" class="form-control" name="utility" id="utility" />
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <label for="addressLine1Label" class="col-form-label form-label">Upload Picture of
                        Business Location
                      </label>

                      <div class="">
                        <input type="file" class="form-control" name="locationPhoto" id="locationPhoto" />
                      </div>
                    </div>
                  </div>
                  <!-- End Form -->

                  <!-- Form -->

                  <!-- End Form -->
                </div>
                <!-- End Body -->
                <div class="card-footer d-sm-flex align-items-sm-center">
                  <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                    data-hs-step-form-prev-options='{
"targetSelector": "#businessInfo"
}'>
                    <i class="bi-chevron-left"></i> Previous step
                  </button>

                  <div class="ms-auto">
                    <button type="submit" class="btn btn-primary">
                      Sign up
                    </button>
                  </div>

                  <!-- End Footer -->
                </div>
                <!-- End Footer -->
              </div>
            </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->
            <div id="successMessageContent" style="display: none">
              <div class="text-center">
                <img class="img-fluid mb-3" src="assets/svg/illustrations/oc-hi-five.svg" alt="Image Description"
                  data-hs-theme-appearance="default" style="max-width: 15rem" />
                <img class="img-fluid mb-3" src="assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description"
                  data-hs-theme-appearance="dark" style="max-width: 15rem" />

                <div class="mb-4">
                  <h2>Successful!</h2>
                  <p>
                    New
                    <span class="fw-semibold text-dark">Ella Lauda</span> user
                    has been successfully created.
                  </p>
                </div>

                <div class="d-flex justify-content-center">
                  <a class="btn btn-white me-3" href="users.html">
                    <i class="bi-chevron-left ms-1"></i> Back to users
                  </a>
                  <a class="btn btn-primary" href="users-add-user.html">
                    <i class="bi-person-plus-fill me-1"></i> Add new user
                  </a>
                </div>
              </div>
            </div>
            <!-- End Message Body -->
          </div>
        </div>
        <!-- End Row -->
      </form>
      <!-- End Step Form -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">
            &copy;<span class="d-none d-sm-inline-block">2024 Terra Portals.</span>
          </p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>



@endsection