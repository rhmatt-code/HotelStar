@extends('layouts.master')

@section('title', 'Home')

@section('content')
@include('layouts.navbar')

<!-- Pemesanan -->
            <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Form Pemesanan</h2>
                <form action="{{route('storeorder')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="uk-width-1-1@s">
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Nama Pemesanan</span>
                            <input class="uk-input uk-form-large" name="nama_pemesan" type="name" placholder="Nama Pemesan">
                        </div>
                        @error('nama_pemesan')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Email</span>
                            <input class="uk-input uk-form-large" name="email" type="email" placholder="Email">
                        </div>
                        @error('email')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>No Handphone</span>
                            <input class="uk-input uk-form-large" name="no_handphone" type="name" placholder="Email">
                        </div>
                        @error('no_handphone')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <span>Nama Tamu</span>
                            <input class="uk-input uk-form-large" name="nama_tamu" type="name" placholder="Email">
                        </div>
                        @error('nama_tamu')
                        <div class="uk-alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="uk-margin">
                    <span>Tipe Kamar</span>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="room_id">
                                @foreach ($room as $rooms)
                                <option value="{{$rooms->id}}">{{$rooms->tiperoom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <span>Tanggal Check in</span>
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="calendar"></span>
                            <input class="uk-input uk-form-large" name="cek_in" type="date">
                        </div>
                        @error('cek_in')
                            <div class="uk-alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="uk-margin">
                    <span>Tanggal Check Out</span>
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="calendar"></span>
                            <input class="uk-input uk-form-large" name= "cek_out" type="date">
                        </div>
                        @error('cek_out')
                            <div class="uk-alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        </div>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary">Save</button>
                    </p>
                </form>
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
        <h2 id="facility"><strong>Facility</strong>Hotel</h2>
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
        <h2 id="room"><strong>All </strong>Room</h2>
        <br>
</div>
<div class="uk-container">
<div class="uk-child-width-1-2 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid" uk-grid>
    @foreach($room as $rooms)
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="https://getuikit.com/docs/images/light.jpg" style="object-fit: cover; width: 100%; height: 300px; object-position: center 40%;" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{$rooms->tiperoom}}</h3>
                <p>Facilities :</p>
                @foreach($rooms->facilitiesroom as $facility)
                    <li>{{$facility->name}}</li>
                @endforeach
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
