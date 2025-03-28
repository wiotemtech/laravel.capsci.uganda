@extends('layouts.app')

@section('content')




<div style="
background-image: url('{{ asset('assets/images/new.jpeg') }}'); background-repeat: no-repeat;"class="ercdv-cards-container">
    <div class="ercdv-card ercdv-card-left">
      <h2>Catherine Phil Sickle Cell Initiative</h2>
      <p style="text-align: center;color:red">"LEAVE NO ONE BEHIND"</p>
      <div style="text-align: center;">
        <button type="button" class="btn donate-btn " data-bs-toggle="modal" data-bs-target="#mymodal">Read More</button>
       
      </div>
      

    </div>

    <div class="ercdv-card ercdv-card-right">
      <h2>Introducing Uhuru Sickle Cell Run</h2>
      <p>"Running for Awareness, Together Against Sickle Cell"</p>
      <div style="text-align: center;">
        <button type="button" class="btn donate-btn " data-bs-toggle="modal" data-bs-target="#buyKitModal">Read More</button>
    
      </div>
      
    </div>
  </div>



  <div class="modal fade" id="buyKitModal" tabindex="-1" aria-labelledby="buyKitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="background-color: red" class="modal-header">
                <h5 class="modal-title" id="buyKitModalLabel">Support The Fight Against Sickle cells</h5>
                
                <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   
              
            </div>
            <div class="modal-body">
                <!-- Content for buying a kit goes here -->
                <p>Please Pay with Momo.</p>
                <h4 class="p-3">Code: <b>726187</b></h4>
                <p>Catherine Phil SCD</p>


        <div class="modal-footer">
            <button style="background-color: red; color: white;" type="button" class="btn " data-bs-dismiss="modal">Cancel</button>
          </div>

            </div>

        </div>
    </div>
</div>

  <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="mymodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color: red;">
          <img src="assets/images/logo1.jpg" alt="Logo" class="rounded-pill me-3" style="width: 50px; height: 50px;">
          <div>
            <p class="mb-0" style="font-size: 16px;"> Head Office: Plot 1628,Block 215, <br>
              Kulambiro-Najjera Rd,Kyadondo-Mengo,Kampala Uganda<br>
              Regional Office: 2nd Floor Yodev Plaza Behind Lira Hotel <br>
              Email: info@capsci-uganda.org<br>
              Web: <a href="http://www.capsci-uganda.org" target="_blank" class="text-white">www.capsci-uganda.org</a><br>
              Tel: 07757625526773</p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body text-white" style="background-color: #324150;">
          <h1 class="h3">Background of the Catherine Phil Sickle Cell Support Initiative</h1>
          <p>Catherine Phil Sickle Cell Support Initiative stands as a distinguished
            organization committed to celebrating the enduring legacy of two 
            extraordinary souls: Catherine, a fervent champion for underprivileged 
            children, and Phil, a young boy whose life was deeply impacted by 
            Sickle Cell Disease. This initiative aspires to elevate awareness 
            of sickle cell disease in Uganda, while perpetuating the philanthropic 
            endeavors initiated by Catherine.</p>
  
          <h1 class="h3">Catherine’s Legacy</h1>
          <p>Ms. Catherine Aol epitomized the essence of motherhood and community 
           spirit, channeling her exceptional tailoring talents to elevate those 
           in her vicinity. Her unwavering commitment to aiding underprivileged 
           children was manifest in a multitude of initiatives she passionately 
           pursued. With a firm belief in the transformative power of education 
           and skill acquisition, she dedicated herself to imparting tailoring 
           skills to children who otherwise would have been deprived of such 
           invaluable opportunities. This noble endeavor equipped them with vital 
           competencies, paving the way for enhanced employment prospects and a
            richer quality of life in Lira Town.
          Catherine’s devotion transcended the simple act of teaching; she 
          cultivated an atmosphere of hope and resilience among the young 
          souls she mentored. Her endeavors were marked by profound compassion
           and an unshakeable faith in the inherent potential of every child, 
           solidifying her status as a cherished figure within her community.</p>
  
          <h1 class="h3">Phil’s Story</h1>
          <p>Phil Odongo was diagnosed with sickle cell disease in his early years,
            enduring a myriad of health challenges throughout his brief life. Yet,
             in the face of adversity, he remained a devoted son to Harriet and 
             Paul Odongo, embodying a spirited essence brimming with dreams and
              ambitions. Phil possessed a profound passion for Christian music,
               relished watching films, and was a fervent football enthusiast. 
               His aspiration to become a telecom engineer reflected not only 
               his personal ambitions but also his desire to make a meaningful
                contribution to society.
          Tragically, Phil's life was cut short at the tender age of 10 following
           a bone marrow transplant. His courageous journey through illness 
           illuminated the struggles faced by countless children afflicted with 
           sickle cell disease—a condition that impacts millions around the globe.
            Phil’s narrative stands as a poignant reminder of the challenges posed
             by this disease and serves as an inspiration for others to engage in
              advocacy efforts aimed at its eradication.</p>
  
          <h1 class="h3">Our Cardinals</h1>
          <p>Catherine Phil Sickle Cell Support Initiative is founded on the principles
            of compassion, education, and advocacy. The initiative aims to carry
             forward Catherine’s philanthropic work while sharing Phil’s story to 
             raise awareness about sickle cell disease in Uganda. By highlighting
              personal stories like Phil’s, the initiative seeks to humanize the
               challenges associated with this condition and inspire action within
                communities.</p>
  
          <ul class="list-unstyled">
            <li>1. Raising Awareness - Educating communities about sickle cell disease.</li>
            <li>2. Supporting Affected Families - Providing resources and support.</li>
            <li>3. Advocacy - Lobbying for better healthcare policies.</li>
            <li>4. Empowerment Through Education - Offering educational programs.</li>
            <li>5. Screening - Conducting free sickle cell screening.</li>
            <li>6. Fundraising and Partnerships - Organizing annual events.</li>
          </ul>
  
          <p>Through these efforts, the initiative hopes not only to honor
            Catherine’s memory but also to ensure that Phil’s legacy lives
             on by fostering understanding and support for those impacted 
             by sickle cell disease.</p>
  
          <h1 class="h3">Governance</h1>
          <p>Catherine Phil Sickle Cell Support Initiative is governed by professionals...</p>
          <h1 class="h3">Board Members</h1>
          <h class="table-responsive">
            <table class="table table-striped table-bordered text-white">
              <thead class="table-dark">
                <tr>
                  <th>S/N</th>
                  <th>Names</th>
                  <th>Qualification</th>
                  <th>Designation</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Dr. Ario Alex</td>
                  <td>Public Health Specialist -MOH</td>
                  <td>Board Chair</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Dr. Diana Rutebarika</td>
                  <td>Pediatrician -JCRC</td>
                  <td>Vice Chair</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Dr. Deogracious Munube </td>
                  <td>Consultant Hematologist -Mulago
                  </td>
                  <td>Technical Advisor</td>
                </tr>
  
                <tr>
                  <td>04</td>
                  <td>Mrs. Harriet N Odongo</td>
                  <td>Sociologist
                  </td>
                  <td>Member</td>
                </tr>
  
                <tr>
                  <td>05</td>
                  <td>Mr. Okodi Justine   </td>
                  <td>Accountant
                  </td>
                  <td>Board Treasure</td>
                </tr>
  
                <tr>
                  <td>06</td>
                  <td>Ms. Namutebi Ruth </td>
                  <td>Governance Specialist
                  </td>
                  <td>Member</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td>Dr.Odur Andrew </td>
                  <td>Consultant Gyneagologist 
                  </td>
                  <td>Technical Advisor</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td>Mr.Odur Daniel Roy </td>
                  <td>Public Health Specialist  
                  </td>
                  <td>Secretary</td>
                </tr>
              </tbody>
            </table>
  
          </h>
          <h1 class="h3">Management Team</h1>
  
          <h class="table-responsive">
            <table class="table table-striped table-bordered text-white">
              <thead class="table-dark">
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>Qualification</th>
                  <th>Designation</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Mr.Odur Daniel Roy</td>
                  <td>Public health Specialist</td>
                  <td>Executive Director</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Ms. Kukunda Blessings</td>
                  <td>Social Worker</td>
                  <td>Deputy ED</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Mr. Akar Allan Solomon </td>
                  <td>Accountant
                  </td>
                  <td>Finanace & Admin Officer</td>
                </tr>
  
                <tr>
                  <td>04</td>
                  <td>Dr. Okaka Daniel</td>
                  <td>Medical Officer
                  </td>
                  <td>Outreach Officer</td>
                </tr>
  
                <tr>
                  <td>05</td>
                  <td>Mr. Ococ Innocent  </td>
                  <td>Laboratory Assistant
                  </td>
                  <td>Laboratory Assistant</td>
                </tr>
  
                <tr>
                  <td>06</td>
                  <td>Mr. Okello Robert Hosea </td>
                  <td>Coummunity Psychologist
                  </td>
                  <td>Community Engagement Officer</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td>Ms. Achola Mercy  </td>
                  <td>Counsellor
                  </td>
                  <td>Counsellor</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td>Mr. Obluk David </td>
                  <td>Laboratory Technologist  
                  </td>
                  <td>Quality Assurance Officer</td>
                </tr>
              </tbody>
            </table>
  </h>
  
        </div>
  
        <div class="modal-footer">
          <button style="background-color: red; color: white;" type="button" class="btn " data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>




  <div class="landing-page">
    <div class="slider">
      <img src="{{ asset('assets/images/14.jpg') }}" alt="Landing Image 1"> <!-- First image -->
      <img src="{{ asset('assets/images/run.jpeg') }}" alt="Landing Image 2"> <!-- Second image -->
    </div>
  </div>

<!-- start of Understanding sickle cell section-->

<section class="sickle-section ">
<div class="container">
<div class="row align-items-center">
<!-- Left Column (Text) -->
<div class="col-md-6 sickle-text">
<h1 class="fw-bold">Understanding Sickle Cell Disease</h1>
<p class="fw-bold-p">
Sickle Cell Disease (SCD) is a serious inherited blood disorder that
affects millions of people worldwide. It mainly impacts red blood 
cells, which are responsible for carrying oxygen throughout the body.
Normally, these cells are round and flexible, allowing them to move
smoothly through blood vessels. However, in people with sickle 
cell disease, the red blood cells take on a rigid, crescent
(or sickle) shape. These abnormally shaped cells can clump
                                                                                                                    
together, block blood flow, and break down easily, leading
to severe health problems.
<span id="more-text" style="display:none;"> Join us in raising awareness, supporting affected families, and promoting better healthcare solutions. We are committed to providing educational resources, medical care, and assistance to individuals living with sickle cell disease.</span>
</p>
                                                                                                
                                                                                                                
<button style="background-color: white; color:red" type="button" class="btn donate-btn" data-bs-toggle="modal" data-bs-target="#bliko">Read More</button>
                                                                                                               
</div>
                                                                                                
                                                                                                
                                                                                                
                                                                                                
<div class="modal fade" id="bliko" tabindex="-1" aria-labelledby="mymodalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header text-white" style="background-color: red;">
 <img src="assets/images/logo1.jpg" alt="Logo" class="rounded-pill me-3" style="width: 50px; height: 50px;">
<div>
<h1 style="color: white;">Understanding Sickle Cell Disease: Causes, Dangers, and Prevention</h1>
</div>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
                                                                                                
<div class="modal-body text-white" style="background-color: #324150;">
<p style="font-size: 18px;">Sickle Cell Disease (SCD) is a serious
inherited blood disorder that
affects millions of people worldwide. It mainly impacts red blood 
cells, which are responsible for carrying oxygen throughout the body.
Normally, these cells are round and flexible, allowing them to move 
smoothly through blood vessels. However, in people with sickle cell 
disease, the red blood cells take on a rigid, crescent (or sickle)
shape. These abnormally shaped cells can clump together, block 
blood flow, and break down easily, leading to severe health problems.</p>
                                                                                                
<h1>What Causes Sickle Cell Disease?</h1>
 <p style="font-size: 18px;">SCD is caused by a genetic mutation that affects hemoglobin, the protein
in red blood cells that carries oxygen. A person develops sickle cell
disease if they inherit two copies of the sickle cell gene—one from
each parent. If someone inherits just one copy of the gene, they 
have sickle cell trait, meaning they usually don’t have symptoms 
but can pass the gene to their children.</p>
                                                                                                
<h1>Dangers of Sickle Cell Disease</h1>
<ul>
<p style="font-size: 18px;">1.Pain Crises: Episodes of severe pain due to blocked blood flow.</p>
<p style="font-size: 18px;">2.Anemia: A shortage of red blood cells, leading to fatigue and weakness.</p>
<p style="font-size: 18px;">3.Infections: Increased risk of bacterial infections due to weakened immunity.</p>
<p style="font-size: 18px;">4.Infections: Increased risk of bacterial infections due to weakened immunity.</p>
<p style="font-size: 18px;">5.Stroke: Blocked blood vessels can lead to strokes, especially in children.</p>
<p style="font-size: 18px;">6.Organ Damage: Sickle cells can damage organs like the liver, heart, and kidneys over time.</p>
<p style="font-size: 18px;">7.Delayed Growth: In children, the disease can slow down physical development and puberty</p>
                                                                                                
</ul>
                                                                                                
<h1>How to Prevent and Manage Sickle Cell Disease</h1>
<p style="font-size: 18px;">While there is no guaranteed way to prevent SCD in people already born with it,
there are steps to reduce its impact and prevent complications:</p>
                                                                                                
<ul>
<p style="font-size: 18px;">1.Genetic Counseling: If both parents carry the sickle cell
gene, they should seek counseling before having children 
to understand the risks.</p>
<p style="font-size: 18px;">2.Staying Hydrated: Drinking plenty of water helps keep blood cells flexible.</p>
<p style="font-size: 18px;">3.Avoiding Extreme Temperatures: Cold weather or high heat can trigger pain crises.</p>
 <p style="font-size: 18px;">4.Healthy Diet & Supplements: Eating a balanced diet and taking folic 
acid can support red blood cell production.</p>
<p style="font-size: 18px;">5.Regular Medical Checkups: Routine visits help monitor and manage complications early.</p>
<p style="font-size: 18px;">6.Regular Medical Checkups: Routine visits help monitor and manage complications early.</p>
<p style="font-size: 18px;">
 Vaccinations & Antibiotics: Prevent infections, especially 
 in children with weakened immune systems.</p>
<p style="font-size: 18px;">7.Medications: Drugs like hydroxyurea help reduce pain crises and hospital visits.</p>
 <p style="font-size: 18px;">8.Bone Marrow Transplant: A potential cure for some patients, though
 it requires a suitable donor.</p>
                                                                                                       
</ul>
                                                                                                         
<h1>Conclusion</h1>
 <p style="font-size: 18px;">Sickle cell disease is a lifelong condition, but with the right care and
lifestyle adjustments, people with SCD can lead healthier lives. 
 Raising awareness and supporting research efforts can improve treatment
options and bring hope for a cure.</p>
                                                                                                          
</div>
                                                                                                
<div class="modal-footer">
<button style="background-color: red; color: white;" type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
</div>
</div> 
</div>
</div>
                                                                                                
                                                                                                
 <!-- Right Column (Video) -->
<div class="col-md-6 sickle-video">
<!-- <iframe height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe> -->
<iframe width="695" height="315" src="https://www.youtube.com/embed/RpvxJmduC7w" title="UHURU SICKLE CELL RUN: COUPLES RALLIED TO DO PRE-MARITAL CHECKS TO FIGHT SICKLE CELL DISEASE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>
</div>
</section>
                                                                                                
<!-- end of understanding sickle cell section-->
                                                                                                





<!-- start of about us sectio-->

<section id="aboutUs">
<h1 class="aboutus-h1">About Us</h1>                                                                                         
<div class="container">
<div class="row g-4">
                                                                                                           
<div class="col-md-4">
<div class="about-box text-center">
<i class="fas fa-bullseye about-icon"></i>
<h2 class="aboutus-h2">Our Mission</h2>
<p style="font-size: 18px; color:black; text-align:left; font-family: 'poppins',sanserif;" class="about-content">
Raising awareness,
provide education, support research efforts, improve access to healthcare services, and
advocate
for policies that enhance the quality of life for individuals living with sickle cell disease
on
the continent. This mission encompasses a holistic approach that addresses various aspects
of the disease, including medical care, social support, community engagement, and public
health
interventions.
</p>
</div>
</div>
                                                                                            
                                                                                                            
<div class="col-md-4">
<div class="about-box text-center">
<i class="fas fa-eye about-icon"></i>
<h1 class="aboutus-h2">Our Vision</h1>
<p style="font-size: 18px; color:black; text-align:left; font-family: 'poppins',sanserif;" class="about-content">
To create a future where individuals affected by the condition can live healthy and
fulfilling
lives. This vision includes reducing the burden of sickle cell disease through early
detection,
comprehensive care management, genetic counseling, and advancements in treatment options.
Additionally, the vision aims to promote a supportive environment that empowers individuals
with
sickle cell disease to thrive and contribute positively to society.
</p>
</div>
</div>
                                                                                            
                                                                                                           
<div class="col-md-4">
<div class="about-box text-center">
<i class="fas fa-hand-holding-heart about-icon"></i>
<h2 class="aboutus-h2">Our Motto</h2>
<p style="font-size: 18px; color:black; text-align:left; font-family: 'poppins',sanserif;" class="about-content">
Empowering a comprehensive response to sickle cell disease in Africa,
through awareness creation, education dissemination, research facilitation,
healthcare access enhancement, policy advocacy, and holistic support,
encompassing medical care, social support, community engagement,
and public health interventions, to improve the quality of life for
individuals affected.
</p>
</div>
</div>
</div>
</div>
</section>
                                                                                            
<!--end of about us section-->
                                                                                            
                                                                                            
                                                                                            

<section class="ercdv-services">
    <h1>What We Do</h1>
    <div class="ercdv-container">
        <div class="ercdv-service-grid">
            <div class="ercdv-service-card">
                <i class="fas fa-book"></i>
                <h3>Counseling</h3>
                <p>We provide genetic counseling, testing services, and family counseling.</p>
            </div>
            <div class="ercdv-service-card">
                <i class="fas fa-laptop-medical"></i>
                <h3>Clinical Services</h3>
                <p>We offer referrals to our warriors through partner hospitals.</p>
            </div>
            <div class="ercdv-service-card">
                <i class="fas fa-users"></i>
                <h3>Outreaches</h3>
                <p>We conduct outreach programs to educate about SCD in Uganda.</p>
            </div>
            <div class="ercdv-service-card">
                <i class="fas fa-bullhorn"></i>
                <h3>Advocacy</h3>
                <p>We advocate for policy changes to improve the rights of individuals with SCD.</p>
            </div>
            <div class="ercdv-service-card">
                <i class="fas fa-hands-helping"></i>
                <h3>Capacity Building</h3>
                <p>We collaborate with healthcare providers to improve SCD management.</p>
            </div>
            <div class="ercdv-service-card">
                <i class="fas fa-flask"></i>
                <h3>Research</h3>
                <p>We conduct research on SCD to inform policy and improve interventions.</p>
            </div>
        </div>
    </div>
</section>


















<div class="w-100 mt-3" style="margin:0 auto ;">
  <h1 class="statistics-h1"> Our Impact</h1>

     <div class="row">
        <div class="col-md-3">
           <div class="text-center">
              <i class="fa fa-heart " style="font-size:2rem; color: red;"></i>
           </div>
           <h4 style="color: red;" class="counter text-danger text-center" data-target="10000"></h4>
           <p style="font-size: 24px; color: black; font-family:'poppins',sanserif;" class="text-center"><small>Home care training</small></p>
        </div>

       
        <div class="col-md-3">
           <div class="text-center">
              <i class="fa fa-hospital" style="font-size:2rem; color: red;"></i>
           </div>
           <h4 class="counter text-danger text-center" data-target="1200"></h4>
           <p style="font-size: 24px; color: black; font-family:'poppins',sanserif;" class="text-center"><small>Referrals</small></p>
        </div>

        <div class="col-md-3">
           <div class="text-center">
              <i class="fa fa-users" style="font-size:2rem; color: red;"></i>
           </div>
           <h4 class="counter text-danger text-center" data-target="3000000"></h4>
           <p style="font-size: 24px; color: black; font-family:'poppins',sanserif;" class="text-center"><small>Sickle Cell awareness reach</small></p>
        </div>

        <div class="col-md-3">
           <div class="text-center">
              <i class="fa fa-flask" style="font-size:2rem; color: red;"></i>
           </div>
           <h4 class="counter text-danger text-center" data-target="1"></h4>
           <p style="font-size: 24px; color: black; font-family:'poppins',sanserif;" class="text-center"><small>Research</small></p>
        </div>
     </div>

  </div>








   <!--start for frequently asked question-->
   
   <div style="background-color: #2c3e50" class="asked_main">
    <div  class="container" id="frequentlyAQ">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                <h1 class="faq-h1">Frequently Asked Questions </h1>

                    
                </div>
            </div>
        </div>
    </div>

    <div  class="container-fluid">
        <div class="row">
            <div class="col-md-6 ">
                <div class="ask_img">
                    <figure><img src="assets/images/about.jpg" class="w3-round-xlarge" alt="FAQ Image" style="height: 400px;" /></figure>
                </div>
            </div>

            <div style="padding-bottom: 28px;" class="col-md-6 ">
                <div class="ask_box">
                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">What is sickle cell disease?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Sickle cell disease is a genetic disorder that affects the production of hemoglobin, a protein in red blood cells that carries oxygen to the body's tissues. It causes red blood cells to be sickle-shaped, rigid, and prone to clotting, leading to various complications.</p>
                        </div>
                    </div>
                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">What are the symptoms of sickle cell disease?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Symptoms include: <br>- Anemia (fatigue, pale skin) <br>- Episodes of pain (sickle cell crisis) <br>- Frequent infections <br>- Yellowing of the skin and eyes (jaundice) <br>- Delayed growth and development <br>- Increased risk of stroke and organ damage</p>
                        </div>
                    </div>
                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">How is sickle cell disease inherited?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Sickle cell disease is inherited in an autosomal recessive pattern, meaning: <br>- A person inherits two copies of the sickle cell gene (one from each parent) <br>- Carriers with one copy of the gene are generally healthy but can pass it to their children <br>- If both parents are carriers, there's a 25% chance of having a child with sickle cell disease</p>
                        </div>
                    </div>

                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">Can sickle cell disease be cured?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Currently, there is no cure for sickle cell disease, but:<br>- Bone marrow transplants have shown promise <br>- Gene therapy research is ongoing <br>- Management and treatment focus on relieving symptoms, preventing complications, and improving quality of life</p>
                        </div>
                    </div>

                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">How can sickle cell disease be managed?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Management includes: <br>- Regular medical care and monitoring <br>- Pain management and crisis prevention <br>- Antibiotics for infections <br>- Blood transfusions <br>- Hydroxyurea therapy to reduce sickling <br>- Lifestyle modifications (staying hydrated, avoiding stress)</p>
                        </div>
                    </div>

                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">What’s the difference between a dominant and recessive gene?</a>
                        </div>
                        <div class="content">
                            <p class="faq-p">Geneticists use the terms dominant and recessive to describe the likelihood of a particular trait being passed on to the next generation. You have two copies of each of your genes, one from your mother and another from your father. Each copy of a gene is called an allele. Dominant alleles usually override recessive alleles. The sickle cell anemia trait is found on a recessive allele of the hemoglobin gene, which means you must have two copies of the recessive allele to have the condition.</p>
                        </div>
                    </div>
                    <div class="simpaly">
                        <div class="slider">
                            <span>+</span><a href="#" style="color: red; font-family: 'poppins',sanserif;">Who to marry?</a>
                        </div>
                        <div class="content">
                            <p><img src="assets/images/chart.jpeg" alt="Marriage Chart" class="img-fluid" /></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end for frequently asked question-->










<section class="container my-5">
  <h2 style="color:red;font-size:30px;font-family:'poppins',sanserif; ;" class="text-center mb-4">Our Partners</h2>
  <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/vol.jpeg') }}" alt="Partner 1" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/lira u.png') }}" alt="Partner 2" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/qfm.jpeg') }}" alt="Partner 3" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/p2.jpeg') }}" alt="Partner 4" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/m.jpeg') }}" alt="Partner 5" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/code.png') }}" alt="Partner 6" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/n.png') }}" alt="Partner 7" class="partner-logo">
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="partner-card">
              <img src="{{ asset('assets/images/l.jpeg') }}" alt="Partner 8" class="partner-logo">
          </div>
      </div>
  </div>
</section>


             





                                                                                            
                                                                                               


   
   
   
   
   
   
   
   
   
   
   
   
    <!-- contact testimonial-->
   <div class="contact">
<div class="container" id="contact">
<div class="row">
<div class="col-md-6">
</div>
<div class="col-md-6">
<div class="w3-card-2 w3-white w3-round-large">
                                                                                              
<form style="background-color: white" action="function.php" method="post">
<div class="text-center mt-4">
<div class="titlepage">
<h2> <span style="color: red;">Contact Us </span></h2>
</div>
</div>
                                                                                              
<div style="margin-bottom: 80px;" class="container">
<div class="row">
<div class="col-sm-6 col-md-6">
<div class="formgroup">
<input class="form-control" placeholder="Full Name" type="text" name="fname" required>
</div>
</div>
<div class="col-sm-6 col-md-6">
<input class="form-control" placeholder="Email" type="email" name="email" required>
</div>
</div>
                                                                                              
<div class="row mt-3">
<div class="col-sm-12 col-md-12">
<input class="form-control" placeholder="Phone" type="number" name="phone" required>
</div>
<div class="col-sm-12 col-md-12 mt-3">
<textarea class="form-control" placeholder="Message" type="text" name="message"
required></textarea>
</div>
</div>
<a href="mailto:info@capsci-uganda.org">
<button style="background-color: red; border: none; color: white; padding: 10px; border-radius: 5px; font-size: 18px;" type="button" class="send w3-btn mt-3 mb-5 w-100">
Send
</button>
</a>
                                                                                              
                                                                                              
<br>
</div>
</form>
</div>
</div>
</div></div>
</div>
                                                                                              
<!-- end contact -->   




























































@endsection 