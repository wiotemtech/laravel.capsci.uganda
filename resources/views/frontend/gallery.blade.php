@extends('layouts.app')

@section('content')














<section style=" background-image: url('{{ asset('assets/images/14.jpg') }}');" class="landing-section">
                                                                                                    <div class="overlay"></div>
                                                                                                    <div class="landing-content">
                                                                                                        <h1>Give Hope,Save Lives</h1>
                                                                                                        <p style="font-weight: bold; color: red;">"Leave No One Behind"</p>
                                                                                                    </div>
                                                                                                </section>
                                                                                            
                                                                                                 
                                                                                                  <!-- Gallery Section -->
                                                                                                <section class="gallery mt-0">
                                                                                                    <div class="container">
                                                                                                        <h2>Our Gallery</h2>
                                                                                                        <div class="row g-4">
                                                                                                            <!-- Gallery Items -->
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery1.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/11.jpg') }}" alt="Gallery Image 1">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery1.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/new.jpeg') }}" alt="Gallery Image 1">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery2.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/12.jpg') }}" alt="Gallery Image 2">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery3.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/12.jpg') }}" alt="Gallery Image 3">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery4.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/14.jpg') }}" alt="Gallery Image 4">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                            
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery5.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/15.jpg') }}" alt="Gallery Image 5">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                                 
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery5.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/17.jpg') }}" alt="Gallery Image 5">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery5.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/18.jpg') }}" alt="Gallery Image 5">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery5.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/9.jpg') }}" alt="Gallery Image 5">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery5.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/4.jpg') }}" alt="Gallery Image 5">
                                                                                                                </div>
                                                                                                            </div>
                                                                                            
                                                                                                            
                                                                                                            
                                                                                            
                                                                                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 fade-in">
                                                                                                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightboxModal" onclick="openModal('assets/images/gallery6.jpg')">
                                                                                                                    <img src="{{ asset('assets/images/16.jpg') }}" alt="Gallery Image 6">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            
                                                                                            
                                                                                               
                                                                                            
                                                                                            
                                                                                            
                                                                                            





@endsection