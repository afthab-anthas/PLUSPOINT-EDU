@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-2">

        <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('account.profile') }}">Account Settings</a>
                            </li>
                            <li class="breadcrumb-item active">Uploaded Files</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message') {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    <div class="card border-0 shadow mb-4">
                        @csrf
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title mt-4 text-blue">Your Uploaded Files</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->name }}.{{ pathinfo($user->image, PATHINFO_EXTENSION) }}
                                                </td>
                                                <td><a href="{{ asset('profile_pic/thumb/' . Auth::user()->image) }}"
                                                        download>Download</a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <tr>
                                                <th>Name</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <section>
@endsection
