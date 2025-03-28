@extends('layouts.app')

@section('content')


<section style=" background-image: url('{{ asset('assets/images/14.jpg') }}');" class="landing-section" class="landing-section">
                                                                                                    <div class="overlay"></div>
                                                                                                    <div class="landing-content">
                                                                                                        <h1>Give Hope,Save Lives</h1>
                                                                                                        <p style="font-weight: bold; color: red;">"Leave No One Behind"</p>
                                                                                                    </div>
                                                                                                </section>
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                                   <!-- Team Section -->
                                                                                              <div class="container team-section">
                                                                                                  <h2 style="font-weight: bold; font-size: 24px; color: white;" class="text-center mb-4"> THE MANAGEMENT TEAM</h2>
                                                                                                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                                                                                    <!-- Team Member 1 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card top" id="card1">
                                                                                                        <img src=" {{ asset('assets/images/ceo.jpg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 1">
                                                                                                        <div class="card-body">
                                                                                                          <h5  class="card-title">Mr.Odur Daniel Roy</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#bioModal1">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                    
                                                                                              
                                                                                                    <!-- Team Member 2 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card right" id="card2">
                                                                                                        <img src=" {{ asset('assets/images/Kukunda Blessing.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 2">
                                                                                                        <div class="card-body">
                                                                                                          <h5 class="card-title">Ms.Kukunda Blessing</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#ojede">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <!-- Team Member 3 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card bottom" id="card3">
                                                                                                        <img src=" {{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 3">
                                                                                                        <div class="card-body">
                                                                                                          <h5 class="card-title"> Mr. Akar Allan Solomon</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#omara">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <!-- Team Member 4 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card left" id="card4">
                                                                                                        <img src=" {{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 4">
                                                                                                        <div class="card-body">
                                                                                                          <h5 class="card-title">Dr.Okaka Daniel</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#opio">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <!-- Team Member 5 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card right" id="card5">
                                                                                                        <img src=" {{ asset('assets/images/OCOC INNOCENT JASPHER.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 5">
                                                                                                        <div class="card-body">
                                                                                                          <h5 class="card-title">Mr.Ococ Innocent</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#apio">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card top" id="card1">
                                                                                                        <img src="  {{ asset('assets/images/ACHOLA  MERCY.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 1">
                                                                                                        <div class="card-body">
                                                                                                          <h5 style="color: gray;" class="card-title">Ms.Achola Mercy</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#odur">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card top" id="card1">
                                                                                                        <img src="{{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 1">
                                                                                                        <div class="card-body">
                                                                                                          <h5 style="color: gray;" class="card-title">Mr.Okello Robert Hosea</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#andrew">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                              
                                                                                                    <!-- Team Member 6 -->
                                                                                                    <div class="col">
                                                                                                      <div class="card team-card top" id="card6">
                                                                                                        <img src="{{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 6">
                                                                                                        <div class="card-body">
                                                                                                          <h5 class="card-title">Mr.Obluk David</h5>
                                                                                                          <div class="social-icons">
                                                                                                            <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                            <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                            <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                          </div>
                                                                                                          
                                                                                                          <button class="btn-2  mt-3" data-bs-toggle="modal" data-bs-target="#aa">Learn More</button>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                
                                                                                              
                                                                                                <!-- Modal 1: John Doe Bio -->
                                                                                                <div class="modal fade" id="bioModal1" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Mr.Odur Daniel Roy</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Executive Director</h1>
                                                                                                        <p>A dedicated advocate for sickle cell, a skilled public health specialist, and a professional
                                                                                                          focused on people's needs,he have achieved significant success in initiating, promoting, coordinating, and leading a wide
                                                                                                          range of strategic development programs to foster patient care and advocacy.
                                                                                              
                                                                                                          As a resourceful leader, he has played a crucial role in monitoring project progress and
                                                                                                          evaluating the successful achievement of both short and long-term goals, utilizing appropriate
                                                                                                          tools and techniques. His track record demonstrates the implementation of effective strategies
                                                                                                          based on resource allocation, budget forecasting, and the timely delivery of high-quality
                                                                                                          project outcomes that align with established business standards.
                                                                                              
                                                                                                          He excels in mentoring teams to reach their objectives, whether it be ensuring client
                                                                                                          satisfaction, enhancing revenue, creating value, or achieving operational excellence.
                                                                                                          Additionally, he possess strong capabilities in hiring staff, crafting proposals, and organizing
                                                                                                          events, while proactively anticipating and troubleshooting complex issues through the
                                                                                                          implementation of innovative initiatives.
                                                                                              
                                                                                                          Remaining up-to-date with patient and caregivers plights and effectively communicating
                                                                                                          expectations to key stakeholders are among his proficiencies.</p>
                                                                                                      </p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="ojede" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Ms.Kukunda Blessing</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Deputy ED</h1>
                                                                                                        <p>Kukunda Blessing, a professional social worker, obtained her bachelor's
                                                                                                                              
                                                                                                          degree in 2012. She is dedicated to community advocacy, conducting
                                                                                                           outreaches, and offering social support. She is particularly 
                                                                                                           enthusiastic about raising awareness for Sickle Cell disease.
                                                                                              
                                                                                                         As the Director of Greendoor Supplies Uganda Limited, an agro
                                                                                                          business company, she is committed to supporting community
                                                                                                          
                                                                                                           development by enhancing the value of locally grown fruits 
                                                                                                           to produce top-quality organic juices and wines. This commitment 
                                                                                                           is demonstrated through providing market access to farmers, creating
                                                                                                            job opportunities, and offering social support.</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="omara" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Mr. Akar Allan Solomon</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Finance & Admin Office</h1>
                                                                                                        <p>Accountant</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="opio" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Dr.Okaka Daniel</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Outreach Officer</h1>
                                                                                                        <p>Medical Officer</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="apio" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Mr.Ococ Innocent</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Laboratory Assistant</h1>
                                                                                                        <p>Laboratory Technician attached to Lira Regional Referral Hospital</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="odur" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Ms.Achola Mercy
                                                                                                      </h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Counsellor</h1>
                                                                                                        <p>A dedicated Counselor, she's offered customized Counseling services to a number of sickle
                                                                                                          cell warriors across the country, including Lira Regional Referral Hospital</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="andrew" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Mr.Okello Robert Hosea</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Community Engagement Officer</h1>
                                                                                                        <p>Community Psychologist</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                                <div class="modal fade" id="aa" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="bioModal1Label">Mr.Obluk David</h5>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                          <h1>Head of Quality Assurance</h1>
                                                                                                        <p>Laboratory Technologist</p>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </div>
                                                                                              
                                                                                              
                                                                                              
                                                                                                  <!-- banner -->
                                                                                              
                                                                                                 
                                                                                              
                                                                                                             
                                                                                              
                                                                                                             
                                                                                                           
                                                                                                             
                                                                                              
                                                                                                              
                                                                                                           
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                              
                                                                                                  <div class="fixed-bottom-right" style="margin-bottom:60px;">
                                                                                                      <a class="twitter-dm-button w3-btn w3-green" style="border-radius:100%;width:50px;height:50px;"
                                                                                                          href="https://x.com/UgandaSickle?t=Dk10X00zZYjvcrpMAqpWJA&s=08" data-screen-name="capsci-uganda">
                                                                                                          <i class="fab fa-whatsapp mt-1" style="color:white;font-size:30px;margin-left:-5px;"></i>
                                                                                                          <!-- <i class="fa fa-twitter" ></i> -->
                                                                                                      </a>
                                                                                                  </div>
                                                                                                  <div class="fixed-bottom-right">
                                                                                                      <a class="twitter-dm-button w3-btn w3-black" style="border-radius:100%;width:50px;height:50px;"
                                                                                                          href="https://x.com/UgandaSickle?t=Dk10X00zZYjvcrpMAqpWJA&s=08" data-screen-name="capsci-uganda">
                                                                                                          <i class="fab fa-x mt-1" style="color:white;font-size:30px;margin-left:-5px;"></i>
                                                                                                          <!-- <i class="fa fa-twitter" ></i> -->
                                                                                                      </a>
                                                                                                  </div>
                                                                                              


@endsection