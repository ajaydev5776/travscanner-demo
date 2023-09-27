<?php include( 'head-libraries.php' ) ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
    font-family: 'Poppins', sans-serif;
}
.form-group label {
    color: #1bb5b2;
    margin-bottom: 10px;
}

.card .card-body span{
    color:#1bb5b2;
}

.card .card-body h6{
    color: #9e9e9e;
}

.btn.btn-success{
    background-image: linear-gradient(to right, #1bb5b2, #1ebebb, #21c6c3, #24cfcc, #27d8d5);
    border: 0;
}

.trip-tabs {
    padding: 10px;
    /* box-shadow: 0px 0px 10px rgba(0,0,0, 0.2); */
    margin: 8px 0;
    border: 1px #dbdbdb solid;
    border-radius: 5px;
}

.trip-tabs .nav-tabs{
    border: 0;
    margin-bottom: 10px;
}

.trip-tabs .nav-tabs button.nav-link {
    border: 0;
    color: #9e9e9e;
    font-size: 12px;
    font-weight: 500;
    padding: 0 10px;
}

.trip-tabs .nav-tabs button.nav-link.active{
    color: #34aba5;
    border-bottom: 2px #34aba5 solid;
}

.day-text{
    color: #1bb5b2;
    font-size: 15px;
    font-weight: 500;
}

.card .card-body .place-labels span {
    background: #d0fefe;
    font-size: 12px;
    display: inline-block;
    padding: 2px 8px;
    margin-bottom: 5px;
    border-radius: 5px;
}

.card .card-body .form-group .form-control {
    height: 45px;
}

.card .card-body .form-group .form-control:focus{
    outline: 0;
    box-shadow: none;
}

.card .card-body .place-labels span:not(:first-child) {
    margin-right: 5px;
}

.listing-text ul.inline-list li p{
    font-size: 12px;
    color: #9e9e9e;
    margin: 5px 0 0;
}

.calculation-side{
    border-left: 1px #34aba5 solid;
    height: 100%;
}

.calculation-side h4{
    color: #34aba5;
    font-size: 40px;
    margin: 0 0;
    padding: 10px 0 10px;
    font-weight: 400;
}

.calculation-side p {
    margin: 0 0 5px;
    color: #9e9e9e;
}

.card .card-body .calculation-side span {
    color: #707070;
    display: inline-block;
    font-weight: 500;
    margin: 10px 0;
}

.card .card-body .calculation-side .place-location span {
    color: #34aba5;
    font-size: 18px;
    font-weight: 500;
    margin: 0 0 10px
}

.card .card-body .search-placeholder span {
    font-size: 22px;
    display: block;
}

.card .card-body .calculation-side span i {
    color: #1bb5b2;
}

ul.inline-list li .listing-icons {
    border: 1px #d9d9d9 solid;
    width: 80px;
    height: 80px;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

ul.inline-list li .listing-icons img.img-fluid {
    max-width: 42px;
}

.listing-text ul.inline-list li:not(:first-child) {
    margin-left: 40px;
}
</style>
  <body>
    <?php include( 'header.php' ) ?>

    <!-- Trips Page Section --> 
    
    <!-- Section 1 -->
    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="card">
                <div class="card-body">
                     <div class="row">
                         <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <div class="search-placeholder">
                                    <i class="fa fa-search"></i>
                                    <span>Search</span>
                                </div>
                                <div>
                                    <a href="#"><i class="fa fa-chevron-down"></i></a>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-12 mt-4">
                            <form>
                                 <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Destination</label>
                                            <select class="form-control" name="destination">
                                                <option>Andaman and Nicobar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Adults (12+ years)</label>
                                            <select class="form-control" name="adult">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Child (3-11 years)</label>
                                            <select class="form-control" name="adult">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Hotels</label>
                                            <select class="form-control" name="destination">
                                                <option>Choose Hotels</option>
                                            </select>
                                        </div>
                                    </div>   
                                 </div>
                                 <div class="row">
                                     <button class="btn btn-success col-lg-1 m-auto">Scan</button>   
                                 </div>
                            </form>
                         </div>
                     </div>   

                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                     <div class="row">
                         <h6>Filter Option</h6>
                         <div class="col-lg-12 mt-2">
                            <form>
                                 <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tour Operator Location</label>
                                            <select class="form-control" name="location">
                                                <option>Choose Tour Operator Location</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Flight Departure</label>
                                            <select class="form-control" name="departure">
                                                <option>Choose Flight Departure</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Hotels</label>
                                            <select class="form-control" name="hotels">
                                                <option>Choose Hotels</option>
                                            </select>
                                        </div>
                                    </div>   
                                 </div>
                            </form>
                         </div>
                     </div>   

                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="container">
        <div class="row">
            <?php for($i = 1; $i <= 3; $i++):?>
            <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3"><img src="assets/images/trip1.png" class="img-fluid" alt=""></div>
                    <div class="col-lg-6">
                        <h4 class="booking-place">Malaysia <span>DA2223A</span> </h4>
                        <div class="day-text">4 Days 3 Nights 4 Days 3 Nights</div>
                        <div class="col-lg-12">
                            <div class="trip-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Havelock Island</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Havelock Island</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Havelock Island</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="d-flex align-items-center flex-wrap place-labels">
                                            <span>Havelock Island</span>
                                            <span>Kalapathar Beach</span>
                                            <span>Scuba Diving</span>
                                            <span>Radhanagar Beach</span>
                                            <span>Kalapathar Beach</span>
                                            <span>Kalapathar Beach</span>
                                            <span>Scuba Diving</span>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="listing-text">
                                <ul class="inline-list">
                                    <li>
                                        <div class="listing-icons">
                                            <img src="assets/images/plan-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <p>Ex Delhi</p>
                                    </li>
                                    <li>
                                        <div class="listing-icons">
                                            <img src="assets/images/bed-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <p>3 Star</p>
                                    </li>
                                    <li>
                                        <div class="listing-icons">
                                            <img src="assets/images/visa-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <p>Visa</p>
                                    </li>
                                    <li>
                                        <div class="listing-icons">
                                            <img src="assets/images/ship-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <p>Cruise</p>
                                    </li>
                                    <li>
                                        <div class="listing-icons">
                                            <img src="assets/images/breakfast-icon.png" class="img-fluid" alt="">
                                        </div>
                                        <p>1 Breakfast</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                         <div class="calculation-side">
                            <h4>₹57,000</h4>
                            <p>Per Person</p>
                            <p>(min 6 Adults 3 child)</p>
                            <span>EMI Available <i class="fa fa-circle-check ms-2"></i></span>
                            <div class="place-location">
                                <span class=""><i class="fa-solid fa-location-dot"></i> &nbsp;Delhi</span>
                            </div>
                            <div>
                                <button class="btn btn-success w-50 m-auto">Connect</button>
                            </div>
                         </div>
                     </div>
                  </div>
                </div>
            </div>
            <?php endfor?>
        </div>
    </section>

    <?php include( 'footer.php' ) ?>

  </body>
</html>