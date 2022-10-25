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
                                    <strong>Facilities Hotel</strong>
                                </div>
                                <div class="uk-card-body">
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Facilities</th>
                                                <th>Keterangan</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($facilitieshotel as $facilitieshotels)
                                        <tr>
                                            <td>{{ $facilitieshotels->id }}</td>
                                            <td>{{ $facilitieshotels->name }}</td>
                                            <td>{{ $facilitieshotels->keterangan }}</td>
                                            <td><img src="{{ asset('storage/facilitieshotel/' .$facilitieshotels->image) }}" width="80" /></td>
                                            <td>
                                            <a href="{{route('editfacilitieshotel', $facilitieshotels->id)}}">Edit |</a>
                                                <a href="{{route('deletefacilitieshotel', $facilitieshotels->id)}}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="uk-button uk-button-primary" href="{{route('addfacilitieshotel')}}">Add Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>