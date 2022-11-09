<div class="row">
  <div class="col-xs-12 col-xxl-6">
    <div class="card card-animate">
      <div class="card-body p-0">
        <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
          <i class="mdi mdi-clock-time-four-outline text-primary me-2 fs-20"></i>
          <span class="fw-medium">Digital Clock</span>
        </div>
        <div class="row py-3 clock">
          <div class="col-xs-12 col-sm-6 analog-clock">
            <div class="circle">
              <div class="face">
                <div id="hour" class="hour"></div>
                <div id="minute" class="minute"></div>
                <div id="second" class="second"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 digital-clock">
            <div class="d-flex align-items-center  flex-wrap">
              <h1 id="clockTime" class="display-6 fw-medium"></h1>
              <span id="clockSession" class="ms-2 fs-3"></span>
            </div>
            <p id="clockDate" class="fs-4"></p>
            <span class="badge bg-primary fs-13">PHILIPPINE STANDARD TIME</span>
          </div>
          <div class="col-lg-3 align-self-end illustration">
            <div class="pe-3">
              <img src="<?= base_url() ?>public/images/user-illustarator-2.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- end card-body-->
    </div>
  </div>
  <div class="col-xs-12 col-xxl-6">
    <blockquote class="blockquote custom-blockquote blockquote-outline blockquote-primary rounded py-3">
      <div class="row g-0">
        <div class="col-lg-4 quote-image">
          <img id="background" class="rounded-start img-fluid h-100 object-cover" src="https://theysaidso.com/img/qod/qod-inspire.jpg" alt="Card image" />
        </div>
        <div class="col-xs-12 col-lg-8 qotd">
          <div class="card-header">
            <h3 class="fw-medium text-primary"> <i class="mdi mdi-clover text-primary me-2"></i> Quote of the Day!</h3>
          </div>
          <div class="card-body">
            <p class="card-text">
              <i class="bx bxs-quote-alt-left text-primary align-middle me-1"></i>
              <span id="quote">The human mind and body are truly extraordinary. They are the quintessence of excellence in motion. We talk, touch, see, hear, taste, smell, and feel. We dream, aspire, and become. All that we are is mind and body and spirit-that is our universe. </span>
              <i class="bx bxs-quote-alt-right text-primary align-middle ms-1"></i>
            </p>
            <footer id="author" class="text-end blockquote-footer mt-4 mb-0">Lorii Myers</footer>
          </div>
        </div>
      </div>
    </blockquote>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-lg-4">
    <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-1.jpg');background-size:cover;">
      <div class="card rounded bg-primary bg-opacity-50">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <h3 class="pt-5 pb-3 text-white fw-medium align-center text-center text-uppercase">Enroll Now or View Grades</h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" onclick="logout('sis')" class="mb-5 fw-medium btn btn-secondary waves-effect waves-light"> <i class=" ri-account-box-line me-2"></i> Check PUPSIS</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-lg-4">
    <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-10.jpg');background-size:cover;">
      <div class="card rounded bg-primary bg-opacity-50">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Schedule a Visit on PUPQC</h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" onclick="logout('vass')" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-building-4-line me-2"></i> Go to VASS</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-lg-4">
    <div class=" rounded" style="background: url('<?= base_url() ?>public/images/menu/img-7.jpg');background-size:cover;">
      <div class="card rounded bg-primary bg-opacity-50">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Frequently Asked Questions</h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" onclick="logout('osssac')" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-discuss-line me-2"></i> Visit Help Desk</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-lg-6">
    <div class="card card-animate">
      <div class="card-header">
        <h4 class="card-title mb-0">Announcements and Advisories</h4>
      </div>
      <!-- end card header -->
      <div class="card-body">
        <div class="mx-n3">
          <div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="warning" style="max-height: 382px">
            <a href="https://www.facebook.com/sscpupquezoncity/videos/1919189238471683/" class="text-reset notification-item d-block dropdown-item" class="text-reset notification-item d-block dropdown-item active">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                    <i class="ri-checkbox-circle-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">E-REPORT: Safe Space for PUPQC Students' Academic Issues & Concerns</h6>
                  <p class="mb-0">
                    Safe space open to receive and empathize with the academic complaints and concerns being encountered by PUPQC students
                  </p>
                </div>

                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 01 hr ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid0pJgkKFiqPrTVLvev4KCJk894vhgzipEJ1tccAySHAGoiYbKW5RmBnwjkY1rf1bB7l" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                    <i class="ri-message-2-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">A Resolution Recognizing the Newly Established Student Commission on Election</h6>
                  <p class="mb-0">The election for the new Supreme Student Council Executive Board shall be held at least one (1) month before the opening of the new academic year.</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 02 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0EMX2xx6XxvW2JZ9Cf9rxDRoYsnVCVr5ACieVxtYsmFjSsZRViD7X4YUTTagRWcuXl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                    <i class="ri-checkbox-circle-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">Printing of Certificate of Candidacy (COC) will end on August 15, 2022</h6>
                  <p class="mb-0">All graduating students are required to print their COCs so that their names will be included in the list of Candidates for Graduation.</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 05 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0riNCN2XSpZV67VN4ynkr6JvAPJLPShndGJmy8vQvXVCHdzBt9e9o9GAyfxjYWozul" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                    <i class="ri-checkbox-circle-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">Freshmen Students, submission of credentials is extended until August 31, 2022.</h6>
                  <p class="mb-0">PUP Quezon City Branch freshmen students, submission of credentials is extended until August 31, 2022.</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 10 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid02v1vGtiw7i41YvzqwqhhiVwzwkdmYbzvhY76TRni8v5QKBLy6VsHVoVLwTgtfiQmBl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                    <i class="ri-checkbox-circle-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">BREAKING: CAEPUPQC results set to release today through iApply</h6>
                  <p class="mb-0">Polytechnic University of the Philippines Quezon City Branch is set to release the list of qualified first year students for academic year 2022-2023.</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 15 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02SCZLiiEYuLVwMz3pRe6yPd66H88DsW8uoVWPXqKtbXZtYgFdLqrEggD1NSmqJP5Pl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                    <i class="ri-message-2-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">The application for graduation is extended until June 15, 2022</h6>
                  <p class="mb-0">The application for graduation is extended until June 15, 2022 as per Ms. Cherrylyn Esparagoza of Admission Office. Please be guided accordingly. Thank you!</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 17 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0QYZehnipJMkCkhBT7eVr2zgxCe3nmdTBLq19cdGJxia8uh5xYwDieAuehqPTeV6nl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                    <i class="ri-message-2-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">F2F Graduation in PUPQC for Academic Year 2021-2022 in Talks</h6>
                  <p class="mb-0">A possible face-to-face graduation ceremony for the academic year 2021 -2022 were in talks last Monday in an informal session, May 16, 2022, at the PUP Quezon City branch</p>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 21 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0Rm1E452K9BacxHKmUrBkPoBUvvQYxeDb9bj2mCQJtBVFgCCaz3S2JssVsjiXx9kml" class="text-reset notification-item d-block dropdown-item" class="text-reset notification-item d-block dropdown-item active">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                    <i class="ri-checkbox-circle-fill"></i>
                  </span>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">PUPQC Admin Releases Graduating Students' Schedule for Second Semester</h6>
                  <p class="mb-0">
                    In preparation for the upcoming graduation for the A.Y. 2021-2022, the Vice President for Branches and Satellite Campuses released a schedule for graduating students for the 2nd sem.
                  </p>
                </div>

                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 23 hrs ago
                  </div>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02wRAw94xJTYpbSXkT72qoTiqaCoyPUZ6xhRA8zjHqu742KjWCEYNe37Fpf2CWLBywl" class="text-reset notification-item d-block dropdown-item" class="text-reset notification-item d-block dropdown-item active">
              <div class="d-flex">
                <div class="flex-shrink-0 avatar-xs me-3">
                  <div class="flex-shrink-0 avatar-xs me-3">
                    <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                      <i class="ri-message-2-fill"></i>
                    </span>
                  </div>
                </div>
                <div class="flex-grow-1 text-muted">
                  <h6 class="mb-1 fs-14">A Resolution Adopting the Amendments to the Constitution and By-Laws of the PUP Quezon City Supreme Student Council</h6>
                  <p class="mb-0">
                    The COL Resolution No. 001 series of 2022 states that the amendments made to PUPQC-CBL Revised 2018 were thoroughly deliberated and approved by the two-thirds (2/3 or 75%) vote
                  </p>
                </div>

                <div class="flex-shrink-0 ms-2">
                  <div class="fs-11 text-muted">
                    <i class="mdi mdi-clock-outline"></i> 25 hrs ago
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- end card-body -->
    </div>
    <!-- end card -->
  </div>
  <div class="col-xs-12 col-lg-6">
    <div class="card card-animate">
      <div class="card-header">
        <h4 class="card-title mb-0">EVRSERS TRACKER - <span class="fs-15">Upcoming Events</span>
        </h4>
      </div>
      <!-- end card header -->
      <div class="card-body">
        <div class="me-n3">
          <div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="warning" style="max-height: 382px">
            <ul class="list-group list-group-flush border-dashed">
              <li class="list-group-item ps-0">
                <div class="d-flex align-items-center g-3">
                  <div class="flex-shrink-0 me-3 mini-stats-wid">
                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
                      <div class="text-center">
                        <h5 class="mb-0">25</h5>
                        <div class="text-muted">Tue</div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="text-muted mt-0 mb-1 fs-13">12:00am - 03:30pm</h5>
                    <a href="#" class="d-block text-reset fs-14 mb-0">Level Up: An Interactive Webinar in Information & Database Management</a>
                    <span class="badge badge-outline-info mt-2">
                      <i class="mdi mdi-laptop me-1"></i>
                      COMMITS
                    </span>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="list-group-item ps-0">
                <div class="d-flex align-items-center g-3">
                  <div class="flex-shrink-0 me-3 mini-stats-wid">
                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
                      <div class="text-center">
                        <h5 class="mb-0">20</h5>
                        <div class="text-muted">Wed</div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="text-muted mt-0 mb-1 fs-13">02:00pm - 03:45pm</h5>
                    <a href="#" class="d-block text-reset fs-14 mb-0">#UNFILTERED: Behind the Scenes of Content Creation in Social Media Marketing</a>
                    <span class="badge badge-outline-secondary mt-2">
                      <i class="mdi mdi-bank me-1"></i>
                      JMS
                    </span>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="list-group-item ps-0">
                <div class="d-flex align-items-center g-3">
                  <div class="flex-shrink-0 me-3 mini-stats-wid">
                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
                      <div class="text-center">
                        <h5 class="mb-0">17</h5>
                        <div class="text-muted">Wed</div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="text-muted mt-0 mb-1 fs-13">04:30pm - 07:15pm</h5>
                    <a href="#" class="d-block text-reset fs-14 mb-0">INTELLIGENTES Meet 2022</a>
                    <span class="badge badge-outline-danger mt-2">
                      <i class="mdi mdi-school me-1"></i>
                      KATAGA
                    </span>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="list-group-item ps-0">
                <div class="d-flex align-items-center g-3">
                  <div class="flex-shrink-0 me-3 mini-stats-wid">
                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
                      <div class="text-center">
                        <h5 class="mb-0">12</h5>
                        <div class="text-muted">Tue</div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="text-muted mt-0 mb-1 fs-13">10:30am - 01:15pm</h5>
                    <a href="#" class="d-block text-reset fs-14 mb-0">In-house Leadership Training and Capacity-Building Program</a>
                    <span class="badge badge-outline-dark mt-2">
                      <i class="mdi mdi-account-group me-1"></i>
                      SSC
                    </span>
                  </div>
                </div>
              </li>
              <!-- end -->
              <li class="list-group-item ps-0">
                <div class="d-flex align-items-center g-3">
                  <div class="flex-shrink-0 me-3 mini-stats-wid">
                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
                      <div class="text-center">
                        <h5 class="mb-0">05</h5>
                        <div class="text-muted">Thu</div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h5 class="text-muted mt-0 mb-1 fs-13">08:00am - 1:30pm</h5>
                    <a href="#" class="d-block text-reset fs-14 mb-0">Start, Generate, and Evaluate Your Business</a>
                    <span class="badge badge-outline-primary mt-2">
                      <i class="bx bxs-school me-1"></i>
                      PUPQC
                    </span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="rounded mb-4" style="background: url('<?= base_url() ?>public/images/menu/img-3.jpg');background-size:cover;">
      <div class="rounded bg-primary bg-opacity-50 d-flex justify-content-center align-items-center flex-column" style="height: 300px;">
        <h1 class="pb-4 text-white fw-medium align-center text-center text-uppercase">Online Document Request System</h1>
        <div class="d-flex justify-content-center">
          <button type="button" class="mb-5 btn btn-secondary waves-effect waves-light"> <i class="ri-article-line me-2"></i> Request a document</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-xl-4 medical">
    <div class="card card-animate">
      <div class="card-body">
        <div class="text-center">
          <h4 class="mt-4 fw-semibold">Are You Feeling Unwell?</h4>
          <p class="text-muted mt-3">
            Expect the quality health care services as you conveniently book your appointments, and get e-prescriptions from our university doctor.
          </p>
          <div class="my-3">
            <button type="button" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="las la-first-aid me-2"></i> Book a Medical Consultation Appointment</button>
          </div>
          <img src="<?= base_url() ?>public/images/doctor.png" class="img-fluid" style="height: 200px;" />
        </div>
      </div>
    </div>
    <!--end card-->
  </div>
  <div class="col-xs-12 col-xl-4 dental">
    <div class="card card-animate">
      <div class="card-body">
        <div class="text-center">
          <h4 class="mt-4 fw-semibold">Do You Have a Tooth Decay?</h4>
          <p class="text-muted mt-3">
            With regular dental check-ups, our dentists can help and give you a perfect treatment plan towards a perfect beautiful smile.
          </p>
          <div class="my-3">
            <button type="button" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="las la-tooth me-2"></i> Book a Dental Consultation Appointment</button>
          </div>
          <img src="<?= base_url() ?>public/images/dentist.jpg" class="img-fluid" style="height: 200px;" />
        </div>
      </div>
    </div>
    <!--end card-->
  </div>
  <div class="col-xs-12 col-xl-4 guidance">
    <div class="card card-animate">
      <div class="card-body">
        <div class="text-center">
          <h4 class="mt-4 fw-semibold">Want to let Your Thoughts Out?</h4>
          <p class="text-muted mt-3">
            Our experienced psychologist offer free counselling support. Talk to us now if you're having emotional or psychological issues.
          </p>
          <div class="my-3">
            <button type="button" class="btn fw-medium btn-secondary waves-effect waves-light"> <i class="mdi mdi-brain me-2"></i> Book a Guidance Consultation Appointment</button>
          </div>
          <img src="<?= base_url() ?>public/images/guidance.jpg" class="img-fluid" style="height: 200px;" />
        </div>
      </div>
    </div>
    <!--end card-->
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-6">
    <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-8.jpg');background-size:cover;">
      <div class="card rounded bg-primary bg-opacity-50">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Check Property Accountabilities</h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class=" ri-file-paper-2-line me-2"></i> Visit eClearance</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6">
    <div class="rounded" style="background: url('<?= base_url() ?>public/images/menu/img-4.jpg');background-size:cover;">
      <div class="card rounded bg-primary bg-opacity-50">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-grow-1">
              <h3 class="pt-5 pb-3 text-white align-center text-center text-uppercase">Report Academic Issues & Concerns</h3>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" class="mb-5 btn fw-medium btn-secondary waves-effect waves-light"> <i class="ri-eye-fill me-2"></i> Go to EyeUlat</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>