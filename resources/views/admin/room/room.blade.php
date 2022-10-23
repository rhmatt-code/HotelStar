@extends('admin.layouts.master')

@section('title', 'Room')

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
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tipe Kamar</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($room as $rooms)
                                        <tr>
                                            <td>{{ $rooms->id }}</td>
                                            <td>{{ $rooms->tiperoom }}</td>
                                            <td>{{ $rooms->jumlahkamar }}</td>
                                            <td>
                                            <a href="{{route('edit', $rooms->id)}}">Edit |</a>
                                                <a href="{{route('delete', $rooms->id)}}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="uk-button uk-button-primary" href="{{route('addroom')}}">Add Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>