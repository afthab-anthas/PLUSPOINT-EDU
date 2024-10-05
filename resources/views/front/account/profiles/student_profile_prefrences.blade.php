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
                            <li class="breadcrumb-item active">Prefrence Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message') {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    {{-- Entire form containing all the fields of the user profile and all the values are set to readonly until the edit buttonis clicked --}}
                    <div class="card border-0 shadow mb-4">
                        <form action="" method="POST" id="userForm" name="userForm">
                            @csrf
                            <div class="card-body  p-4">
                                <h3 class="fs-4 mb-1">My Educational Prefrences</h3>


                                <div class="mb-4">
                                    <label for="" class="mb-2">Which countries do you want to study in?
                                        (preference 1)*</label>
                                    <select name="higherEducationCountry1" id="higherEducationCountry1" class="form-control"
                                        disabled>
                                        <option value="">Select First Preference</option>
                                        <option value="Algeria"
                                            {{ $user->higherEducationCountry1 == 'Algeria' ? 'selected' : '' }}>Algeria
                                        </option>
                                        <option value="Argentina"
                                            {{ $user->higherEducationCountry1 == 'Argentina' ? 'selected' : '' }}>Argentina
                                        </option>
                                        <option value="Australia"
                                            {{ $user->higherEducationCountry1 == 'Australia' ? 'selected' : '' }}>Australia
                                        </option>
                                        <option value="Bangladesh"
                                            {{ $user->higherEducationCountry1 == 'Bangladesh' ? 'selected' : '' }}>
                                            Bangladesh</option>
                                        <option value="Brazil"
                                            {{ $user->higherEducationCountry1 == 'Brazil' ? 'selected' : '' }}>Brazil
                                        </option>
                                        <option value="Canada"
                                            {{ $user->higherEducationCountry1 == 'Canada' ? 'selected' : '' }}>Canada
                                        </option>
                                        <option value="China"
                                            {{ $user->higherEducationCountry1 == 'China' ? 'selected' : '' }}>China</option>
                                        <option value="Colombia"
                                            {{ $user->higherEducationCountry1 == 'Colombia' ? 'selected' : '' }}>Colombia
                                        </option>
                                        <option value="Egypt"
                                            {{ $user->higherEducationCountry1 == 'Egypt' ? 'selected' : '' }}>Egypt
                                        </option>
                                        <option value="Ethiopia"
                                            {{ $user->higherEducationCountry1 == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                        </option>
                                        <option value="France"
                                            {{ $user->higherEducationCountry1 == 'France' ? 'selected' : '' }}>France
                                        </option>
                                        <option value="Germany"
                                            {{ $user->higherEducationCountry1 == 'Germany' ? 'selected' : '' }}>Germany
                                        </option>
                                        <option value="India"
                                            {{ $user->higherEducationCountry1 == 'India' ? 'selected' : '' }}>India
                                        </option>
                                        <option value="Indonesia"
                                            {{ $user->higherEducationCountry1 == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                        </option>
                                        <option value="Iran"
                                            {{ $user->higherEducationCountry1 == 'Iran' ? 'selected' : '' }}>Iran</option>
                                        <option value="Israel"
                                            {{ $user->higherEducationCountry1 == 'Israel' ? 'selected' : '' }}>Israel
                                        </option>
                                        <option value="Italy"
                                            {{ $user->higherEducationCountry1 == 'Italy' ? 'selected' : '' }}>Italy
                                        </option>
                                        <option value="Japan"
                                            {{ $user->higherEducationCountry1 == 'Japan' ? 'selected' : '' }}>Japan
                                        </option>
                                        <option value="Kenya"
                                            {{ $user->higherEducationCountry1 == 'Kenya' ? 'selected' : '' }}>Kenya
                                        </option>
                                        <option value="Mexico"
                                            {{ $user->higherEducationCountry1 == 'Mexico' ? 'selected' : '' }}>Mexico
                                        </option>
                                        <option value="Morocco"
                                            {{ $user->higherEducationCountry1 == 'Morocco' ? 'selected' : '' }}>Morocco
                                        </option>
                                        <option value="Netherlands"
                                            {{ $user->higherEducationCountry1 == 'Netherlands' ? 'selected' : '' }}>
                                            Netherlands</option>
                                        <option value="Nigeria"
                                            {{ $user->higherEducationCountry1 == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                        </option>
                                        <option value="Pakistan"
                                            {{ $user->higherEducationCountry1 == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                        </option>
                                        <option value="Philippines"
                                            {{ $user->higherEducationCountry1 == 'Philippines' ? 'selected' : '' }}>
                                            Philippines</option>
                                        <option value="Poland"
                                            {{ $user->higherEducationCountry1 == 'Poland' ? 'selected' : '' }}>Poland
                                        </option>
                                        <option value="Russia"
                                            {{ $user->higherEducationCountry1 == 'Russia' ? 'selected' : '' }}>Russia
                                        </option>
                                        <option value="Saudi Arabia"
                                            {{ $user->higherEducationCountry1 == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                            Arabia</option>
                                        <option value="South Africa"
                                            {{ $user->higherEducationCountry1 == 'South Africa' ? 'selected' : '' }}>South
                                            Africa</option>
                                        <option value="South Korea"
                                            {{ $user->higherEducationCountry1 == 'South Korea' ? 'selected' : '' }}>South
                                            Korea</option>
                                        <option value="Spain"
                                            {{ $user->higherEducationCountry1 == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sweden"
                                            {{ $user->higherEducationCountry1 == 'Sweden' ? 'selected' : '' }}>Sweden
                                        </option>
                                        <option value="Switzerland"
                                            {{ $user->higherEducationCountry1 == 'Switzerland' ? 'selected' : '' }}>
                                            Switzerland</option>
                                        <option value="Thailand"
                                            {{ $user->higherEducationCountry1 == 'Thailand' ? 'selected' : '' }}>Thailand
                                        </option>
                                        <option value="Turkey"
                                            {{ $user->higherEducationCountry1 == 'Turkey' ? 'selected' : '' }}>Turkey
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ $user->higherEducationCountry1 == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->higherEducationCountry1 == 'United Kingdom' ? 'selected' : '' }}>
                                            United Kingdom</option>
                                        <option value="United States"
                                            {{ $user->higherEducationCountry1 == 'United States' ? 'selected' : '' }}>
                                            United States</option>
                                        <option value="Vietnam"
                                            {{ $user->higherEducationCountry1 == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                        </option>
                                    </select>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Which countries do you want to study in?
                                        (preference 2)*</label>
                                    <select name="higherEducationCountry2" id="higherEducationCountry2" class="form-control"
                                        disabled>
                                        <option value="">Select Second Preference</option>
                                        <option value="Algeria"
                                            {{ $user->higherEducationCountry2 == 'Algeria' ? 'selected' : '' }}>Algeria
                                        </option>
                                        <option value="Argentina"
                                            {{ $user->higherEducationCountry2 == 'Argentina' ? 'selected' : '' }}>Argentina
                                        </option>
                                        <option value="Australia"
                                            {{ $user->higherEducationCountry2 == 'Australia' ? 'selected' : '' }}>Australia
                                        </option>
                                        <option value="Bangladesh"
                                            {{ $user->higherEducationCountry2 == 'Bangladesh' ? 'selected' : '' }}>
                                            Bangladesh</option>
                                        <option value="Brazil"
                                            {{ $user->higherEducationCountry2 == 'Brazil' ? 'selected' : '' }}>Brazil
                                        </option>
                                        <option value="Canada"
                                            {{ $user->higherEducationCountry2 == 'Canada' ? 'selected' : '' }}>Canada
                                        </option>
                                        <option value="China"
                                            {{ $user->higherEducationCountry2 == 'China' ? 'selected' : '' }}>China
                                        </option>
                                        <option value="Colombia"
                                            {{ $user->higherEducationCountry2 == 'Colombia' ? 'selected' : '' }}>Colombia
                                        </option>
                                        <option value="Egypt"
                                            {{ $user->higherEducationCountry2 == 'Egypt' ? 'selected' : '' }}>Egypt
                                        </option>
                                        <option value="Ethiopia"
                                            {{ $user->higherEducationCountry2 == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                        </option>
                                        <option value="France"
                                            {{ $user->higherEducationCountry2 == 'France' ? 'selected' : '' }}>France
                                        </option>
                                        <option value="Germany"
                                            {{ $user->higherEducationCountry2 == 'Germany' ? 'selected' : '' }}>Germany
                                        </option>
                                        <option value="India"
                                            {{ $user->higherEducationCountry2 == 'India' ? 'selected' : '' }}>India
                                        </option>
                                        <option value="Indonesia"
                                            {{ $user->higherEducationCountry2 == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                        </option>
                                        <option value="Iran"
                                            {{ $user->higherEducationCountry2 == 'Iran' ? 'selected' : '' }}>Iran</option>
                                        <option value="Israel"
                                            {{ $user->higherEducationCountry2 == 'Israel' ? 'selected' : '' }}>Israel
                                        </option>
                                        <option value="Italy"
                                            {{ $user->higherEducationCountry2 == 'Italy' ? 'selected' : '' }}>Italy
                                        </option>
                                        <option value="Japan"
                                            {{ $user->higherEducationCountry2 == 'Japan' ? 'selected' : '' }}>Japan
                                        </option>
                                        <option value="Kenya"
                                            {{ $user->higherEducationCountry2 == 'Kenya' ? 'selected' : '' }}>Kenya
                                        </option>
                                        <option value="Mexico"
                                            {{ $user->higherEducationCountry2 == 'Mexico' ? 'selected' : '' }}>Mexico
                                        </option>
                                        <option value="Morocco"
                                            {{ $user->higherEducationCountry2 == 'Morocco' ? 'selected' : '' }}>Morocco
                                        </option>
                                        <option value="Netherlands"
                                            {{ $user->higherEducationCountry2 == 'Netherlands' ? 'selected' : '' }}>
                                            Netherlands</option>
                                        <option value="Nigeria"
                                            {{ $user->higherEducationCountry2 == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                        </option>
                                        <option value="Pakistan"
                                            {{ $user->higherEducationCountry2 == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                        </option>
                                        <option value="Philippines"
                                            {{ $user->higherEducationCountry2 == 'Philippines' ? 'selected' : '' }}>
                                            Philippines</option>
                                        <option value="Poland"
                                            {{ $user->higherEducationCountry2 == 'Poland' ? 'selected' : '' }}>Poland
                                        </option>
                                        <option value="Russia"
                                            {{ $user->higherEducationCountry2 == 'Russia' ? 'selected' : '' }}>Russia
                                        </option>
                                        <option value="Saudi Arabia"
                                            {{ $user->higherEducationCountry2 == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                            Arabia</option>
                                        <option value="South Africa"
                                            {{ $user->higherEducationCountry2 == 'South Africa' ? 'selected' : '' }}>South
                                            Africa</option>
                                        <option value="South Korea"
                                            {{ $user->higherEducationCountry2 == 'South Korea' ? 'selected' : '' }}>South
                                            Korea</option>
                                        <option value="Spain"
                                            {{ $user->higherEducationCountry2 == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sweden"
                                            {{ $user->higherEducationCountry2 == 'Sweden' ? 'selected' : '' }}>Sweden
                                        </option>
                                        <option value="Switzerland"
                                            {{ $user->higherEducationCountry2 == 'Switzerland' ? 'selected' : '' }}>
                                            Switzerland</option>
                                        <option value="Thailand"
                                            {{ $user->higherEducationCountry2 == 'Thailand' ? 'selected' : '' }}>Thailand
                                        </option>
                                        <option value="Turkey"
                                            {{ $user->higherEducationCountry2 == 'Turkey' ? 'selected' : '' }}>Turkey
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ $user->higherEducationCountry2 == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->higherEducationCountry2 == 'United Kingdom' ? 'selected' : '' }}>
                                            United Kingdom</option>
                                        <option value="United States"
                                            {{ $user->higherEducationCountry2 == 'United States' ? 'selected' : '' }}>
                                            United States</option>
                                        <option value="Vietnam"
                                            {{ $user->higherEducationCountry2 == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                        </option>
                                    </select>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Which countries do you want to study in?
                                        (preference 3)*</label>
                                    <select name="higherEducationCountry3" id="higherEducationCountry3"
                                        class="form-control" disabled>
                                        <option value="">Select Third Preference</option>
                                        <option value="Algeria"
                                            {{ $user->higherEducationCountry3 == 'Algeria' ? 'selected' : '' }}>Algeria
                                        </option>
                                        <option value="Argentina"
                                            {{ $user->higherEducationCountry3 == 'Argentina' ? 'selected' : '' }}>Argentina
                                        </option>
                                        <option value="Australia"
                                            {{ $user->higherEducationCountry3 == 'Australia' ? 'selected' : '' }}>Australia
                                        </option>
                                        <option value="Bangladesh"
                                            {{ $user->higherEducationCountry3 == 'Bangladesh' ? 'selected' : '' }}>
                                            Bangladesh</option>
                                        <option value="Brazil"
                                            {{ $user->higherEducationCountry3 == 'Brazil' ? 'selected' : '' }}>Brazil
                                        </option>
                                        <option value="Canada"
                                            {{ $user->higherEducationCountry3 == 'Canada' ? 'selected' : '' }}>Canada
                                        </option>
                                        <option value="China"
                                            {{ $user->higherEducationCountry3 == 'China' ? 'selected' : '' }}>China
                                        </option>
                                        <option value="Colombia"
                                            {{ $user->higherEducationCountry3 == 'Colombia' ? 'selected' : '' }}>Colombia
                                        </option>
                                        <option value="Egypt"
                                            {{ $user->higherEducationCountry3 == 'Egypt' ? 'selected' : '' }}>Egypt
                                        </option>
                                        <option value="Ethiopia"
                                            {{ $user->higherEducationCountry3 == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                        </option>
                                        <option value="France"
                                            {{ $user->higherEducationCountry3 == 'France' ? 'selected' : '' }}>France
                                        </option>
                                        <option value="Germany"
                                            {{ $user->higherEducationCountry3 == 'Germany' ? 'selected' : '' }}>Germany
                                        </option>
                                        <option value="India"
                                            {{ $user->higherEducationCountry3 == 'India' ? 'selected' : '' }}>India
                                        </option>
                                        <option value="Indonesia"
                                            {{ $user->higherEducationCountry3 == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                        </option>
                                        <option value="Iran"
                                            {{ $user->higherEducationCountry3 == 'Iran' ? 'selected' : '' }}>Iran</option>
                                        <option value="Israel"
                                            {{ $user->higherEducationCountry3 == 'Israel' ? 'selected' : '' }}>Israel
                                        </option>
                                        <option value="Italy"
                                            {{ $user->higherEducationCountry3 == 'Italy' ? 'selected' : '' }}>Italy
                                        </option>
                                        <option value="Japan"
                                            {{ $user->higherEducationCountry3 == 'Japan' ? 'selected' : '' }}>Japan
                                        </option>
                                        <option value="Kenya"
                                            {{ $user->higherEducationCountry3 == 'Kenya' ? 'selected' : '' }}>Kenya
                                        </option>
                                        <option value="Mexico"
                                            {{ $user->higherEducationCountry3 == 'Mexico' ? 'selected' : '' }}>Mexico
                                        </option>
                                        <option value="Morocco"
                                            {{ $user->higherEducationCountry3 == 'Morocco' ? 'selected' : '' }}>Morocco
                                        </option>
                                        <option value="Netherlands"
                                            {{ $user->higherEducationCountry3 == 'Netherlands' ? 'selected' : '' }}>
                                            Netherlands</option>
                                        <option value="Nigeria"
                                            {{ $user->higherEducationCountry3 == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                        </option>
                                        <option value="Pakistan"
                                            {{ $user->higherEducationCountry3 == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                        </option>
                                        <option value="Philippines"
                                            {{ $user->higherEducationCountry3 == 'Philippines' ? 'selected' : '' }}>
                                            Philippines</option>
                                        <option value="Poland"
                                            {{ $user->higherEducationCountry3 == 'Poland' ? 'selected' : '' }}>Poland
                                        </option>
                                        <option value="Russia"
                                            {{ $user->higherEducationCountry3 == 'Russia' ? 'selected' : '' }}>Russia
                                        </option>
                                        <option value="Saudi Arabia"
                                            {{ $user->higherEducationCountry3 == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                            Arabia</option>
                                        <option value="South Africa"
                                            {{ $user->higherEducationCountry3 == 'South Africa' ? 'selected' : '' }}>South
                                            Africa</option>
                                        <option value="South Korea"
                                            {{ $user->higherEducationCountry3 == 'South Korea' ? 'selected' : '' }}>South
                                            Korea</option>
                                        <option value="Spain"
                                            {{ $user->higherEducationCountry3 == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sweden"
                                            {{ $user->higherEducationCountry3 == 'Sweden' ? 'selected' : '' }}>Sweden
                                        </option>
                                        <option value="Switzerland"
                                            {{ $user->higherEducationCountry3 == 'Switzerland' ? 'selected' : '' }}>
                                            Switzerland</option>
                                        <option value="Thailand"
                                            {{ $user->higherEducationCountry3 == 'Thailand' ? 'selected' : '' }}>Thailand
                                        </option>
                                        <option value="Turkey"
                                            {{ $user->higherEducationCountry3 == 'Turkey' ? 'selected' : '' }}>Turkey
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ $user->higherEducationCountry3 == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->higherEducationCountry3 == 'United Kingdom' ? 'selected' : '' }}>
                                            United Kingdom</option>
                                        <option value="United States"
                                            {{ $user->higherEducationCountry3 == 'United States' ? 'selected' : '' }}>
                                            United States</option>
                                        <option value="Vietnam"
                                            {{ $user->higherEducationCountry3 == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                        </option>
                                    </select>

                                    <p></p>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">What would you like to study?*</label>
                                    <select name="majorInterest" id="majorInterest" class="form-control" disabled>
                                        <option value="">Select Your Interest</option>
                                        <option value="Business Administration"
                                            {{ $user->majorInterest == 'Business Administration' ? 'selected' : '' }}>
                                            Business Administration</option>
                                        <option value="Psychology"
                                            {{ $user->majorInterest == 'Psychology' ? 'selected' : '' }}>Psychology
                                        </option>
                                        <option value="Engineering"
                                            {{ $user->majorInterest == 'Engineering' ? 'selected' : '' }}>Engineering
                                        </option>
                                        <option value="Biology"
                                            {{ $user->majorInterest == 'Biology' ? 'selected' : '' }}>Biology</option>
                                        <option value="Finance"
                                            {{ $user->majorInterest == 'Finance' ? 'selected' : '' }}>Finance</option>
                                        <option value="Education"
                                            {{ $user->majorInterest == 'Education' ? 'selected' : '' }}>Education</option>
                                        <option value="Marketing"
                                            {{ $user->majorInterest == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                                        <option value="Political Science"
                                            {{ $user->majorInterest == 'Political Science' ? 'selected' : '' }}>Political
                                            Science</option>
                                        <option value="Nursing"
                                            {{ $user->majorInterest == 'Nursing' ? 'selected' : '' }}>Nursing</option>
                                        <option value="Economics"
                                            {{ $user->majorInterest == 'Economics' ? 'selected' : '' }}>Economics</option>
                                        <option value="Communication"
                                            {{ $user->majorInterest == 'Communication' ? 'selected' : '' }}>Communication
                                        </option>
                                        <option value="Accounting"
                                            {{ $user->majorInterest == 'Accounting' ? 'selected' : '' }}>Accounting
                                        </option>
                                        <option value="Chemistry"
                                            {{ $user->majorInterest == 'Chemistry' ? 'selected' : '' }}>Chemistry</option>
                                        <option value="Sociology"
                                            {{ $user->majorInterest == 'Sociology' ? 'selected' : '' }}>Sociology</option>
                                        <option value="Electrical Engineering"
                                            {{ $user->majorInterest == 'Electrical Engineering' ? 'selected' : '' }}>
                                            Electrical Engineering</option>
                                        <option value="Mechanical Engineering"
                                            {{ $user->majorInterest == 'Mechanical Engineering' ? 'selected' : '' }}>
                                            Mechanical Engineering</option>
                                        <option value="Mathematics"
                                            {{ $user->majorInterest == 'Mathematics' ? 'selected' : '' }}>Mathematics
                                        </option>
                                        <option value="English Literature"
                                            {{ $user->majorInterest == 'English Literature' ? 'selected' : '' }}>English
                                            Literature</option>
                                        <option value="Environmental Science"
                                            {{ $user->majorInterest == 'Environmental Science' ? 'selected' : '' }}>
                                            Environmental Science</option>
                                        <option value="Physics"
                                            {{ $user->majorInterest == 'Physics' ? 'selected' : '' }}>Physics</option>
                                        <option value="History"
                                            {{ $user->majorInterest == 'History' ? 'selected' : '' }}>History</option>
                                        <option value="Information Technology"
                                            {{ $user->majorInterest == 'Information Technology' ? 'selected' : '' }}>
                                            Information Technology</option>
                                        <option value="International Relations"
                                            {{ $user->majorInterest == 'International Relations' ? 'selected' : '' }}>
                                            International Relations</option>
                                        <option value="Art History"
                                            {{ $user->majorInterest == 'Art History' ? 'selected' : '' }}>Art History
                                        </option>
                                        <option value="Biomedical Engineering"
                                            {{ $user->majorInterest == 'Biomedical Engineering' ? 'selected' : '' }}>
                                            Biomedical Engineering</option>
                                        <option value="Criminal Justice"
                                            {{ $user->majorInterest == 'Criminal Justice' ? 'selected' : '' }}>Criminal
                                            Justice</option>
                                        <option value="Graphic Design"
                                            {{ $user->majorInterest == 'Graphic Design' ? 'selected' : '' }}>Graphic
                                            Design</option>
                                        <option value="Public Health"
                                            {{ $user->majorInterest == 'Public Health' ? 'selected' : '' }}>Public Health
                                        </option>
                                        <option value="Social Work"
                                            {{ $user->majorInterest == 'Social Work' ? 'selected' : '' }}>Social Work
                                        </option>
                                    </select>
                                    <p></p>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Which levels of education are you applying
                                        for?*</label>
                                    <select name="educationLevelInterest" id="educationLevelInterest"
                                        class="form-control" disabled>
                                        <option value="">Select Interested Education Level</option>
                                        <option value="No Formal Education"
                                            {{ $user->educationLevelInterest == 'No Formal Education' ? 'selected' : '' }}>
                                            No Formal Education</option>
                                        <option value="Primary School"
                                            {{ $user->educationLevelInterest == 'Primary School' ? 'selected' : '' }}>
                                            Primary School</option>
                                        <option value="Secondary School"
                                            {{ $user->educationLevelInterest == 'Secondary School' ? 'selected' : '' }}>
                                            Secondary School</option>
                                        <option value="High School Diploma"
                                            {{ $user->educationLevelInterest == 'High School Diploma' ? 'selected' : '' }}>
                                            High School Diploma</option>
                                        <option value="Vocational Training"
                                            {{ $user->educationLevelInterest == 'Vocational Training' ? 'selected' : '' }}>
                                            Vocational Training</option>
                                        <option value="Associate Degree"
                                            {{ $user->educationLevelInterest == 'Associate Degree' ? 'selected' : '' }}>
                                            Associate Degree</option>
                                        <option value="Bachelor's Degree"
                                            {{ $user->educationLevelInterest == "Bachelor's Degree" ? 'selected' : '' }}>
                                            Bachelor's Degree</option>
                                        <option value="Master's Degree"
                                            {{ $user->educationLevelInterest == "Master's Degree" ? 'selected' : '' }}>
                                            Master's Degree</option>
                                        <option value="Professional Degree"
                                            {{ $user->educationLevelInterest == 'Professional Degree' ? 'selected' : '' }}>
                                            Professional Degree</option>
                                        <option value="Doctorate Degree (PhD)"
                                            {{ $user->educationLevelInterest == 'Doctorate Degree (PhD)' ? 'selected' : '' }}>
                                            Doctorate Degree (PhD)</option>
                                        <option value="Other"
                                            {{ $user->educationLevelInterest == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                    <p></p>
                                </div>



                            </div>


                            {{-- update and edit button given display none property till edit is clicked --}}
                            <div class="card-footer  p-4">
                                <button type="button" class="btn btn-primary" id="editButton">Edit</button>
                                <button type="submit" class="btn btn-primary d-none" id="updateButton">Update</button>
                                <button type="button" class="btn btn-primary d-none" id="cancelButton">Cancel</button>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>
    </section>
@endsection

@section('customjs')
    <script type="text/javascript">
        $("#userForm").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('account.update-profile-prefrences') }}",
                type: "put",
                datatype: "json",
                data: $("#userForm").serializeArray(),
                // display errors occuring in the form
                success: function(response) {
                    if (response.status == false) {
                        if (response.errors) {
                            if (response.errors.higherEducationCountry1) {
                                $("#higherEducationCountry1").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Please select your first preference');
                            } else {

                                $("#higherEducationCountry1").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }

                            if (response.errors.higherEducationCountry2) {
                                $("#higherEducationCountry2").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Please select your second preference');
                            } else {
                                $("#higherEducationCountry2").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.higherEducationCountry3) {
                                $("#higherEducationCountry3").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Please select your third preference');
                            } else {
                                $("#higherEducationCountry3").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.majorInterest) {
                                $("#majorInterest").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Please select your interested Major preference');
                            } else {
                                $("#majorInterest").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.educationLevelInterest) {
                                $("#educationLevelInterest").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.educationLevelInterest);
                            } else {
                                $("#educationLevelInterest").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }

                        }
                    } else {

                        $("#educationLevelInterest, #majorInterest, #higherEducationCountry3, #higherEducationCountry2, #higherEducationCountry1")
                            .removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        window.location.href = "{{ route('account.profile.prefrences') }}";
                    }
                }
            });
        });
        //script to make upadte and cancel button visible and the fields editable when edit is clicked
        document.getElementById("editButton").addEventListener("click", function() {
            document.querySelectorAll("input, select").forEach(function(element) {
                element.removeAttribute("readonly");
                element.removeAttribute("disabled");
            });
            document.getElementById("editButton").classList.add("d-none");
            document.getElementById("updateButton").classList.remove("d-none");
            document.getElementById("cancelButton").classList.remove("d-none");
        });

        document.getElementById("cancelButton").addEventListener("click", function() {
            location.reload();
        });
    </script>
@endsection
