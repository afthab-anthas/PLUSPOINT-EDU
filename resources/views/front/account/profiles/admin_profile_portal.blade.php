@extends('front.layouts.app')

@section('main')
    <section class="section-5 bg-2">
        <div class="container py-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Referral Code Management</li>
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
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title mt-4 text-blue">Manage Referral Codes</h4>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('admin.addReferralCode') }}" method="POST">
                                @csrf
                                <h5 class="card-title mt-0"for="existing_codes">Add New Referral Codes</h5>
                                <div class="mb-4">
                                    <label for="referral_code" class="mb-2">Referral Code</label>
                                    <input type="text" name="referral_code" class="form-control" required readonly>
                                    <p></p>
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="mb-2">Description</label>
                                    <input name="description" class="form-control" required readonly></input>
                                    <p></p>
                                </div>
                                <div >
                                    <button type="button" class="btn btn-primary" id="editButton">Edit</button>
                                    <button type="submit" class="btn btn-primary d-none" id="updateButton">Update</button>
                                    <button type="button" class="btn btn-primary d-none" id="cancelButton">Cancel</button>
                                </div>
                            </form>
    
                            <hr>
    
                            <form action="{{ route('admin.deleteReferralCode') }}" method="POST" id="deleteForm">
                                @csrf
                                <div class="mb-4">
                                    <h5 class="card-title mt-0"for="existing_codes">Existing Referral Codes</h5>
                                    <select name="referral_code_id" id="existing_codes" class="form-control">
                                        <option value="">Select a code to delete</option>
                                        @foreach($referralCodes as $code)
                                            <option value="{{ $code->id }}">{{ $code->referral_code }} - {{ $code->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger" id="deleteButton">Delete Selected Code</button>
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
    
        // Disable delete button initially
        document.getElementById("deleteButton").disabled = true;

        // Enable or disable delete button based on selection
        document.getElementById("existing_codes").addEventListener("change", function() {
            var deleteButton = document.getElementById("deleteButton");
            deleteButton.disabled = this.value === "";
        });

        //script to make update and cancel button visible and the fields editable when edit is clicked
        document.getElementById("editButton").addEventListener("click", function() {
            document.querySelectorAll("input, select").forEach(function(element) {
                element.removeAttribute("readonly");
                element.removeAttribute("disabled");
            });
            document.getElementById("editButton").classList.add("d-none");
            document.getElementById("updateButton").classList.remove("d-none");
            document.getElementById("cancelButton").classList.remove("d-none");
            document.getElementById("deleteButton").classList.remove("d-none");
        });

        document.getElementById("cancelButton").addEventListener("click", function() {
            location.reload();
        });
    </script>
@endsection