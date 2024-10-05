@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-2">
        <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Database</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message')
                {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    <div class="card border-0 shadow mb-4">
                        @csrf
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title mt-4 text-blue mb-0">Users Database</h4>
                                    <a href="{{ route('export.users') }}" class="btn btn-primary mb-3">Download Users as Excel</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Agent Code</th>
                                                <th>Role</th>
                                                <th>Mobile</th>
                                                <th>DOB</th>
                                                <th>Citizenship</th>
                                                <th>Passport</th>
                                                <th>Passport Expiry</th>
                                                <th>Gender</th>
                                                <th>Residency</th>
                                                <th>Education Country</th>
                                                <th>Education Level</th>
                                                <th>Graduation Status</th>
                                                <th>Institution</th>
                                                <th>Average Mark</th>
                                                <th>Degree</th>
                                                <th>English Proficiency</th>
                                                <th>English Listening</th>
                                                <th>English Writing</th>
                                                <th>English Reading</th>
                                                <th>English Speaking</th>
                                                <th>Major Subject Interest</th>
                                                <th>Major Edu Level Interest</th>
                                                <th>Higher Education Country 1</th>
                                                <th>Higher Education Country 2</th>
                                                <th>Higher Education Country 3</th>
                                                
                                                <th>Education Level Interest</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users ?? [] as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->agentCode }}</td>
                                                    <td>{{ $user->role }}</td>
                                                    <td>{{ $user->mobile }}</td>
                                                    <td>{{ $user->dob }}</td>
                                                    <td>{{ $user->citizenship }}</td>
                                                    <td>{{ $user->passport }}</td>
                                                    <td>{{ $user->passportExpiry }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->residency }}</td>
                                                    <td>{{ $user->educationCountry }}</td>
                                                    <td>{{ $user->educationLevel }}</td>
                                                    <td>{{ $user->graduationStatus }}</td>
                                                    <td>{{ $user->institution }}</td>
                                                    <td>{{ $user->avgMark }}</td>
                                                    <td>{{ $user->degree }}</td>
                                                    <td>{{ $user->englishProficiency }}</td>
                                                    <td>{{ $user->englishListening }}</td>
                                                    <td>{{ $user->englishWriting }}</td>
                                                    <td>{{ $user->englishReading }}</td>
                                                    <td>{{ $user->englishSpeaking }}</td>
                                                    <td>{{ $user->major }}</td>
                                                    <td>{{ $user->majorInterest }}</td>
                                                    <td>{{ $user->higherEducationCountry1 }}</td>
                                                    <td>{{ $user->higherEducationCountry2 }}</td>
                                                    <td>{{ $user->higherEducationCountry3 }}</td>
                                                    
                                                    <td>{{ $user->educationLevelInterest }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Agent Code</th>
                                                <th>Role</th>
                                                <th>Mobile</th>
                                                <th>DOB</th>
                                                <th>Citizenship</th>
                                                <th>Passport</th>
                                                <th>Passport Expiry</th>
                                                <th>Gender</th>
                                                <th>Residency</th>
                                                <th>Education Country</th>
                                                <th>Education Level</th>
                                                <th>Graduation Status</th>
                                                <th>Institution</th>
                                                <th>Average Mark</th>
                                                <th>Degree</th>
                                                <th>English Proficiency</th>
                                                <th>English Listening</th>
                                                <th>English Writing</th>
                                                <th>English Reading</th>
                                                <th>English Speaking</th>
                                                <th>Major Subject Interest</th>
                                                <th>Major Edu Level Interest</th>
                                                <th>Higher Education Country 1</th>
                                                <th>Higher Education Country 2</th>
                                                <th>Higher Education Country 3</th>
                                                <th>Education Level Interest</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
