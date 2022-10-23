@extends('layouts.master')

@section('title', 'Home')

@section('content')
@include('layouts.navbar')

<!-- Pemesanan -->
<form class="uk-grid-small uk-margin-medium-top uk-margin-xlarge-left " uk-grid>
        <div class="uk-width-1-4@s">
                <div class="uk-margin">
                    <span>Tanggal Check in</span>
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="calendar"></span>
                        <input class="uk-input uk-form-large" name= "dateofbirth" type="date">
                    </div>
                    @error('dateofbirth')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="uk-width-1-4@s">
                <div class="uk-margin">
                <span>Tanggal Check Out</span>
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="calendar"></span>
                        <input class="uk-input uk-form-large" name= "dateofbirth" type="date">
                    </div>
                    @error('dateofbirth')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
        </div>
        <div class="uk-width-1-4@s">
            <br>
            <a href="#modal-example" class="uk-button uk-button-default uk-button-large" uk-toggle>Pesan</a>
            <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Form Pemesanan</h2>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Nama Pemesanan</span>
                            <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Email</span>
                            <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>No Handphone</span>
                            <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Nama Tamu</span>
                            <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                        </div>
                    </div>
                    <div class="uk-margin">
                    <span>Tipe Kamar</span>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select">
                                <option>Option 01</option>
                                <option>Option 02</option>
                            </select>
                        </div>
                    </div>

                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="button">Save</button>
                    </p>
                </div>
            </div>
        </div>
</form>
<!-- About Hotel -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 ><strong>Star</strong>Hotel</h2>  
</div>
<div class="uk-container">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi earum expedita aliquam non saepe modi quas voluptates aut atque voluptas, reiciendis vitae! Facere eaque nulla natus excepturi! At, cumque quidem!locale_filter_matches Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus voluptates sunt soluta asperiores est suscipit, mollitia accusantium nemo modi ad labore illo corporis nam laboriosam praesentium alias eaque, dolor cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi minima neque dicta eligendi praesentium corrupti quidem? Necessitatibus sapiente iusto laudantium nostrum. Ipsum doloremque nulla reiciendis praesentium dicta commodi dolorem.</p>
</div>
<!--  -->
<!-- Facility Hotel -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 ><strong>Facility</strong>Hotel</h2>
        <br>
</div>
<div class="uk-container">
    <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-3@s uk-grid" uk-grid>
    <div>
    @foreach($facilitieshotel as $facilitieshotels)
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-media-top">
                <img src="https://getuikit.com/docs/images/light.jpg" width="1800" height="1200" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-center">{{$facilitieshotels->name}}</h3> 
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
<!--  -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 ><strong>All </strong>Room</h2>  
</div>
<div class="uk-container">
<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-3@m uk-grid" uk-grid>
    @foreach($facilitiesroom->room as $facilitiesrooms)
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="https://getuikit.com/docs/images/light.jpg" width="1800" height="1200" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{$facilitiesrooms->room->tiperoom}}</h3>
                <p>Facilities :</p>
                <li value="">{{$facilitiesrooms->name}}</li>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
<br>
<br>
<!-- FOOTERS -->
<div class="uk-position-relative uk-position-z-index-zero">
    <div class="uk-background-secondary uk-padding uk-flex uk-flex-middle uk-light uk-height-medium uk-position-z-index-negative" uk-sticky="position: bottom; overflow-flip: true; start: -100%; end: 0">
        <div class="uk-light uk-position-top-left uk-container uk-margin-top uk-margin-left">
            <h2>Hotel<strong>Star</strong></h2>
            
        </div>
        <div class="uk-light uk-position-bottom-left uk-container uk-margin-bottom uk-margin-left">
            Copyright 
        </div>
    </div>
</div>
