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
                                        <strong>Room Hotel</strong>
                                    </div>
                                    <div class="uk-card-body">
                                        <table class="uk-table uk-table-striped" id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Ruangan</th>
                                                    <th>Tipe Kamar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($nameroom as $room)
                                            <tr>
                                                <td>{{ $room->id }}</td>
                                                <td>{{ $room->nama_ruangan }}</td>
                                                <td>{{ $room->room->tiperoom}}
                                                <td>
                                                <a href="{{route('edit', $room->id)}}">Edit |</a>
                                                    <a href="{{route('delete', $room->id)}}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <a class="uk-button uk-button-primary" href="{{route('addnameroom')}}">Add Room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
