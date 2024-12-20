@extends('admin.layouts.master')

@section('title', 'Home')

@section('content')
@include('admin.layouts.navbar')

<div class="content-padder content-background">
    <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <strong>Add Room</strong>
                                </div>
                                <div class="uk-card-body">
                                    <form method="POST" action="{{route('storeroom')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-edit"></span>
                                                    <input name="tiperoom" class="uk-input" type="text" placeholder="Tipe Room">
                                                </div>
                                            @error('tiperoom')
                                                <div class="uk-alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-edit"></span>
                                                    <input name="jumlah_orang" class="uk-input" type="number" placeholder="Number of people">
                                                </div>
                                            @error('jumlahkamar')
                                                <div class="uk-alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                <div uk-form-custom="target: true">
                                                    <input name="image" type="file">
                                                    <input name="image" class="uk-input uk-form-width-large" type="text" placeholder="Select file" disabled>
                                                </div>
                                                </div>
                                            @error('image')
                                                <div class="uk-alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-edit"></span>
                                                    <input name="price" class="uk-input" type="number" placeholder="Price">
                                                </div>
                                            @error('price')
                                                <div class="uk-alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <center>
                                        <button class="uk-button uk-button-default" name="submit">Save</button>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
