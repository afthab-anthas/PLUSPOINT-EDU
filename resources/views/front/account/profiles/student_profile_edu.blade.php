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
                            <li class="breadcrumb-item active">Education Details</li>
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
                                <h3 class="fs-4 mb-1">My Education Details</h3>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Highest Education Level*</label>
                                    <select name="educationLevel" id="educationLevel" class="form-control" disabled>
                                        <option value="">Select Highest Level of Education</option>
                                        <option value="No Formal Education"
                                            {{ $user->educationLevel == 'No Formal Education' ? 'selected' : '' }}>No Formal
                                            Education</option>
                                        <option value="Primary School"
                                            {{ $user->educationLevel == 'Primary School' ? 'selected' : '' }}>Primary School
                                        </option>
                                        <option value="Secondary School"
                                            {{ $user->educationLevel == 'Secondary School' ? 'selected' : '' }}>Secondary
                                            School</option>
                                        <option value="High School Diploma"
                                            {{ $user->educationLevel == 'High School Diploma' ? 'selected' : '' }}>High
                                            School Diploma</option>
                                        <option value="Vocational Training"
                                            {{ $user->educationLevel == 'Vocational Training' ? 'selected' : '' }}>
                                            Vocational Training</option>
                                        <option value="Associate Degree"
                                            {{ $user->educationLevel == 'Associate Degree' ? 'selected' : '' }}>Associate
                                            Degree</option>
                                        <option value="Bachelor's Degree"
                                            {{ $user->educationLevel == "Bachelor's Degree" ? 'selected' : '' }}>Bachelor's
                                            Degree</option>
                                        <option value="Master's Degree"
                                            {{ $user->educationLevel == "Master's Degree" ? 'selected' : '' }}>Master's
                                            Degree</option>
                                        <option value="Professional Degree"
                                            {{ $user->educationLevel == 'Professional Degree' ? 'selected' : '' }}>
                                            Professional Degree</option>
                                        <option value="Doctorate Degree (PhD)"
                                            {{ $user->educationLevel == 'Doctorate Degree (PhD)' ? 'selected' : '' }}>
                                            Doctorate Degree (PhD)</option>
                                        <option value="Other" {{ $user->educationLevel == 'Other' ? 'selected' : '' }}>
                                            Other</option>
                                    </select>
                                    <p></p>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Country of highest education*</label>
                                    <select name="educationCountry" id="educationCountry" class="form-control" disabled>
                                        <option value="">Select Country of Highest Education</option>
                                        <option value="Algeria"
                                            {{ $user->educationCountry == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                        <option value="Argentina"
                                            {{ $user->educationCountry == 'Argentina' ? 'selected' : '' }}>Argentina
                                        </option>
                                        <option value="Australia"
                                            {{ $user->educationCountry == 'Australia' ? 'selected' : '' }}>Australia
                                        </option>
                                        <option value="Bangladesh"
                                            {{ $user->educationCountry == 'Bangladesh' ? 'selected' : '' }}>Bangladesh
                                        </option>
                                        <option value="Brazil" {{ $user->educationCountry == 'Brazil' ? 'selected' : '' }}>
                                            Brazil</option>
                                        <option value="Canada" {{ $user->educationCountry == 'Canada' ? 'selected' : '' }}>
                                            Canada</option>
                                        <option value="China" {{ $user->educationCountry == 'China' ? 'selected' : '' }}>
                                            China</option>
                                        <option value="Colombia"
                                            {{ $user->educationCountry == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                        <option value="Egypt" {{ $user->educationCountry == 'Egypt' ? 'selected' : '' }}>
                                            Egypt</option>
                                        <option value="Ethiopia"
                                            {{ $user->educationCountry == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                        <option value="France" {{ $user->educationCountry == 'France' ? 'selected' : '' }}>
                                            France</option>
                                        <option value="Germany"
                                            {{ $user->educationCountry == 'Germany' ? 'selected' : '' }}>Germany</option>
                                        <option value="India" {{ $user->educationCountry == 'India' ? 'selected' : '' }}>
                                            India</option>
                                        <option value="Indonesia"
                                            {{ $user->educationCountry == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                        </option>
                                        <option value="Iran" {{ $user->educationCountry == 'Iran' ? 'selected' : '' }}>
                                            Iran</option>
                                        <option value="Israel" {{ $user->educationCountry == 'Israel' ? 'selected' : '' }}>
                                            Israel</option>
                                        <option value="Italy" {{ $user->educationCountry == 'Italy' ? 'selected' : '' }}>
                                            Italy</option>
                                        <option value="Japan" {{ $user->educationCountry == 'Japan' ? 'selected' : '' }}>
                                            Japan</option>
                                        <option value="Kenya" {{ $user->educationCountry == 'Kenya' ? 'selected' : '' }}>
                                            Kenya</option>
                                        <option value="Mexico" {{ $user->educationCountry == 'Mexico' ? 'selected' : '' }}>
                                            Mexico</option>
                                        <option value="Morocco"
                                            {{ $user->educationCountry == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                                        <option value="Netherlands"
                                            {{ $user->educationCountry == 'Netherlands' ? 'selected' : '' }}>Netherlands
                                        </option>
                                        <option value="Nigeria"
                                            {{ $user->educationCountry == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                        <option value="Pakistan"
                                            {{ $user->educationCountry == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                        <option value="Philippines"
                                            {{ $user->educationCountry == 'Philippines' ? 'selected' : '' }}>Philippines
                                        </option>
                                        <option value="Poland" {{ $user->educationCountry == 'Poland' ? 'selected' : '' }}>
                                            Poland</option>
                                        <option value="Russia" {{ $user->educationCountry == 'Russia' ? 'selected' : '' }}>
                                            Russia</option>
                                        <option value="Saudi Arabia"
                                            {{ $user->educationCountry == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                                        </option>
                                        <option value="South Africa"
                                            {{ $user->educationCountry == 'South Africa' ? 'selected' : '' }}>South Africa
                                        </option>
                                        <option value="South Korea"
                                            {{ $user->educationCountry == 'South Korea' ? 'selected' : '' }}>South Korea
                                        </option>
                                        <option value="Spain" {{ $user->educationCountry == 'Spain' ? 'selected' : '' }}>
                                            Spain</option>
                                        <option value="Sweden" {{ $user->educationCountry == 'Sweden' ? 'selected' : '' }}>
                                            Sweden</option>
                                        <option value="Switzerland"
                                            {{ $user->educationCountry == 'Switzerland' ? 'selected' : '' }}>Switzerland
                                        </option>
                                        <option value="Thailand"
                                            {{ $user->educationCountry == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                                        <option value="Turkey" {{ $user->educationCountry == 'Turkey' ? 'selected' : '' }}>
                                            Turkey</option>
                                        <option value="United Arab Emirates"
                                            {{ $user->educationCountry == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->educationCountry == 'United Kingdom' ? 'selected' : '' }}>United
                                            Kingdom</option>
                                        <option value="United States"
                                            {{ $user->educationCountry == 'United States' ? 'selected' : '' }}>United
                                            States</option>
                                        <option value="Vietnam"
                                            {{ $user->educationCountry == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                                    </select>

                                    <p></p>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Educational Institution</label>
                                    <input type="text" name="institution" id="institution"
                                        placeholder="Enter last attended University / College / School" class="form-control"
                                        value="{{ $user->institution }}" readonly>
                                    <p></p>
                                </div>


                                <div id="degreeField" class="mb-4" style="display:none;">
                                    <label for="degree" class="mb-2">Degree</label>
                                    <select name="degree" id="degree" class="form-control" disabled>
                                        <option value="">Select Your Degree</option>

                                        <option value="Associate of Arts (AA)"
                                            {{ $user->degree == 'Associate of Arts (AA)' ? 'selected' : '' }}>Associate of
                                            Arts (AA)</option>
                                        <option value="Associate of Science (AS)"
                                            {{ $user->degree == 'Associate of Science (AS)' ? 'selected' : '' }}>Associate
                                            of Science (AS)</option>
                                        <option value="Associate of Applied Science (AAS)"
                                            {{ $user->degree == 'Associate of Applied Science (AAS)' ? 'selected' : '' }}>
                                            Associate of Applied Science (AAS)</option>
                                        <option value="Bachelor of Arts (BA)"
                                            {{ $user->degree == 'Bachelor of Arts (BA)' ? 'selected' : '' }}>Bachelor of
                                            Arts (BA)</option>
                                        <option value="Bachelor of Science (BS)"
                                            {{ $user->degree == 'Bachelor of Science (BS)' ? 'selected' : '' }}>Bachelor of
                                            Science (BS)</option>
                                        <option value="Bachelor of Fine Arts (BFA)"
                                            {{ $user->degree == 'Bachelor of Fine Arts (BFA)' ? 'selected' : '' }}>Bachelor
                                            of Fine Arts (BFA)</option>
                                        <option value="Bachelor of Business Administration (BBA)"
                                            {{ $user->degree == 'Bachelor of Business Administration (BBA)' ? 'selected' : '' }}>
                                            Bachelor of Business Administration (BBA)</option>
                                        <option value="Bachelor of Engineering (BEng)"
                                            {{ $user->degree == 'Bachelor of Engineering (BEng)' ? 'selected' : '' }}>
                                            Bachelor of Engineering (BEng)</option>
                                        <option value="Bachelor of Technology (BTech)"
                                            {{ $user->degree == 'Bachelor of Technology (BTech)' ? 'selected' : '' }}>
                                            Bachelor of Technology (BTech)</option>
                                        <option value="Master of Arts (MA)"
                                            {{ $user->degree == 'Master of Arts (MA)' ? 'selected' : '' }}>Master of Arts
                                            (MA)</option>
                                        <option value="Master of Science (MS)"
                                            {{ $user->degree == 'Master of Science (MS)' ? 'selected' : '' }}>Master of
                                            Science (MS)</option>
                                        <option value="Master of Business Administration (MBA)"
                                            {{ $user->degree == 'Master of Business Administration (MBA)' ? 'selected' : '' }}>
                                            Master of Business Administration (MBA)</option>
                                        <option value="Master of Fine Arts (MFA)"
                                            {{ $user->degree == 'Master of Fine Arts (MFA)' ? 'selected' : '' }}>Master of
                                            Fine Arts (MFA)</option>
                                        <option value="Master of Engineering (MEng)"
                                            {{ $user->degree == 'Master of Engineering (MEng)' ? 'selected' : '' }}>Master
                                            of Engineering (MEng)</option>
                                        <option value="Master of Education (MEd)"
                                            {{ $user->degree == 'Master of Education (MEd)' ? 'selected' : '' }}>Master of
                                            Education (MEd)</option>
                                        <option value="Doctor of Philosophy (PhD)"
                                            {{ $user->degree == 'Doctor of Philosophy (PhD)' ? 'selected' : '' }}>Doctor of
                                            Philosophy (PhD)</option>
                                        <option value="Doctor of Education (EdD)"
                                            {{ $user->degree == 'Doctor of Education (EdD)' ? 'selected' : '' }}>Doctor of
                                            Education (EdD)</option>
                                        <option value="Doctor of Medicine (MD)"
                                            {{ $user->degree == 'Doctor of Medicine (MD)' ? 'selected' : '' }}>Doctor of
                                            Medicine (MD)</option>
                                        <option value="Juris Doctor (JD)"
                                            {{ $user->degree == 'Juris Doctor (JD)' ? 'selected' : '' }}>Juris Doctor (JD)
                                        </option>
                                        <option value="Doctor of Dental Surgery (DDS)"
                                            {{ $user->degree == 'Doctor of Dental Surgery (DDS)' ? 'selected' : '' }}>
                                            Doctor of Dental Surgery (DDS)</option>
                                        <option value="Doctor of Veterinary Medicine (DVM)"
                                            {{ $user->degree == 'Doctor of Veterinary Medicine (DVM)' ? 'selected' : '' }}>
                                            Doctor of Veterinary Medicine (DVM)</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="major" class="mb-2">Major</label>
                                    <select name="major" id="major" class="form-control" disabled>
                                        <option value="">Select Your Major</option>
                                        <option value="PCM" {{ $user->major == 'PCM' ? 'selected' : '' }}>PCM (Physics,
                                            Chemistry, Mathematics)</option>
                                        <option value="PCB" {{ $user->major == 'PCB' ? 'selected' : '' }}>PCB (Physics,
                                            Chemistry, Biology)</option>
                                        <option value="PCMB" {{ $user->major == 'PCMB' ? 'selected' : '' }}>PCMB
                                            (Physics, Chemistry, Mathematics, Biology)</option>
                                        <option value="Commerce" {{ $user->major == 'Commerce' ? 'selected' : '' }}>
                                            Commerce</option>
                                        <option value="Arts/Humanities"
                                            {{ $user->major == 'Arts/Humanities' ? 'selected' : '' }}>Arts/Humanities
                                        </option>
                                        <option value="Computer Science"
                                            {{ $user->major == 'Computer Science' ? 'selected' : '' }}>Computer Science
                                        </option>
                                        <option value="Business Administration"
                                            {{ $user->major == 'Business Administration' ? 'selected' : '' }}>Business
                                            Administration</option>
                                        <option value="Psychology" {{ $user->major == 'Psychology' ? 'selected' : '' }}>
                                            Psychology</option>
                                        <option value="Engineering" {{ $user->major == 'Engineering' ? 'selected' : '' }}>
                                            Engineering</option>
                                        <option value="Biology" {{ $user->major == 'Biology' ? 'selected' : '' }}>Biology
                                        </option>
                                        <option value="Finance" {{ $user->major == 'Finance' ? 'selected' : '' }}>Finance
                                        </option>
                                        <option value="Education" {{ $user->major == 'Education' ? 'selected' : '' }}>
                                            Education</option>
                                        <option value="Marketing" {{ $user->major == 'Marketing' ? 'selected' : '' }}>
                                            Marketing</option>
                                        <option value="Political Science"
                                            {{ $user->major == 'Political Science' ? 'selected' : '' }}>Political Science
                                        </option>
                                        <option value="Nursing" {{ $user->major == 'Nursing' ? 'selected' : '' }}>Nursing
                                        </option>
                                        <option value="Economics" {{ $user->major == 'Economics' ? 'selected' : '' }}>
                                            Economics</option>
                                        <option value="Communication"
                                            {{ $user->major == 'Communication' ? 'selected' : '' }}>Communication</option>
                                        <option value="Accounting" {{ $user->major == 'Accounting' ? 'selected' : '' }}>
                                            Accounting</option>
                                        <option value="Chemistry" {{ $user->major == 'Chemistry' ? 'selected' : '' }}>
                                            Chemistry</option>
                                        <option value="Sociology" {{ $user->major == 'Sociology' ? 'selected' : '' }}>
                                            Sociology</option>
                                        <option value="Electrical Engineering"
                                            {{ $user->major == 'Electrical Engineering' ? 'selected' : '' }}>Electrical
                                            Engineering</option>
                                        <option value="Mechanical Engineering"
                                            {{ $user->major == 'Mechanical Engineering' ? 'selected' : '' }}>Mechanical
                                            Engineering</option>
                                        <option value="Mathematics" {{ $user->major == 'Mathematics' ? 'selected' : '' }}>
                                            Mathematics</option>
                                        <option value="English Literature"
                                            {{ $user->major == 'English Literature' ? 'selected' : '' }}>English Literature
                                        </option>
                                        <option value="Environmental Science"
                                            {{ $user->major == 'Environmental Science' ? 'selected' : '' }}>Environmental
                                            Science</option>
                                        <option value="Physics" {{ $user->major == 'Physics' ? 'selected' : '' }}>Physics
                                        </option>
                                        <option value="History" {{ $user->major == 'History' ? 'selected' : '' }}>History
                                        </option>
                                        <option value="Information Technology"
                                            {{ $user->major == 'Information Technology' ? 'selected' : '' }}>Information
                                            Technology</option>
                                        <option value="International Relations"
                                            {{ $user->major == 'International Relations' ? 'selected' : '' }}>
                                            International Relations</option>
                                        <option value="Art History"
                                            {{ $user->major == 'Art History' ? 'selected' : '' }}>Art History</option>
                                        <option value="Biomedical Engineering"
                                            {{ $user->major == 'Biomedical Engineering' ? 'selected' : '' }}>Biomedical
                                            Engineering</option>
                                        <option value="Criminal Justice"
                                            {{ $user->major == 'Criminal Justice' ? 'selected' : '' }}>Criminal Justice
                                        </option>
                                        <option value="Graphic Design"
                                            {{ $user->major == 'Graphic Design' ? 'selected' : '' }}>Graphic Design
                                        </option>
                                        <option value="Public Health"
                                            {{ $user->major == 'Public Health' ? 'selected' : '' }}>Public Health</option>
                                        <option value="Social Work"
                                            {{ $user->major == 'Social Work' ? 'selected' : '' }}>Social Work</option>
                                    </select>
                                </div>




                                <div class="mb-4">
                                    <label for="" class="mb-2">Graduation Status*</label>
                                    <select name="graduationStatus" id="graduationStatus" class="form-control" disabled>
                                        <option value="">Select Graduation Status</option>
                                        <option value="completed"
                                            {{ $user->graduationStatus == 'completed' ? 'selected' : '' }}>Completed
                                        </option>
                                        <option value="incomplete"
                                            {{ $user->graduationStatus == 'incomplete' ? 'selected' : '' }}>Incomplete
                                        </option>
                                        <option value="ongoing"
                                            {{ $user->graduationStatus == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Average Grade</label>
                                    <input type="float" name="avgMark" id="avgMark"
                                        placeholder="Enter average GPA in 4 point system" class="form-control"
                                        value="{{ $user->avgMark }}" readonly>
                                    <p></p>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">English Proficiency Test</label>
                                    <select name="englishProficiency" id="englishProficiency" class="form-control"
                                        disabled>
                                        <option value="">Select Undergone English Proficiency Test</option>
                                        <option value="NONE"
                                            {{ $user->englishProficiency == 'NONE' ? 'selected' : '' }}>None</option>
                                        <option value="IELTS"
                                            {{ $user->englishProficiency == 'IELTS' ? 'selected' : '' }}>IELTS</option>
                                        <option value="TOEFL"
                                            {{ $user->englishProficiency == 'TOEFL' ? 'selected' : '' }}>TOEFL</option>
                                        <option value="PTE"
                                            {{ $user->englishProficiency == 'PTE' ? 'selected' : '' }}>PTE</option>
                                        <option value="Cambridge English (CAE/CPE)"
                                            {{ $user->englishProficiency == 'Cambridge English (CAE/CPE)' ? 'selected' : '' }}>
                                            Cambridge English (CAE/CPE)</option>
                                        <option value="Duolingo English Test"
                                            {{ $user->englishProficiency == 'Duolingo English Test' ? 'selected' : '' }}>
                                            Duolingo English Test</option>
                                        <option value="TOEIC"
                                            {{ $user->englishProficiency == 'TOEIC' ? 'selected' : '' }}>TOEIC</option>
                                        <option value="EF SET"
                                            {{ $user->englishProficiency == 'EF SET' ? 'selected' : '' }}>EF SET</option>
                                    </select>
                                </div>


                                <div class="mb-4" id="scoreFields" style="display: none;">
                                    <div class="mb-4">
                                        <label for="" class="mb-2">Reading Score</label>
                                        <input type="text" name="englishReading" id="englishReading"
                                            class="form-control" value="{{ $user->englishReading }}" readonly>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2">Listening Score</label>
                                        <input type="text" name="englishListening" id="englishListening"
                                            class="form-control" value="{{ $user->englishListening }}" readonly>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2">Writing Score</label>
                                        <input type="text" name="englishWriting" id="englishWriting"
                                            class="form-control" value="{{ $user->englishWriting }}" readonly>
                                    </div>

                                    <div class="mb-4">
                                        <label for="" class="mb-2">Speaking Score</label>
                                        <input type="text" name="englishSpeaking" id="englishSpeaking"
                                            class="form-control" value="{{ $user->englishSpeaking }}" readonly>
                                    </div>
                                </div>

                            </div>
                                {{-- update and edit button given display none property till edit is clicked --}}
                                <div class="card-footer  p-4">
                                    <button type="button" class="btn btn-primary" id="editButton">Edit</button>
                                    <button type="submit" class="btn btn-primary d-none"
                                        id="updateButton">Update</button>
                                    <button type="button" class="btn btn-primary d-none"
                                        id="cancelButton">Cancel</button>
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
                url: "{{ route('account.update-profile-edu') }}",
                type: "put",
                datatype: "json",
                data: $("#userForm").serializeArray(),
                // display errors occuring in the form
                success: function(response) {
                    if (response.status == false) {
                        if (response.errors) {
                            if (response.errors.educationLevel) {
                                $("#educationLevel").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.educationLevel);
                            } else {

                                $("#educationLevel").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }

                            if (response.errors.educationCountry) {
                                $("#educationCountry").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.educationCountry);
                            } else {
                                $("#educationCountry").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.graduationStatus) {
                                $("#graduationStatus").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.graduationStatus);
                            } else {
                                $("#graduationStatus").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.institution) {
                                $("#institution").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.institution);
                            } else {
                                $("#institution").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.degree) {
                                $("#degree").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.degree);
                            } else {
                                $("#degree").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.englishProficiency) {
                                $("#englishProficiency").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.englishProficiency);
                            } else {
                                $("#englishProficiency").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.englishListening) {
                                $("#englishListening").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.englishListening);
                            } else {
                                $("#englishListening").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.englishWriting) {
                                $("#englishWriting").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.englishWriting);
                            } else {
                                $("#englishWriting").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.englishReading) {
                                $("#englishReading").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.englishReading);
                            } else {
                                $("#englishReading").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.englishSpeaking) {
                                $("#englishSpeaking").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.englishSpeaking);
                            } else {
                                $("#englishSpeaking").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.major) {
                                $("#major").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.major);
                            } else {
                                $("#major").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                        }
                    } else {

                        $("#educationLevel, #educationCountry").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        window.location.href = "{{ route('account.profile.edu') }}";
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

        //// script to make major and degree field already visible if the user dont have data in db
        document.getElementById('educationLevel').addEventListener('change', function() {
            var educationLevel = this.value;
            var degreeField = document.getElementById('degreeField');
            var collegemajorField = document.getElementById('collegemajorField');
            var schoolmajorField = document.getElementById('schoolmajorField');
            var keywords = [
                'Associate Degree',
                "Bachelor's Degree",
                "Master's Degree",
                'Professional Degree',
                'Doctorate Degree (PhD)',
                'Vocational Training'
            ];



            if (keywords.includes(educationLevel)) {
                degreeField.style.display = 'block';


            } else {
                degreeField.style.display = 'none';
            }
        });
        // script to make major and degree field already visible if the user alrady has data in db
        window.onload = function() {
            var educationLevel = document.getElementById('educationLevel').value;
            var collegemajorField = document.getElementById('collegemajorField');
            var schoolmajorField = document.getElementById('schoolmajorField');
            var degreeField = document.getElementById('degreeField');
            var userEducationLevel = @json($user->educationLevel);
            var userDegree = @json($user->degree);
            var keywords = [
                'Associate Degree',
                "Bachelor's Degree",
                "Master's Degree",
                'Professional Degree',
                'Doctorate Degree (PhD)',
                'Vocational Training'
            ];

            if (keywords.includes(userEducationLevel)) {
                degreeField.style.display = 'block';
            } else {
                degreeField.style.display = 'none';
            }


            const proficiencySelect = document.getElementById('englishProficiency');
            const scoreFields = document.getElementById('scoreFields');

            // Function to check and display score fields
            function toggleScoreFields() {
                if (proficiencySelect.value !== 'NONE' && proficiencySelect.value !== '') {
                    scoreFields.style.display = 'block';
                } else {
                    scoreFields.style.display = 'none';
                }
            }

            // Check on page load
            toggleScoreFields();

            // Listen for changes in the select dropdown
            proficiencySelect.addEventListener('change', toggleScoreFields);
        };
    </script>
@endsection
