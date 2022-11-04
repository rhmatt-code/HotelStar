@extends('layouts.master')

@section('title', 'PDF')


<div class="uk-section-secondary">
    <div class="uk-section uk-light">
        <div class="uk-navbar uk-container">
            <div class="uk-navbar-left">
            <h2>INVOICE</h2>
            </div>
            <div class="uk-navbar-right">
            <h2>Hotel<strong>Star</strong></h2>
            </div>
        </div>
    </div>
</div>

<div class="uk-margin-top uk-margin-medium-left">
    <div>
        <div class="uk-margin">
            <span class="uk-text-lead">Invoice Number:</span>
            <br>
            <span>IXIXIXIXIX</span>
        </div>
        <div class="uk-margin">
            <span class="uk-text-lead">Billied To:</span>
            <br>
            <span>{{$reservation->nama_pemesan}}</span>
        </div>
    </div>
     <div class="uk-position-right">
        <div class="uk-margin">
            <span class="uk-text-lead">Date of Issue:</span>
            <br>
            <span>{{$reservation->created_at}}</span>
        </div>
        <div class="uk-margin">
            <span class="uk-text-lead">My Company:</span>
            <br>
            <span>Hotel Star</span>
        </div>
    </div>
</div>


<div class="uk-margin-top">
    <table class="table">
        <thead>
            <tr>
                <th>Tipe Room</th>
                <th>Nama Pemesan</th>
                <th>Nama Tamu</th>
                <th>Cek In</th>
                <th>Cek Out</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
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
        <button  class="uk-button uk-button-default uk-button-large uk-text-large uk-background-secondary uk-light" disabled>{{$total}}</button>
    </div>
</div>

<div class="uk-position-relative uk-position-z-index-zero uk-margin-top">
    <div class="uk-background-secondary uk-padding uk-light uk-height-small  uk-text-center" >
        <div class="uk-light uk-container uk-margin-top uk-margin-left ">
            <h2>Thank You for Business !!</h2>
        </div>
    </div>
</div>