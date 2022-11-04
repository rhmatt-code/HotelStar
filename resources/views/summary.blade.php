@extends('layouts.master')

@section('title', 'PDF')

@section('content')

<!-- <div class="uk-container">
<div class="uk-navbar uk-background-secondary uk-light">
    <h1 class="uk-margin-left">INVOICE </h1>
</div>
</div> -->

<div class="uk-section-secondary">
    <div class="uk-section uk-light">
        <div class="uk-navbar uk-container">
            <div class="uk-navbar-left">
            <h1>INVOICE</h1>
            </div>
            <div class="uk-navbar-right">
            <h1>Hotel<strong>Star</strong></h1>
            </div>
        </div>
    </div>
</div>

<div class="uk-child-width-1-2@s uk-child-width-1-6@m uk-margin-top uk-margin-medium-left" uk-grid>
    <div>
        <div class="uk-margin">
            <span class="uk-text-lead">Invoice Number:</span>
            <br>
            <span>IXIXIXIXIX</span>
        </div>
        <div class="uk-margin">
            <span class="uk-text-lead">Billied To:</span>
            <br>
            <span>IXIXIXIXIX</span>
        </div>
    </div>
     <div>
        <div class="uk-margin">
            <span class="uk-text-lead">Date of Issue:</span>
            <br>
            <span>IXIXIXIXIX</span>
        </div>
        <div class="uk-margin">
            <span class="uk-text-lead">My Company:</span>
            <br>
            <span>IXIXIXIXIX</span>
        </div>
    </div>
</div>


<div class=" uk-margin-top">
    <table class="uk-table  uk-table-divider">
        <thead>
            <tr>
                <th class="uk-width-small">Tipe Room</th>
                <th class="uk-width-small">Nama Pemesan</th>
                <th class="uk-width-small">Nama Tamu</th>
                <th class="uk-width-small">Cek In</th>
                <th class="uk-width-small">Cek Out</th>
                <th class="uk-table-shrink uk-text-nowrap">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $reservation->room->tiperoom }}</td>
                <td>{{ $reservation->nama_pemesan }}</td>
                <td>{{ $reservation->nama_tamu }}</td>
                <td>{{ $reservation->cek_in }}</td>
                <td>{{ $reservation->cek_out }}</td>
                <td>{{ $reservation->room->price }}</td>
            </tr>
        </tbody>
    </table>
    <div class="uk-text-right">
        <button  class="uk-button uk-button-default uk-button-large uk-text-large" disabled>{{$total}}</button>
    </div>
</div>

<div class="uk-position-relative uk-position-z-index-zero uk-margin-top">
    <div class="uk-background-secondary uk-padding uk-light uk-height-small  uk-text-center" >
        <div class="uk-light uk-container uk-margin-top uk-margin-left ">
            <h2>Thank You for Business !!</h2>
        </div>
    </div>
</div>