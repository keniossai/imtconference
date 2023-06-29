@extends('layouts.include')

@section('title', 'Exhibition')

@section('content')

    <section class="counter-section" style="background-image: url({{ asset('assets/images/background/pattern-6.png') }})">
        <div class="section-icons">
            <!-- Icon One -->
            <div class="icon icon-one"><img src="{{ asset('assets/images/icons/icon-22.png') }}" alt="" /></div>
        </div>
        <div class="auto-container">

            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <div class="table table-responsive mb-5">
                        <div class="text-center">
                            <h3 class="title text-uppercase" style="color: #7D4C65">Exhibition Booths and Prices</h3>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr class="badge-success">
                                <th scope="col">S/N</th>
                                <th scope="col">Size</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>3m X 3m</td>
                                <td>N750,000.00</td>
                                <td>For single exhibition booth bookings</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>3m X 2m</td>
                                <td>N500,000.00</td>
                                <td>For multiple (two or more) booth bookings</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3m X 3m</td>
                                <td>$1500</td>
                                <td>Flat rate for international exhibitors</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Virtual Exhibition</td>
                                <td>$1000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th colspan="4">
                                    <div class="text-right text-dark">
                                        <h6 class="text-dark font-weight-bold border-bottom border-5">Payment should be made to the following bank account:</h6>

                                        <h6 class="font-weight-bold text-dark ">Access Bank <br>
                                            Account Name: NBA-AGC <br>
                                            Account Number: 0695176495</h6>

                                    </div>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="card-header text-center mt-5">
                        <h3 class="card-title" style="color: #7D4C65">NBA ANNUAL GENERAL CONFERENCE EXHIBITION BOOKING FORM</h3>
                    </div>
                    <div class="card card-body">
                        <form action="{{ route('api.home.exhibitors') }}" method="post" class="contact-form p-4 x-submit" data-then="reload" enctype="multipart/form-data">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input class="form-control" placeholder="Company Name" name="company_name"
                                                   id="name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <textarea class="form-control"  name="company_address"
                                                      id="address" type="text" required placeholder="Company Full Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Contact Person Name" name="contact_person_name"
                                                    type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Contact Person Position " name="contact_person_position"
                                                    type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input class="form-control" placeholder="Contact Person Phone Numbers" name="contact_person_phone"
                                                    type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Contact Person Email Address" name="contact_person_email"
                                                   id="name" type="text" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-5">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Company's website" name="contact_website"
                                                   id="website" type="text">

                                        </div>
                                    </div>


                                    <div class="col-md-12 row text-center border-5 border-top mt-5">
                                        <div class="form-group">
                                            <h6 class="text-dark">EXHIBITOR COMPANY PERSONNEL INFORMATION (Subject to a maximum of 4 persons. Each additional person subject to a maximum of 8 persons, will attract a surcharge)</h6>
                                        </div>
                                    </div>

                                    <div class="education col-12 row mx-0">
                                    <div class="col-xl-12 col-lg-12 education-field">
                                        <div class="gray rounded mb-3 position-relative row">
                                            <div class="col-md-4 pl-0">
                                                <div class="form-group">

                                                    <input class="form-control " placeholder="NAME" name="company_personnel_name[]"
                                                            type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-0">
                                                <div class="form-group">

                                                    <input class="form-control" placeholder="EMAIL & TEL. NUMBER(S)" name="company_personnel_email[]"
                                                            type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div class="form-group">

                                                    <input class="form-control" placeholder="DESIGNATION" name="company_personnel_designation[]"
                                                           id="name" type="text" >
                                                </div>
                                            </div>
                                            <div class="col-md-2 row d-flex align-items-center">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-success   add-education">
                                                        <i class="fas fa-plus mr-1"></i>
                                                    </button>
                                                </div>
                                                <div class="form-group pl-1">
                                                    <button type="button" class="btn btn-danger delete-education">
                                                        <i class="fas fa-minus mr-1"></i>
                                                    </button>
                                                </div>
                                            </div>


                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="payment_invoice" class="font-weight-bold text-dark">Upload Proof of Payment</label>
                                            <input class="form-control" placeholder="Upload proof of payment" name="payment_invoice" required
                                                   id="payment_invoice" type="file">

                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group alert alert-warning">
                                    <label for="attest" class="font-weight-bold">Terms and Conditions</label>
                                    <br>


                                    • The booking fee must be paid in full once acceptance of the booking form is confirmed.
                                    <br>
                                    • Booking fees are non-refundable.<br>
                                    • Payment of the booking fee indicates the exhibitor’s agreement to abide by the rules and regulations of
                                        the NBA Annual General Conference 2023<br>
                                    • The organisers reserve the right to reject any company that has registered its interest and/or made any
                                    payment and return the booking fee in full without giving any reason.<br>
                                    • Tables and chairs will be provided at each booth.<br>
                                    • Set up of exhibition stand commences on Sunday 27 August and ends on Thursday 31 August 2023.<br>
                                    • The exhibition arena will be dismantled on Friday 1 September 2023.<br>
                                    • Provision of false or inaccurate information will result in a penalty fine being imposed and withdrawal<br>
                                    of all electronic and online presence. Failure to pay the fine will result in blacklisting of the exhibitor company for 2 consecutive years.
                                    <br><br><br>
                                    <div class="text-center">
                                        <input id="attest" type="checkbox" required>
                                        <small class="text-"><i>Kindly tick box to accept the terms and conditions contained herein.</i></small><br>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                    <div class="text-center"><br>
                                        <button class="btn"
                                                style="padding: 10px 30px; background-color: #7D4D65; color: white;"
                                                type="submit">
                                            Submit
                                            <x-spinner />
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection

@push('script')



    <script>

        /**
         * Add Education
         */
        //Clone the hidden element and shows it
        $('.add-education').click(function(){
            $('.education-field').first().clone().appendTo('.education').show();
            removeEducationField();
        });

        //Attach functionality to delete buttons
        function removeEducationField(){
            $('.delete-education').off();
            $('.delete-education').click(function(){
                console.log("click");
                $(this).closest('.education-field').remove();
            });
        }

        $("#btn-reset").on("click", function() {
            $("#form-login").slideUp();
            $("#form-reset").fadeIn();
        });

        $("#btn-back-to-login").on("click", function() {
            $("#form-login").slideDown();
            $("#form-reset").fadeOut();
        });

        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });

        $(function () {
            $('#check_password').attr('checked',$(this).attr('checked')==='true'?'false':'true' );
            $("#check_password").click(function () {
                $(this).toggleAttribute("checked");
                var type = $(this).hasAttribute("checked") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>
@endpush
