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
                            <li class="breadcrumb-item active">Security</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('message') {{-- To display messages after update-profile --}}
                @include('front.account.sidebar')
                <div class="col-lg-9">
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body p-4">
                            <form action="" method="POST" id="changePassowrd" name="changePassword">
                                <h3 class="fs-4 mb-1">Change Password</h3>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Old Password*</label>
                                    <input type="password" name="oldPassword" id="oldPassword" placeholder="Old Password"
                                        class="form-control">
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">New Password*</label>
                                    <input type="password" name="newPassword" id="newPassword" placeholder="New Password"
                                        class="form-control">
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Confirm Password*</label>
                                    <input type="password" name="newConfirmPassword" id="newConfirmPassword"
                                        placeholder="Confirm Password" class="form-control">
                                    <p></p>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" id="showPassword"> Show Password
                                </div>
                                <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('customjs')
    <script type="text/javascript">
        $("#changePassowrd").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('account.profile.security.change-password') }}",
                type: "post",
                datatype: "json",
                data: $("#changePassowrd").serializeArray(),
                // display errors occuring in the form
                success: function(response) {
                    if (response.status == false) {
                        if (response.errors) {
                            if (response.errors.oldPassword) {
                                $("#oldPassword").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.oldPassword);
                            } else {

                                $("#oldPassword").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }

                            if (response.errors.newPassword) {
                                $("#newPassword").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.newPassword);
                            } else {
                                $("#newPassword").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                            if (response.errors.newConfirmPassword) {
                                $("#newConfirmPassword").addClass('is-invalid')
                                    .siblings('p')
                                    .addClass('invalid-feedback')
                                    .html(response.errors.newConfirmPassword);
                            } else {
                                $("#newConfirmPassword").removeClass('is-invalid')
                                    .siblings('p')
                                    .removeClass('invalid-feedback')
                                    .html('');
                            }
                        }
                    } else {

                        $("#ConfirmPassword, #newConfirmPassword, #oldPassword").removeClass(
                                'is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        window.location.href = "{{ route('account.profile.security') }}";
                    }
                }
            });
        });

        $(document).ready(function() {
            $("#showPassword").on('change', function() {
                const passwordField = $("#oldPassword, #newPassword, #newConfirmPassword");
                const type = $(this).is(':checked') ? 'text' : 'password';
                passwordField.attr('type', type);
            });
        });

    </script>

@endsection
