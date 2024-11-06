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
    <p>Hotelstar adalah sebuah destinasi penginapan yang berkomitmen untuk memberikan pengalaman berkelas dan tak terlupakan bagi para tamu. Terletak di lokasi yang strategis dan dikelilingi oleh panorama menawan, Hotelstar menjadi pilihan ideal bagi para pelancong yang mencari kenyamanan dan kemewahan dengan nuansa yang hangat. Hotel ini dirancang dengan arsitektur modern, interior mewah, serta dekorasi yang artistik, memberikan suasana yang elegan sekaligus ramah di setiap sudutnya.</p>
    <p>Hotelstar memiliki berbagai tipe kamar yang dirancang untuk memenuhi kebutuhan beragam tamu, mulai dari kamar standar untuk para pelancong solo atau pasangan hingga suite mewah bagi mereka yang menginginkan kenyamanan ekstra. Setiap kamar dilengkapi dengan fasilitas unggulan, seperti tempat tidur berkualitas tinggi, linen mewah, TV layar datar, AC, brankas pribadi, minibar, serta koneksi Wi-Fi yang stabil dan cepat, memastikan para tamu dapat menikmati waktu istirahat dengan nyaman sambil tetap terhubung dengan dunia luar.</p>

</div>
<!--  -->
<!-- Facility Hotel -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 id="facility"><strong>Facility</strong>Hotel</h2>
        <br>
</div>
<div class="uk-container">
    <div class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid" uk-grid>
        <div class="uk-slider-container-offset" uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                    @foreach($facilitieshotel as $facilitieshotels)
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('storage/facilitieshotel/' .$facilitieshotels->image) }}" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-text-center">{{$facilitieshotels->name}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
<!--  -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 id="room"><strong>Type </strong>Room</h2>
        <br>
</div>
<div class="uk-container">
<div class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid" uk-grid>
    <div class="uk-slider-container-offset" uk-slider>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                @foreach($room as $rooms)
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ asset('storage/room/' .$rooms->image) }}" style="object-fit: cover; width: 100%; height: 300px; object-position: center 40%;" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">{{$rooms->tiperoom}}</h3>
                            <p>Facilities :</p>
                            @foreach($rooms->facilitiesroom as $facility)
                                <span>{{$facility->name}}</span>
                            @endforeach
                            <br>
                            <p>Harga Sewa: <strong>@currency($rooms->price)</strong></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--  -->
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
    <h2 id="room"><strong>Hotel </strong>Gallery</h2>
    <br>
</div>
<div class="uk-container">
<div class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid" uk-grid>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-text-center uk-grid-column-small" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-media"><img src="{{ asset('storage/gallery.jpg') }}"></div>
        </div>
    </div>
</div>
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
    <h2 id="room"><strong>Hotel </strong>Room</h2>
    <br>
</div>
@foreach ($room as $room)
<h1 class="uk-heading-bullet">{{$room->tiperoom}}</h1>
<div class="uk-container">
    <div class="uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid" uk-grid>
        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-5@l uk-text-center uk-grid-column-small" uk-grid>
            @foreach($room->nameroom  as $nameroom)
            <div>
                <div class="uk-card uk-card-default uk-card-body">{{$nameroom->nama_ruangan}}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br>
@endforeach
</div>
</div>
<br>
<br>

<!-- FOOTERS -->
<div class="uk-position-relative uk-position-z-index-zero">
    <div class="uk-background-secondary uk-card uk-card-default uk-card-body uk-text-center uk-position-z-index position:b">
        <div class="uk-light uk-position-top-left uk-container uk-margin-top uk-margin-left">
            <p>@Copyright HotelStar</p>
        </div>
    </div>
</div>
