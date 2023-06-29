@extends('layouts.app')

@section('content')

    <x-banner title="Admin Dashboard" :meta="[
        'image'    => asset('images/banner/IMG_8572.jpg'),
        'url'      => route('home'),
        'prevPage' => 'Home',
    ]"/>

    <section class="ts-contact-form section-bg ">
        <div class="container ">
            <div class="row">

                <div style="margin-bottom: 50px !important;" class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-people"></i>
                                <h3 class="ts-title">Registrations</h3>
                                <p><a data-toggle="modal" >Registered Users</a></p>
                                <br>
                                <span style="width: 200px !important;" class="count-number">{{ $users_count }}</span>
                            </div><!-- single intro text end-->

                        </div><!-- col end-->

                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-cart"></i>
                                <h3 class="ts-title">Transactions</h3>
                                <p>Total Transactions Initiated</p>
                                <br>
                                <span style="width: 200px !important;"
                                      class="count-number">{{ number_format($transactions_count) }}</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->

                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-money-3"></i>
                                <h3 class="ts-title">Payments (NGN)</h3>
                                <p><a  target="_blank">Total Amount Paid</a></p>
                                <br>
                                <span style="width: 200px !important; " class="count-number">@money($transactions_sum_amount)</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                    </div>
                </div><!-- col end-->
                <div class="col-lg-12">
                    <h2 class="column-title">
                        Registration List
                    </h2>
                    <div class="table-responsive mb-70 pb-4">


                        <table class="table table-hover table-bordered" id="u-table" data-order="[]"
                               data-display-length="30">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">SCN</th>
                                <th scope="col">Email</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Branch</th>
                                <th>Registration Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if(!$user->isAdmin())
                                <tr>
                                    <td>
                                        <a target="_blank" class="text-info">
                                            <img class="img-fluid rounded-circle" width="30" src="{{ $user->photo }}"
                                                 alt="photo">
                                            {{ $user->name }}

                                            @admin($user)
                                            <span class="label label-light-success ml-3">Admin</span>
                                            @endadmin
                                        </a>
                                    </td>
                                    <td>{{ $user->enrol?->scn ?? '--' }}</td>
                                    <td>
                                        {{ $user->email }}
                                        <x-verified :verified="$user->hasVerifiedEmail()"/>
                                    </td>
                                    <td>
                                        @empty($user->payments_count)
                                            <span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Pending</span>
                                        @else
                                            <span class="text-success"><i class="fa fa-check-circle"></i> Paid</span>
                                        @endempty

                                        <br><small>{{ $user->attendance }}</small>
                                    </td>
                                    <td>
                                        {{ $user->branch?->name ?? '--' }}
                                    </td>
                                    <td>
                                        {{ $user->registered_at->toDayDateTimeString() }}
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>

                        {{ $users->links() }}
                    </div>



            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
        </div>
    </section>

@endsection

@push('script')
    <x-scripts.datatable/>


@endpush
