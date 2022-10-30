@extends('admin.layouts.master')

@section('title', 'Home')

@section('content')
@include('resepsionis.layouts.navbar')

<div class="content-padder content-background">
    <div class="uk-section-small">
                    <div class="uk-container uk-container-large">
                        <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-header">
                                        <strong>Resepsionis</strong>
                                    </div>
                                    <div class="uk-card-header">
                                        <form>
                                            <input class="uk-input uk-width-1-4" name="date" type="date">
                                            <button type="submit" class="uk-button uk-button-default">Filter</button>
                                        </form>
                                    </div>
                                    <div class="uk-card-body">
                                        <table class="uk-table uk-table-striped" id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Tamu</th>
                                                    <th>Check In</th>
                                                    <th>Check Out</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($filteredreservations as $reservations)
                                            <tr>
                                            @if($reservations->status == false)
                                                <td>{{ $reservations->id }}</td>
                                                <td>{{ $reservations->nama_tamu }}</td>
                                                <td>{{ $reservations->cek_in }}</td>
                                                <td>{{ $reservations->cek_out }}</td>
                                                <td>
                                                    <a href={{ url("resepsionis/checkin/$reservations->id") }}>Cek in</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>