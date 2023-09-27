<?php include( 'head-libraries.php' ) ?>
  <body>
    <div class="container-fluid vh100 stepPage px-0">
      <div class="row flex-column flex-nowrap mx-0 h-100">
        <div class="col-12 px-0"><?php include( 'header.php' ) ?></div>
        <div class="col-12 flex-fill overflow-hidden stepcard h-100 py-sm-5 py-3">
          <div class="container-md h-100 px-sm-2 px-0">
            <!-- *** Step1 Start -->
            <div class="stepcarditems h-100 dnone">
              <div class="stepHeading">2.Choose Destination (Places name will be shown in dropdown)</div>
              <div class="card rounded-0 border-0 mb-4 mx-2 h-100 step1">
                <div class="stepBar d-sm-block d-none">
                  <ul class="list-unstyled p-0 m-0">
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                  </ul>
                </div>
                <div class="crad-body h-100">
                  <div class="row h-100">
                    <div class="col-sm-10 mx-auto mt-lg-5 mt-md-4 mt-3 innerBody mb-5">
                      <button class="backBtn"><img src="./assets/images/back_arrow.svg" class="" alt="back button"><span class="d-sm-flex">Back</span></button>
                      <div class="row row-gap-4">
                        <div class="col-sm-8 col-10 mx-auto">
                          <div class="text-center setpformHeading fw-medium">Choose Your Destination</div>
                          <div class="select">
                            <select class="form-select selectedGroup shadow-none" aria-label="Default select example">
                              <option selected>Choose Destination</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-5 pt-5"><button type="button" class="nextBtn mx-auto">Next</button></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- *** Step1 End -->
            <!-- *** Step2 Start -->
            <div class="stepcarditems overflow-y-auto h-100 overflow-x-hidden dnone">
              <div class="stepHeading">3.Details for the trip</div>
              <div class="card rounded-0 border-0 mb-4 mx-2 h-100 step2">
                <div class="stepBar d-sm-block d-none">
                  <ul class="list-unstyled p-0 m-0">
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                  </ul>
                </div>
                <div class="crad-body h-100">
                  <div class="row h-100">
                    <div class="col-sm-10 mx-auto mt-lg-5 mt-md-4 mt-3 innerBody">
                      <button class="backBtn"><img src="./assets/images/back_arrow.svg" class="" alt="back button"><span class="d-sm-flex">Back</span></button>
                      <div class="row">
                        <div class="col-sm-8 col-10 mx-auto">
                          <div class="text-center setpformHeading fw-medium">Time To Make Memories!</div>
                        </div>
                        <div class="col-12">
                          <div class="card border-0">
                            <div class="card-body">
                              <div class="row g-2 align-items-center">
                                <div class="col-auto picheading fw-medium">You Picked - </div>
                                <div class="col-auto"><button type="button" class="picBtn">Maldives</button></div>
                                <div class="col-auto"><button type="button" class="picBtn">Bali</button></div>
                                <div class="col-auto"><button type="button" class="picBtn">Lakshadeep</button></div>
                              </div>
                              <div class="row mt-5 align-items-center">
                                <div class="col">
                                    <div class="inputGroup select">
                                      <label for="form" class="form-label">From</label>
                                      <select class="form-select selectedGroup shadow-none" id="form">
                                        <option selected>Kerala</option>
                                        <option value="1">Kerala1</option>
                                        <option value="2">Kerala2</option>
                                        <option value="3">Kerala3</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="inputGroup select">
                                      <label for="startdate" class="form-label">Start Date</label>
                                      <input type="date" id="startdate" class="form-control selectedGroup shadow-none">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="inputGroup select">
                                      <label for="startdate" class="form-label">No of DAys</label>
                                      <div class="quantity-block">
                                        <button class="quantity-arrow-minus"> - </button>
                                        <input class="quantity-num" type="number" value="1" />
                                        <button class="quantity-arrow-plus"> + </button>
                                      </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inputGroup select">
                                      <label for="Room" class="form-label">Room</label>
                                      <select class="form-select selectedGroup shadow-none" id="Room">
                                        <option selected>3 Star Hotel with 1 Room</option>
                                        <option value="1">5 Star Hotel with 2 Room</option>
                                        <option value="2">7 Star Hotel with 1 Room</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="inputGroup select">
                                      <label for="pax" class="form-label">PAX</label>
                                      <select class="form-select selectedGroup shadow-none" id="pax">
                                        <option selected>2 PAX</option>
                                        <option value="1">4 PAX</option>
                                        <option value="2">6 PAX</option>
                                        <option value="3">10 PAX</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-5 pt-5"><button type="button" class="nextBtn mx-auto">Next</button></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- *** Step2 End -->
            <!-- *** Step3 Start -->
            <div class="stepcarditems overflow-y-auto h-100 overflow-x-hidden dnone">
              <div class="stepHeading">4.Flight booked selection screen</div>
              <div class="card rounded-0 border-0 mb-4 mx-2 h-100 step3">
                <div class="stepBar d-sm-block d-none">
                  <ul class="list-unstyled p-0 m-0">
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn"></button></li>
                  </ul>
                </div>
                <div class="crad-body h-100">
                  <div class="row h-100">
                    <div class="col-sm-10 mx-auto mt-lg-5 mt-md-4 mt-3 innerBody">
                      <button class="backBtn"><img src="./assets/images/back_arrow.svg" class="" alt="back button"><span class="d-sm-flex">Back</span></button>
                      <div class="row">
                        <div class="col-sm-8 col-10 mx-auto">
                          <div class="text-center setpformHeading fw-medium">Almost there!</div>
                        </div>
                        <div class="col-10 mx-auto">
                          <div class="card border-0 shadow-none">
                            <div class="card-body">
                              <div class="row row-gap-4">
                                <div class="col-12 bookedHeading">I have booked my flights already ?*</div>
                                <div class="col-12">
                                  <div class="form-check">
                                    <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">No</label>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <label for="remark" class="bookedHeading">Remarks:</label>
                                  <textarea name="" id="remark" class="form-control message shadow-none" cols="30" rows="5" placeholder="Provide description about your trip to curate it better (Optional) "></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-5 pt-5"><button type="button" class="nextBtn mx-auto">Next</button></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- *** Step3 End -->
            <!-- *** Step2 Start -->
            <div class="stepcarditems overflow-y-auto h-100 overflow-x-hidden dnone">
              <div class="stepHeading">5.Passenger detail screen</div>
              <div class="card rounded-0 border-0 mb-4 mx-2 h-100 step4">
                <div class="stepBar d-sm-block d-none">
                  <ul class="list-unstyled p-0 m-0">
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                    <li><button type="button" class="stepBtn active"></button></li>
                  </ul>
                </div>
                <div class="crad-body h-100">
                  <div class="row h-100">
                    <div class="col-sm-10 mx-auto mt-lg-5 mt-md-4 mt-3 innerBody">
                      <button class="backBtn"><img src="./assets/images/back_arrow.svg" class="" alt="back button"><span class="d-sm-flex">Back</span></button>
                      <div class="row">
                        <div class="col-sm-8 col-10 mx-auto">
                          <div class="text-center setpformHeading fw-medium">Send Trip quote</div>
                        </div>
                        <div class="col-sm-8 col-10 mx-auto">
                          <div class="card border-0">
                            <div class="card-body p-4">
                              <div class="row row-gap-4">
                                <div class="col-12 select inputGroup">
                                  <label for="name" class="bookedHeading mb-2">Name of the Passenger</label>
                                  <input type="text" id="name" class="form-control shadow-none selectedGroup" placeholder="Enter the Lead Passenger Name">
                                </div>
                                <div class="col-6 select inputGroup">
                                  <label for="number" class="bookedHeading mb-2">Mobile Number</label>
                                  <div class="row gx-1">
                                    <div class="col-auto select">
                                      <input type="tel" id="number" class="form-control shadow-none selectedGroup telinput" placeholder="+91">
                                    </div>
                                    <div class="col">
                                      <input type="tel" id="number" class="form-control shadow-none selectedGroup" placeholder="Enter your Mobile Number">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 select inputGroup">
                                  <label for="email" class="bookedHeading mb-2">Email Id</label>
                                  <input type="email" id="email" class="form-control shadow-none selectedGroup" placeholder="Enter your Email ID">
                                </div>
                                <div class="col-12 text-center mt-5 terms">By proceeding, you agree to our <span>Privacy Policy, User Agreement</span> and <span>Terms of Service</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-5 pt-5"><button type="button" class="nextBtn mx-auto">Next</button></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- *** Step2 End -->
          </div>
        </div>
      </div>
    </div>


    <!-- <?php include( 'footer.php' ) ?> -->
    <?php include( 'footer-libraries.php' ) ?>
  </body>