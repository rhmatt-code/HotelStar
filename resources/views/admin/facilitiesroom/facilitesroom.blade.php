@extends('admin.layouts.master')

@section('title', 'Facilities Hotel')

@section('content')
@include('admin.layouts.navbar')

<div class="content-padder content-background">
<div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@l">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <strong>Facilities Room</strong>
                                </div>
                                <div class="uk-card-body">
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Facilities</th>
                                                <th>ID Room</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($facilitiesroom as $facilitiesrooms)
                                        <tr>
                                            <td>{{ $facilitiesrooms->id }}</td>
                                            <td>{{ $facilitiesrooms->name }}</td>
                                            <td>{{ $facilitiesrooms->room_id }}</td>
                                            <td>
                                            <a href="{{route('editfacilitiesroom', $facilitiesrooms->id)}}">Edit |</a>
                                                <a href="{{route('deletefacilitiesroom', $facilitiesrooms->id)}}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="uk-button uk-button-primary" href="{{route('addfacilitiesroom')}}">Add Facilities Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>