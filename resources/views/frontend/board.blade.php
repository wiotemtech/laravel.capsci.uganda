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
                                                                                                      <h2 style="font-weight: bold; font-size: 24px;" class="text-center mb-4">THE BOARD MEMBERS</h2>
                                                                                                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                                                                                        <!-- Team Member 1 -->
                                                                                                        <div class="col">
                                                                                                          <div class="card team-card top" id="card1">
                                                                                                            <img src=" {{ asset('assets/images/Alex Riolexus Ario.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 1">
                                                                                                            <div class="card-body">
                                                                                                              <h5  class="card-title">Dr. Alex Riolexus Ario</h5>
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
                                                                                                            <img src=" {{ asset('assets/images/Diana Antonia Rutebarika.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 2">
                                                                                                            <div class="card-body">
                                                                                                              <h5 class="card-title">Dr. Diana Antonia Rutebarika</h5>
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
                                                                                                            <img src=" {{ asset('assets/images/Namutebi Ritah.jpeg') }}" class="card-img-top mx-auto mt-3" alt="Team Member 3">
                                                                                                            <div class="card-body">
                                                                                                              <h5 class="card-title"> Ms.Namutebi Ritah</h5>
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
                                                                                                              <h5 class="card-title">Mr. Justine Okodi</h5>
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
                                                                                                            <img src="{{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 5">
                                                                                                            <div class="card-body">
                                                                                                              <h5 class="card-title">Ms. Odongo Harriet Namissi</h5>
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
                                                                                                            <img src="{{ asset('assets/images/logo1.png') }}" class="card-img-top mx-auto mt-3" alt="Team Member 1">
                                                                                                            <div class="card-body">
                                                                                                              <h5 style="color: gray;" class="card-title">Mr.Odur Daniel Roy</h5>
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
                                                                                                              <h5 style="color: gray;" class="card-title">Dr.Odur Andrew</h5>
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
                                                                                                              <h5 class="card-title">Dr. Deogratias Munube</h5>
                                                                                                              <div class="social-icons">
                                                                                                                <a href="#" class="fab fa-facebook" data-bs-toggle="tooltip" title="Facebook"></a>
                                                                                                                <a href="#" class="fab fa-twitter" data-bs-toggle="tooltip" title="Twitter"></a>
                                                                                                                <a href="#" class="fab fa-linkedin" data-bs-toggle="tooltip" title="LinkedIn"></a>
                                                                                                              </div>
                                                                                                              
                                                                                                              <button class="btn-2  mt-3 " data-bs-toggle="modal" data-bs-target="#aa">Learn More</button>
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
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Dr. Alex Riolexus Ario</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Board Chairman</h1>
                                                                                                            <p>MD, PhD, is a Medical Doctor and Public Health Specialist with
                                                                                                              extensive knowledge in epidemiology, health policy, management
                                                                                                               and planning, health systems reform and quality improvement 
                                                                                                               models for health service delivery.
                                                                                                             He's the Director of Public Health Institute of Uganda</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="ojede" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Dr. Diana Antonia Rutebarika</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Vice Chairperson Of the Board</h1>
                                                                                                            <p>Diana Rutebarika is the Head of Paediatrics at Joint Clinical Research Centre.
                                                                                                              Attained her bachelors degree from Makerere University;post graduate Paediatric
                                                                                                               studies from Sydney(Children’s Hospital at Westead). 
                                                                                                              She is a highly skilled and compassionate paediatrician dedicated to the health 
                                                                                                              and well-being of children. Dr. Diana has earned a stellar reputation for her 
                                                                                                              expertise in paediatrics as a clinician and researcher in the field of Infectious
                                                                                                               diseases and non-infectious diseases (Allergy, Childhood Hypertension and Sickle
                                                                                                                Cell Anemia ).
                                                                                                              In addition to providing outstanding primary care for children,
                                                                                                               Dr.Diana is actively involved in community outreach programs, advocacy and
                                                                                                                promotion of child health and safety. Her dedication to the well-being
                                                                                                                 of young people and their families has made her a trusted figure in the 
                                                                                                                 field of paediatrics and a valuable addition to the management team at
                                                                                                                  the JCRC-department of Paediatrics</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="omara" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Namutebi Ritah</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Board Secretary</h1>
                                                                                                            <p>Ritah holds a degree in Actuarial Science and a Post-Graduate Diploma in 
                                                                                                              Project Planning and Management. She brings over ten years of experience
                                                                                                               in coordinating the engagement, recruitment, and growth  from a number
                                                                                                                of  Non Profit organizations.  As the Board Secretary CAPSCI, Ritah
                                                                                                                 has demonstrated her exceptional organizational and leadership skills.
                                                                                                                  notably as the note-taker during board meetings, ensuring accurate 
                                                                                                                  and timely documentation.
                                                                                                  
                                                                                                              Ritah excels in planning, coordinating, and executing quaterly CAPSCI member
                                                                                                               networking events.
                                                                                                              Through this, she has established multi-sectoral partnerships and 
                                                                                                              collaborations that provide synergies for resource mobilization in
                                                                                                               the health sector.</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="opio" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Mr. Justine Okodi</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Board Treasure</h1>
                                                                                                            <p></p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="apio" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Ms. Odongo Harriet Namissi</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>member</h1>
                                                                                                            <p></p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="odur" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Mr.Odur Daniel Roy</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Secretary</h1>
                                                                                                            <p>Public Health Specialist</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="andrew" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Dr.Odur Andrew</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Technical Advisor</h1>
                                                                                                            <p> Consultant Gyneagologist</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                    <div class="modal fade" id="aa" tabindex="-1" aria-labelledby="bioModal1Label" aria-hidden="true">
                                                                                                      <div class="modal-dialog">
                                                                                                        <div class="modal-content">
                                                                                                          <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="bioModal1Label">Dr. Deogratias Munube</h5>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                          </div>
                                                                                                          <div class="modal-body">
                                                                                                              <h1>Head of Quality Assurance</h1>
                                                                                                            <p></p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
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