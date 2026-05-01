@extends('frontend.layouts.master')

@section('main-content')
                        
  <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">{{ __('common.order_detail') }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('common.home') }} <span class="ficon"> /  </span> </a></li>
                      <li class="breadcrumb-item active" aria-current="page"> {{ __('common.order_detail') }} </li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
  <section class="page-cntnt pt-5 pb-5">
          <div class="container">  
            <div class="row">  
               <div class="row m-0 mt-5">
      <div class="col-md-12 col-xl-12 mb-5 d-none d-md-block account-sidebar-wrapper">
       <div class="nav nav-pills me-3 account-sidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    
    <button class="nav-link  active" id="change-password-tab" data-bs-toggle="pill" data-bs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">{{ __('common.change_password') }}</button>
    <button class="nav-link" id="orderhistory-tab" data-bs-toggle="pill" data-bs-target="#orderhistory" type="button" role="tab" aria-controls="orderhistory" aria-selected="false">{{ __('common.order_history') }}</button>
    <a href="{{ route('user.logout') }}" class="nav-link" type="button" > {{ __('common.logout') }}</a>
  </div>
      </div>
      <div class="col-md-12 col-xl-12 mb-5">
        <!-- Nav Tabs Content -->
        <div class="tab-content shadow" id="myTabContent">
          <div class="tab-pane accordion-item " data-aos="fade-in" data-aos-duration="800" id="edit-account" role="tabpanel" aria-labelledby="my-account-tab">
            <h2 class="accordion-header d-md-none" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span> Home </span> <i class="fas fa-chevron-down "></i>  </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
              <div class="accordion-body">
                
                <div class="text-center mb-5">
                  <h2 class="mb-1">My Account Information</h2>
                 <p class="subtitle">Presonal Information</p>
                </div>
                <form>
                           <div class="row">
                                        <div class="col-xl-6 col-lg-6">                                          
                                            <div class="form-group m-b25">
                                                  <label class="label-title"> Full Name</label>
                                                <input type="text" class="form-control" name="name" class="form-control" placeholder="Jhon Doe" required="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                         
                                             <div class="form-group m-b25">
                                                    <label  class="label-title"> Email Address</label>
                                                <input type="email"  class="form-control" name="email" class="form-control" placeholder="jhon@doman.com" required="" aria-required="true">
                                            </div>
                                        </div>
                                      </div> 
                                      <div class="text-center">                                     
                                        <button type="submit" class="btn custom-btn mt-3 mt-sm-0"> Continue </button>
                                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="tab-pane accordion-item show active" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
            <h2 class="accordion-header d-md-none" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span> Profile </span> <i class="fas fa-chevron-down "></i>  </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse d-md-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                <div class="accordion-body">
                <!--start change password info-->
                <div class="text-center mb-5">
                  <h3 class="mb-1">{{ __('common.change_password') }}</h3>
                  <!-- <p class="font-size-lg text-capitalize">Your Password</p> -->
                </div>
                @if (session('success'))
    <div class="text-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="text-danger">
        {{ session('error') }}
    </div>
@endif
               <form method="POST" action="{{route('change.password')}}" id="passwordform">
                 @csrf
                                   <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">                                
                                            <h4 class="contact-three__input-title">{{ __('common.old_password') }}</h4>
                                            <div class="contact-three__input-box mb-2">
                                                <input type="password" name="current_password" id="oldpswrd" class="form-control"  />
                                            </div>
                                           </div>
                                       <div class="col-xl-6 col-lg-6 col-md-12"> 
                                            <h4 class="contact-three__input-title"> {{ __('common.new_password') }}</h4>
                                            <div class="contact-three__input-box mb-2">
                                               <input id="new_password" type="password" name="new_password" class="form-control" />
                                            </div>
                                         </div> 
                                     </div>
                                     <div class="row align-items-center"> 
                                       <div class="col-xl-6 col-lg-6 col-md-12"> 
                                          <h4 class="contact-three__input-title">{{ __('common.new_password_confirm') }}</h4>
                                            <div class="contact-three__input-box mb-2">
                                                 <input id="cnfrm_pswrd" type="password" name="new_confirm_password" class="form-control" />
                                            </div>
                                        </div>
                                                                             
                                       <div class="col-xl-6 col-lg-6 col-md-12"> 
                                            <div class="mt-4 text-end">                                                
                                                <button type="submit" class=" btn custom-btn"><span>{{ __('common.change_password') }}</span></button>
                                             </div>   
                </div>
</div>   
                </form>
                <!-- end change password -->
              </div>
            </div>
          </div>   
       
          <div class="tab-pane accordion-item" id="orderhistory" role="tabpanel" aria-labelledby="orderhistory-tab">
            <h2 class="accordion-header d-md-none" id="headingfour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"><span> Order History </span> <i class="fas fa-chevron-down "></i> </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse d-md-block" aria-labelledby="headingfive" data-bs-parent="#myTabContent">
               <div class="accordion-body">
                <!-- start order list -->
                <h3 class="text-center mb-4">{{ __('common.orders') }}</h3>
                <div class="order-list">
                  <div class="table-responsive">
                     @if(count($orders)>0)
                    <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>S.N.</th>
                                       <th>{{ __('common.order_number') }}</th>
                                       <th>{{ __('common.name') }}</th>
                                       <th>{{ __('common.total_amount') }}</th>
                                       <th>{{ __('common.status') }}</th>
                                       <th>{{ __('common.action') }}</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($orders as $order)
                                     @php
                            $currency = match($order->currency) {
                                'USD' => '$',
                                'JPY' => '¥',
                                'HKD' => 'HK$',
                                default => '$',
                            };

                            if($order->currency == "JPY") {
                                $orderTotalAmount = number_format($order->total_amount, 0);
                            }
                            else {
                                $orderTotalAmount = number_format($order->total_amount, 2);
                            }
                          @endphp
                                    <tr>
                                       <td>{{$order->id}}</td>
                                       <td>{{$order->order_number}}<br> <span class='text-secondary'>Date: {{$order->created_at->format('d-M-y')}}</span> </td>
                                       <td>{{$order->first_name}} {{$order->last_name}}</td>
                                       <td class="">
            <span class="text-primary fw-bold">{{$order->currency}}</span>
                                         
   {{number_format($order->total_amount, $order->currency=='JPY' ? 0 : 2)}}                                      
                                           
                               
                                        </td>
                                       <td>{{ ucwords($order->status) }}</td>
                                       <td>
                                          <a href="{{route('user.order.show',$order->id)}}" class="btn custom-btn" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fa fa-eye"></i></a>
                                          <form method="POST" action="{{route('user.order.delete',[$order->id])}}">
                                             @csrf
                                             @method('delete')
                                          </form>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                      @else
          <h6 class="text-center">No orders found!!! Please order some products</h6>
        @endif  
                  </div>
                   <!--<div class="contact-three__btn-box d-flex mt-3">
                                                
<a class="btn btn-secondary float-end" href="{{route('user')}}"> <span> {{ __('common.back') }} </span> </a>

                                            </div>-->
                </div>
                <!-- end Order List  -->
              </div>
            </div>
          </div>
          <!--end order list tab -->
          <div class="tab-pane accordion-item" id="transactions" role="tabpanel" aria-labelledby="transactions-tab">
            <h2 class="accordion-header d-md-none" id="headingfour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix"> <span> Transaction </span> <i class="fas fa-chevron-down "></i>  </button>
            </h2>
            <div id="collapsesix" class="accordion-collapse collapse d-md-block" aria-labelledby="headingsix" data-bs-parent="#myTabContent">
              <div class="accordion-body ">
                <!-- start order list -->
                <h2 class="text-center mb-4">Your Transactions</h2>
                <div class="order-list">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover ">
                      <tr>
                        <th scope="col"> Date Added </th>
                        <th scope="col" style="width:400px"> Description </th>
                        <th scope="col"> Amount (USD) </th>
                      </tr>
                      <tr>
                        <td> March 12, 2024 </td>
                        <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at fermentum augue, id porttitor nulla </td>
                        <td> $321 </td>
                      </tr>
                      <tr>
                        <td> March 12, 2024 </td>
                        <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at fermentum augue, id porttitor nulla </td>
                        <td> $321 </td>
                      </tr>
                      <tr>
                        <td> March 12, 2024 </td>
                        <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at fermentum augue, id porttitor nulla </td>
                        <td> $321 </td>
                      </tr>
                    </table>
                  </div>
                  <div class="text-center mt-3">
                                                <button type="submit" class="btn custom-btn me-auto"> Continue </button>
                         </div>
                </div>
                <!-- end Transaction List  -->
              </div>
            </div>
          </div>
          <!--end transaction tab -->
        </div>
      </div>
    </div> 
                <div class="col-12">
                    @php
        $points=DB::table('users')->where('id',auth()->user()->id)->pluck('points')->first();
                    
                @endphp
   <p>
       @auth<span class="text-start">Hi, <b style="font-size:24px;color:#b6f1d5 ;">{{ Auth::user()->name }}</b>  ( <a href="{{ route('user.logout') }}"> {{ __('common.logout') }} </a> )</span>@endauth
       <span class="text-end" style="float: right;">Available Credits: <b style="font-size:24px;color:#b6f1d5 ;">{{$points}} </b></span>
                    </p>           
                </div>
              <div class="col-12">
            
          <div class="table-content table-responsive custom-wbackg">

              @include('user.layouts.notification')

              
                @php
                    $orders=DB::table('orders')->where('user_id',auth()->user()->id)->paginate(10);
                @endphp
                <!-- Order -->
                <div class="col-xl-12 col-lg-12" >
                  <table class="table table-bordered pt-5 pb-5" id="order-dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th >{{ __('common.order_number') }}</th>
                        <th>{{ __('common.name') }}</th>
                        <th>{{ __('common.email') }}</th>
                        <th>{{ __('common.quantity') }}</th>
                        <th class="text-right">{{ __('common.total_amount') }}</th>
                        <th>{{ __('common.status') }}</th>
                        <th>{{ __('common.action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($orders)>0)
                        @foreach($orders->reverse() as $order)
                          @php
                            $currency = match($order->currency) {
                                'USD' => '$',
                                'JPY' => '¥',
                                'HKD' => '$HK',
                                default => '$',
                            };

                            if($order->currency == "JPY") {
                                $orderTotalAmount = number_format($order->total_amount, 0);
                            }
                            else {
                                $orderTotalAmount = number_format($order->total_amount, 2);
                            }
                          @endphp
                          <tr>
                              <td>{{$order->order_number}}</td>
                              <td>{{$order->first_name}} {{$order->last_name}}</td>
                              <td>{{$order->email}}</td>
                              <td>{{$order->quantity}}</td>
                              <td class="text-right ft-w-b">{{ $currency }} {{ $orderTotalAmount }}</td>
                              <td>
                                {{ ucwords($order->status) }}
                              </td>
                              <td class="text-center">
                                  <a href="{{route('user.order.show',$order->id)}}" class="default-button colorbtn1 btn-sm float-left mr-1" data-toggle="tooltip" title="view" data-placement="bottom">{{ __('common.order_detail') }}</a>
                                  <!-- <form method="POST" action="{{route('user.order.delete',[$order->id])}}">
                                    @csrf 
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                  </form> -->
                              </td>
                          </tr>  
                        @endforeach
                        @else
                          <td colspan="8" class="text-center"><h4 class="my-4">{{ __('common.no_orders_found') }}</h4></td>
                        @endif
                    </tbody>
                  </table>

                  <!-- {{$orders->links()}} -->
                </div>
              

          </div>
        </div>
</div>
</div>
</section>

@endsection

@push('scripts')
<script type="text/javascript">
  const url = "{{route('product.order.income')}}";

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");

axios.get(url)
            .then(function (response) {
              const data_keys = Object.keys(response.data);
              const data_values = Object.values(response.data);


var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: data_keys, //["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: data_values, //[0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 44660],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '$' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});











            })
            .catch(function (error) {
            //   vm.answer = 'Error! Could not reach the API. ' + error
            console.log(error)
            });





  </script>
@endpush