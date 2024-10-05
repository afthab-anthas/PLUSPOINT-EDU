@extends('front.layouts.app')

@section('main')
    <style>
        section.section-5{
            background-image: url("{{ asset('images/bg-register.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <section class="section-5" >
        <div class="container my-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
            <div class="py-lg-2">&nbsp;</div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow border-0 p-5">
                        <h1 class="h3">Register</h1>
                        <form action="" name="registrationForm" id="registrationForm">
                            <div class="mb-3">
                                <label for="" class="mb-2">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter Full Name">
                                <p></p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Email ID</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Enter Email ID">
                                <p></p>
                            </div>
                            {{-- Mobile Number Form if needed
                            <div class="mb-3">
                            <label for="" class="mb-2">Mobile Number</label>
                            <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number">
                            <p></p>
                        </div>  --}}
                            <div class="mb-3">
                                <label for="" class="mb-2">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter Password">
                                <p></p>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                    placeholder="Confirm Password">
                                <p></p>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" id="showPassword"> Show Password
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Select Role</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="student">Student</option>
                                    <option value="broker">Broker</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-2">Referral Code</label>
                                <input type="text" name="agentCode" id="agentCode" class="form-control"
                                    placeholder="Enter Referral Code">
                                <p></p>
                            </div>
                            <p style="font-size: 12px;">
                                *By registering on this website, you acknowledge and agree to the collection, use, and
                                storage of your personal data. Your data will be used to enhance your experience on our
                                platform, provide personalized consultations for your education, and improve our offerings.
                                We are committed to protecting your privacy and ensuring the security of your information.
                            </p>
                            <button class="btn btn-primary mt-2">Register</button>
                            <div id="loading" style="display: none;">
                                <p>Loading...</p>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 text-center text-white">
                        <p>Have an account? <a class="btn btn-primary" href="{{ route('account.login') }}"
                                type="submit">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('customjs')
    <script>
        $("#showPassword").on('change', function() {
            const passwordField = $("#password");
            const confirmPasswordField = $("#confirm_password");
            const type = $(this).is(':checked') ? 'text' : 'password';
            passwordField.attr('type', type);
            confirmPasswordField.attr('type', type);
            passwordField.val(passwordField.val());
            confirmPasswordField.val(confirmPasswordField.val());

        });

        $("#registrationForm").submit(function(e) {
            $("#loading").show();
            e.preventDefault();
            $.ajax({
                url: "{{ route('account.processRegistration') }}", // Make sure the route name is enclosed in single quotes
                type: "POST",
                data: $("#registrationForm").serializeArray(),
                dataType: "json",
                success: function(response) {
                    if (response.status == false) {
                        $("#loading").hide();
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

                        if (response.errors.mobile) {
                            $("#mobile").addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback')
                                .html(response.errors.mobile);
                        } else {
                            $("#mobile").removeClass('is-invalid')
                                .siblings('p')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if (response.errors.password) {
                            $("#password").addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback')
                                .html(response.errors.password);
                        } else {
                            $("#password").removeClass('is-invalid')
                                .siblings('p')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if (response.errors.confirm_password) {
                            $("#confirm_password").addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback')
                                .html(response.errors.confirm_password);
                        } else {
                            $("#confirm_password").removeClass('is-invalid')
                                .siblings('p')
                                .removeClass('invalid-feedback')
                                .html('');
                        }
                        if (response.errors.agentCode) {
                            $("#agentCode").addClass('is-invalid')
                                .siblings('p')
                                .addClass('invalid-feedback')
                                .html(response.errors.agentCode);
                        } else {
                            $("#agentCode").removeClass('is-invalid')
                                .siblings('p')
                                .removeClass('invalid-feedback')
                                .html('');
                        }
                    } else {
                        // Clear all error messages and classes

                        $("#name, #email, #password, #confirm_password").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        window.location.href =
                        "{{ route('account.login') }}"; // Make sure the route name is enclosed in single quotes

                    }
                }
            });
        });

        document.getElementById('agentCode').addEventListener('input', function() {
            var referralCode = this.value;
            var roleSelect = document.getElementById('role');
            var adminOption = document.querySelector('#role option[value="admin"]');

            if (referralCode === 'admin') {
                if (!adminOption) {
                    var newOption = document.createElement('option');
                    newOption.value = 'admin';
                    newOption.text = 'Admin';
                    roleSelect.add(newOption);
                }
            } else {
                if (adminOption) {
                    adminOption.remove();
                }
            }
        });
    </script>
@endsection
