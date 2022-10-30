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
                                    <table class="uk-table uk-table-striped" id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Facilities</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Date Of Birth</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($user as $users)
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->phone }}</td>
                                            <td>{{ $users->address }}</td>
                                            <td>{{ $users->dateofbirth }}</td>
                                            <td>
                                            <a href="">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="uk-button uk-button-primary" href="{{route('register')}}">Add Room</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>