@extends('mainLayout.adminLayout')
@section('content')
    <main>
      <div class="main__container">
        <!-- MAIN TITLE STARTS HERE -->

        <div class="main__title">
          <img src="images/hello.svg" alt="" />
          <div class="main__greeting">
            <h1>Apon Seba admin panel</h1>
            <p>Welcome to your admin dashboard</p>
          </div>
        </div>

        <!-- MAIN TITLE ENDS HERE -->

        <!-- MAIN CARDS STARTS HERE -->
        <div class="main__cards">
          <div class="card">
            <div class="card_inner">
              <p class="text-primary-p">Number of Visitors</p>
              <span class="font-bold text-title">{{$visitors}}</span>
            </div>
          </div>

          <div class="card">
            <div class="card_inner">
              <p class="text-primary-p">Total Job Applications</p>
              <span class="font-bold text-title">{{$jobApplication}}</span>
            </div>
          </div>

          <div class="card">
            <div class="card_inner">
              <p class="text-primary-p">Total Application to get services</p>
              <span class="font-bold text-title">{{$needServiceApplication}}</span>
            </div>
          </div>

          <div class="card">
            <div class="card_inner">
              <p class="text-primary-p">Total Available Jobs</p>
              <span class="font-bold text-title">{{$jobs}}</span>
            </div>
          </div>
        </div>
        <!-- MAIN CARDS ENDS HERE -->

        <!-- CHARTS STARTS HERE -->
        <div class="charts">
          <div class="charts__left">
            <div class="charts__left__title">
              <div>
                <h1>Daily Reports</h1>
                <p>Apon Seba Home Care</p>
              </div>
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div id="apex1"></div>
          </div>

          <div class="charts__right">
            <div class="charts__right__title">
              <div>
                <h1>Stats Reports</h1>
                <p>Apon Seba Home Care</p>
              </div>
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>

            <div class="charts__right__cards">
              <div class="card1">
                <h1>Income</h1>
                <p>$75,300</p>
              </div>

              <div class="card2">
                <h1>Sales</h1>
                <p>$124,200</p>
              </div>

              <div class="card3">
                <h1>Users</h1>
                <p>3900</p>
              </div>

              <div class="card4">
                <h1>Orders</h1>
                <p>1881</p>
              </div>
            </div>
          </div>
        </div>
        <!-- CHARTS ENDS HERE -->
      </div>
    </main>

@endsection