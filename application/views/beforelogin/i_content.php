        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="<?= base_url('assets');?> /img/Logo Navbar.png" alt="" width="115" height="50" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('before_shop');?>">Shop</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown07">
                <li><a class="dropdown-item" href="#">Pharmacy</a></li>
                <li><a class="dropdown-item" href="#">Personal Care</a></li>
                <li><a class="dropdown-item" href="#">Family Care</a></li>
                <li><a class="dropdown-item" href="#">Accessories</a></li>
                <li><a class="dropdown-item" href="#">Fitness</a></li>
                <li><a class="dropdown-item" href="#">Health Devices</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
          </form>
          <a class="btn btn-primary mx-2" href="<?= base_url('auth/register');?>">Sign Up</a>
            <a class="btn btn-outline-primary" href="<?= base_url('auth');?>">Login</a>
            <a class="btn btn-labeled btn-primary mx-2" href="<?= base_url('before_cart');?>">
              <span class="iconify" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9"></span>
              Cart
            </a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->

    <div class="container col-xl-10 px-4 py-5">
      <div class="row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <h1 class="display-5 fw-bold mb-3" style="color: #371be0; font-family: 'Montserrat', sans-serif; font-weight: 700">We are changing the way you buy medicine</h1>
          <p class="lead">
            Now, you can get your medicine without leaving your house. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam ante habitasse etiam vitae. In condimentum leo non in viverra lacus volutpat pretium in. Eget a condimentum
            dolor risus, est tempus porta.
          </p>
          <div class="justify-content-md-center">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Sign Up</button>
            <button type="button" class="btn btn-outline-primary btn-lg px-4">Browse Shop</button>
          </div>
        </div>
        <div class="col-lg-6">
          <img src=" <?= base_url('assets');?> /img/Hero Image.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
        </div>
      </div>
    </div>

    <!-- Hero End -->

    <!-- feature start -->

    <div class="container px-4 py-5">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="flex-shrink-0 me-3">
            <span class="iconify" data-inline="false" data-icon="ic:baseline-location-on" style="color: #051e76; font-size: 48px"></span>
          </div>
          <div>
            <h2 style="color: #051e76; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">Pharmacy Near You</h2>
            <p style="color: #051e76; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Get your medicine from the nearest pharmacy from your home.</p>
          </div>
        </div>

        <div class="col d-flex align-items-start">
          <div class="flex-shrink-0 me-3">
            <span class="iconify" data-inline="false" data-icon="ic:twotone-delivery-dining" style="color: #051e76; font-size: 48px"></span>
          </div>
          <div>
            <h2 style="color: #051e76; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">Knock-knock medicine!</h2>
            <p style="color: #051e76; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Your medicine will knock at your door.</p>
          </div>
        </div>

        <div class="col d-flex align-items-start">
          <div class="flex-shrink-0 me-3">
            <span class="iconify" data-inline="false" data-icon="bx:bx-support" style="color: #051e76; font-size: 48px"></span>
          </div>
          <div>
            <h2 style="color: #051e76; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">24/7 Customer Care</h2>
            <p style="color: #051e76; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">We are 24/7 available for you! Don’t be hesitate to call us.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- Best Deals Start -->

    <section id="deals">
      <div class="container px-4 pb-5">
        <h2 class="pb-2 border-bottom" style="color: #051e76; font-size: 32px; font-family: 'Mulish', sans-serif; font-weight: 700">Best Deal</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style="background-image: url('<?= base_url('assets');?>/img/Thermo.png')">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">UP TO 30%</h4>
                <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                  ELECTRONIC <br />
                  THERMOMETER
                </h1>
                <div class="justify-content-md-end">
                  <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style="background-image: url('<?= base_url('assets');?> /img/condom_PNG43\ 1.png'); background-size: 340px">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">DUREX CONDOM</h4>
                <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                  ENCHANTED <br />
                  FEELING
                </h1>
                <div class="justify-content-md-end">
                  <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style="background-image: url('<?= base_url('assets');?>/img/toppng.png'); background-size: 340px">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                <div class="justify-content-md-end">
                  <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">HEALTH DEVICES</h4>
                  <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                    ARM BLOOD <br />
                    PRESSURE
                  </h1>
                  <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Best Deals End -->

    <!-- Best Sales Start -->
    <section id="sscollection21">
      <div class="container py-5">
        <h2 class="pb-2 border-bottom" style="color: #051e76; font-size: 32px; font-family: 'Mulish', sans-serif; font-weight: 700">Best sales on this week</h2>
        <div class="row">
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Nycotine.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Nykotine-50 Capsules by...</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 253.420</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Fitness.jpg" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 1.252.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Nerve.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Nerve Support Optimizer</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-3 mb-3">
            <div class="card mt-5" style="width: auto">
              <img src="<?= base_url('assets');?> /img/Mask Group.png" class="card-img-top" alt="..." />
              <div class="card-body border-top">
                <h5 class="card-title">Omron Arm Blood Pressure</h5>
                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700">Rp 3.450.000</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br />
                <button class="shop btn btn-primary mt-3" type="submit"><span class="iconify me-1" data-inline="false" data-icon="bi:cart-fill" style="color: #f9f9f9; font-size: 24px"></span> Add to cart</button>
                <button type="button" class="btn btn-outline-primary mt-3"><span class="iconify" data-inline="false" data-icon="carbon:favorite" style="font-size: 20px"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Best Sales End -->