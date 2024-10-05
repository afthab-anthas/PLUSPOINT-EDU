@extends('front.layouts.app')

@section('main')

    <section class="section-5 bg-2">

        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                @include('message') {{-- To display messages after update-profile --}}
                <div class="col-lg-5">
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body p-4">
                            <form action="" method="POST" id="changePassowrd" name="changePassword">
                                <h3 class="fs-4 mb-1">Reset Password</h3>
                                <input type="hidden" name="token" id="token" value="{{ $tokenString }}">
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
        </div>
    </section>
@endsection
@section('customjs')
    <script type="text/javascript">
    $(document).ready(function() {
            $("#showPassword").on('change', function() {
                const passwordField = $("#newPassword, #newConfirmPassword");
                const type = $(this).is(':checked') ? 'text' : 'password';
                passwordField.attr('type', type);
            });
        });
        $("#changePassowrd").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('account.resetPasswordUpdate') }}",
                type: "post",
                datatype: "json",
                data: $("#changePassowrd").serializeArray(),
                // display errors occuring in the form
                success: function(response) {
                    if (response.status == false) {
                        if (response.errors) {
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

                        $("#ConfirmPassword, #newConfirmPassword").removeClass(
                                'is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                            window.location.href = "{{ route('account.login') }}";
                    }
                }
            });
        });

        

    </script>

@endsection
