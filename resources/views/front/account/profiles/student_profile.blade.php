@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-2">
        <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Account Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message')
                {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    {{-- Entire form containing all the fields of the user profile and all the values are set to readonly until the edit buttonis clicked --}}
                    <div class="card border-0 shadow mb-4">
                        <form action="" method="POST" id="userForm" name="userForm">
                            @csrf
                            <div class="card-body  p-4">
                                <h3 class="fs-4 mb-1">My Profile</h3>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Name*</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Name"
                                        class="form-control" value="{{ $user->name }}" readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Email*</label>
                                    <input type="text" name="email" id="email" placeholder="Enter Email"
                                        class="form-control" value="{{ $user->email }}" readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Mobile</label>
                                    <input type="text" name="mobile" id="mobile" placeholder="Mobile"
                                        class="form-control" value="{{ $user->mobile }}" readonly>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Date Of Birth*</label>
                                    <input type="date" name="dob" id="dob" placeholder="YYYY-MM-DD"
                                        class="form-control" value="{{ $user->dob }}" readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Gender*</label>
                                    <select name="gender" id="gender" class="form-control" disabled>
                                        <option value="">Select Gender</option>
                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="nil" {{ $user->gender == 'nil' ? 'selected' : '' }}>Rather Not Say
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Citizenship*</label>
                                    <select name="citizenship" id="citizenship" class="form-control" disabled>
                                        <option value="">Select Country of Citizenship</option>
                                        <option value="Algeria" {{ $user->citizenship == 'Algeria' ? 'selected' : '' }}>
                                            Algeria</option>
                                        <option value="Argentina" {{ $user->citizenship == 'Argentina' ? 'selected' : '' }}>
                                            Argentina</option>
                                        <option value="Australia"
                                            {{ $user->citizenship == 'Australia' ? 'selected' : '' }}>Australia</option>
                                        <option value="Bangladesh"
                                            {{ $user->citizenship == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                        <option value="Brazil" {{ $user->citizenship == 'Brazil' ? 'selected' : '' }}>
                                            Brazil</option>
                                        <option value="Canada" {{ $user->citizenship == 'Canada' ? 'selected' : '' }}>
                                            Canada</option>
                                        <option value="China" {{ $user->citizenship == 'China' ? 'selected' : '' }}>China
                                        </option>
                                        <option value="Colombia" {{ $user->citizenship == 'Colombia' ? 'selected' : '' }}>
                                            Colombia</option>
                                        <option value="Egypt" {{ $user->citizenship == 'Egypt' ? 'selected' : '' }}>Egypt
                                        </option>
                                        <option value="Ethiopia" {{ $user->citizenship == 'Ethiopia' ? 'selected' : '' }}>
                                            Ethiopia</option>
                                        <option value="France" {{ $user->citizenship == 'France' ? 'selected' : '' }}>
                                            France</option>
                                        <option value="Germany" {{ $user->citizenship == 'Germany' ? 'selected' : '' }}>
                                            Germany</option>
                                        <option value="India" {{ $user->citizenship == 'India' ? 'selected' : '' }}>India
                                        </option>
                                        <option value="Indonesia"
                                            {{ $user->citizenship == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                        <option value="Iran" {{ $user->citizenship == 'Iran' ? 'selected' : '' }}>Iran
                                        </option>
                                        <option value="Israel" {{ $user->citizenship == 'Israel' ? 'selected' : '' }}>
                                            Israel</option>
                                        <option value="Italy" {{ $user->citizenship == 'Italy' ? 'selected' : '' }}>Italy
                                        </option>
                                        <option value="Japan" {{ $user->citizenship == 'Japan' ? 'selected' : '' }}>Japan
                                        </option>
                                        <option value="Kenya" {{ $user->citizenship == 'Kenya' ? 'selected' : '' }}>Kenya
                                        </option>
                                        <option value="Mexico" {{ $user->citizenship == 'Mexico' ? 'selected' : '' }}>
                                            Mexico</option>
                                        <option value="Morocco" {{ $user->citizenship == 'Morocco' ? 'selected' : '' }}>
                                            Morocco</option>
                                        <option value="Netherlands"
                                            {{ $user->citizenship == 'Netherlands' ? 'selected' : '' }}>Netherlands
                                        </option>
                                        <option value="Nigeria" {{ $user->citizenship == 'Nigeria' ? 'selected' : '' }}>
                                            Nigeria</option>
                                        <option value="Pakistan" {{ $user->citizenship == 'Pakistan' ? 'selected' : '' }}>
                                            Pakistan</option>
                                        <option value="Philippines"
                                            {{ $user->citizenship == 'Philippines' ? 'selected' : '' }}>Philippines
                                        </option>
                                        <option value="Poland" {{ $user->citizenship == 'Poland' ? 'selected' : '' }}>
                                            Poland</option>
                                        <option value="Russia" {{ $user->citizenship == 'Russia' ? 'selected' : '' }}>
                                            Russia</option>
                                        <option value="Saudi Arabia"
                                            {{ $user->citizenship == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                                        </option>
                                        <option value="South Africa"
                                            {{ $user->citizenship == 'South Africa' ? 'selected' : '' }}>South Africa
                                        </option>
                                        <option value="South Korea"
                                            {{ $user->citizenship == 'South Korea' ? 'selected' : '' }}>South Korea
                                        </option>
                                        <option value="Spain" {{ $user->citizenship == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sweden" {{ $user->citizenship == 'Sweden' ? 'selected' : '' }}>
                                            Sweden</option>
                                        <option value="Switzerland"
                                            {{ $user->citizenship == 'Switzerland' ? 'selected' : '' }}>Switzerland
                                        </option>
                                        <option value="Thailand" {{ $user->citizenship == 'Thailand' ? 'selected' : '' }}>
                                            Thailand</option>
                                        <option value="Turkey" {{ $user->citizenship == 'Turkey' ? 'selected' : '' }}>
                                            Turkey</option>
                                        <option value="United Arab Emirates"
                                            {{ $user->citizenship == 'United Arab Emirates' ? 'selected' : '' }}>United
                                            Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->citizenship == 'United Kingdom' ? 'selected' : '' }}>United Kingdom
                                        </option>
                                        <option value="United States"
                                            {{ $user->citizenship == 'United States' ? 'selected' : '' }}>United States
                                        </option>
                                        <option value="Vietnam" {{ $user->citizenship == 'Vietnam' ? 'selected' : '' }}>
                                            Vietnam</option>
                                    </select>

                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Passport Number</label>
                                    <input type="text" name="passport" id="passport"
                                        placeholder="Enter Passport Number" class="form-control"
                                        value="{{ $user->passport }}" readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Passport Expiry Date</label>
                                    <input type="date" name="passportExpiry" id="passportExpiry"
                                        placeholder="YYYY-MM-DD" class="form-control"
                                        value="{{ $user->passportExpiry }}" readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Country Of Residence*</label>
                                    <select name="residency" id="residency" class="form-control" disabled>
                                        <option value="">Select Country of Residency</option>
                                        <option value="Algeria" {{ $user->residency == 'Algeria' ? 'selected' : '' }}>
                                            Algeria</option>
                                        <option value="Argentina" {{ $user->residency == 'Argentina' ? 'selected' : '' }}>
                                            Argentina</option>
                                        <option value="Australia" {{ $user->residency == 'Australia' ? 'selected' : '' }}>
                                            Australia</option>
                                        <option value="Bangladesh"
                                            {{ $user->residency == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                        <option value="Brazil" {{ $user->residency == 'Brazil' ? 'selected' : '' }}>Brazil
                                        </option>
                                        <option value="Canada" {{ $user->residency == 'Canada' ? 'selected' : '' }}>Canada
                                        </option>
                                        <option value="China" {{ $user->residency == 'China' ? 'selected' : '' }}>China
                                        </option>
                                        <option value="Colombia" {{ $user->residency == 'Colombia' ? 'selected' : '' }}>
                                            Colombia</option>
                                        <option value="Egypt" {{ $user->residency == 'Egypt' ? 'selected' : '' }}>Egypt
                                        </option>
                                        <option value="Ethiopia" {{ $user->residency == 'Ethiopia' ? 'selected' : '' }}>
                                            Ethiopia</option>
                                        <option value="France" {{ $user->residency == 'France' ? 'selected' : '' }}>France
                                        </option>
                                        <option value="Germany" {{ $user->residency == 'Germany' ? 'selected' : '' }}>
                                            Germany</option>
                                        <option value="India" {{ $user->residency == 'India' ? 'selected' : '' }}>India
                                        </option>
                                        <option value="Indonesia" {{ $user->residency == 'Indonesia' ? 'selected' : '' }}>
                                            Indonesia</option>
                                        <option value="Iran" {{ $user->residency == 'Iran' ? 'selected' : '' }}>Iran
                                        </option>
                                        <option value="Israel" {{ $user->residency == 'Israel' ? 'selected' : '' }}>Israel
                                        </option>
                                        <option value="Italy" {{ $user->residency == 'Italy' ? 'selected' : '' }}>Italy
                                        </option>
                                        <option value="Japan" {{ $user->residency == 'Japan' ? 'selected' : '' }}>Japan
                                        </option>
                                        <option value="Kenya" {{ $user->residency == 'Kenya' ? 'selected' : '' }}>Kenya
                                        </option>
                                        <option value="Mexico" {{ $user->residency == 'Mexico' ? 'selected' : '' }}>Mexico
                                        </option>
                                        <option value="Morocco" {{ $user->residency == 'Morocco' ? 'selected' : '' }}>
                                            Morocco</option>
                                        <option value="Netherlands"
                                            {{ $user->residency == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                        <option value="Nigeria" {{ $user->residency == 'Nigeria' ? 'selected' : '' }}>
                                            Nigeria</option>
                                        <option value="Pakistan" {{ $user->residency == 'Pakistan' ? 'selected' : '' }}>
                                            Pakistan</option>
                                        <option value="Philippines"
                                            {{ $user->residency == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                        <option value="Poland" {{ $user->residency == 'Poland' ? 'selected' : '' }}>Poland
                                        </option>
                                        <option value="Russia" {{ $user->residency == 'Russia' ? 'selected' : '' }}>Russia
                                        </option>
                                        <option value="Saudi Arabia"
                                            {{ $user->residency == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                                        </option>
                                        <option value="South Africa"
                                            {{ $user->residency == 'South Africa' ? 'selected' : '' }}>South Africa
                                        </option>
                                        <option value="South Korea"
                                            {{ $user->residency == 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                        <option value="Spain" {{ $user->residency == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sweden" {{ $user->residency == 'Sweden' ? 'selected' : '' }}>Sweden
                                        </option>
                                        <option value="Switzerland"
                                            {{ $user->residency == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                        <option value="Thailand" {{ $user->residency == 'Thailand' ? 'selected' : '' }}>
                                            Thailand</option>
                                        <option value="Turkey" {{ $user->residency == 'Turkey' ? 'selected' : '' }}>Turkey
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ $user->residency == 'United Arab Emirates' ? 'selected' : '' }}>United Arab
                                            Emirates</option>
                                        <option value="United Kingdom"
                                            {{ $user->residency == 'United Kingdom' ? 'selected' : '' }}>United Kingdom
                                        </option>
                                        <option value="United States"
                                            {{ $user->residency == 'United States' ? 'selected' : '' }}>United States
                                        </option>
                                        <option value="Vietnam" {{ $user->residency == 'Vietnam' ? 'selected' : '' }}>
                                            Vietnam</option>
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
                url: "{{ route('account.update-profile') }}",
                type: "put",
                datatype: "json",
                data: $("#userForm").serializeArray(),
                // display errors occuring in the form
                success: function(response) {
                    if (response.status == false) {
                        if (response.errors) {
                            if (response.errors.name) {
                                $("#name").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.name);
                            } else {

                                $("#name").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }

                            if (response.errors.email) {
                                $("#email").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.email);
                            } else {
                                $("#email").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.dob) {
                                $("#dob").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Age should be more than 10 years old');
                            } else {
                                $("#dob").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.citizenship) {
                                $("#citizenship").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.citizenship);
                            } else {
                                $("#citizenship").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.residency) {
                                $("#residency").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.residency);
                            } else {
                                $("#residency").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.passportExpiry) {
                                $("#passportExpiry").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.passportExpiry);
                            } else {
                                $("#passportExpiry").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.passport) {
                                $("#passport").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html('Passport number is already registered');
                            } else {
                                $("#passport").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                        }
                    } else {

                        $("#name, #email").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        window.location.href = "{{ route('account.profile') }}";
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
