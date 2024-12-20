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
                                    <strong>Add Name Room</strong>
                                </div>
                                <div class="uk-card-body">
                                    <form method="POST" action="store" enctype="multipart/form-data">
                                        @csrf
                                        <div class="uk-margin">
                                                <div class="uk-position-relative">
                                                    <span class="uk-form-icon ion-edit"></span>
                                                    <input name="nama_ruangan" class="uk-input" type="text" placeholder="Name Room">
                                                </div>
                                            @error('nama_ruangan')
                                                <div class="uk-alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="uk-margin">
                                            <select class="uk-select" name="room_id">
                                            @foreach($room as $rooms)
                                                <option value="{{$rooms->id}}">{{$rooms->tiperoom}}</option>
                                            @endforeach
                                            </select>
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
