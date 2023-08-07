 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
     <nav class="navbar bg-secondary navbar-dark">
         <a href="index.html" class="navbar-brand mx-4 mb-3">
             <h3 class="text-primary"><i class="fas fa-hand-holding-heart me-2"></i>DarkPan</h3>
         </a>
         <div class="d-flex align-items-center ms-4 mb-4">

             <div class="ms-3">
                 <h6 class="mb-0">{{ Auth::user()->userName }}</h6>
                 <span>{{ Auth::user()->status }}</span>
             </div>
         </div>
         <div class="navbar-nav w-100">
             <a href="{{route('dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fas fa-handshake"></i>Doners</a>
                 <div class="dropdown-menu bg-transparent border-0">
                     <a href="{{route('doner.index')}}" class="dropdown-item"><i class="far fa-address-card me-2" style="margin-left: 5%"></i>Doners List</a>
                     <a href="{{route('donation.index')}}" class="dropdown-item"><i class="fa fa-list me-2" style="margin-left: 5%"></i>Donation List</a>
                 </div>
             </div>

             <div class="nav-item dropdown">
                 <a href="{{route('stock.index')}}" class="nav-link dropdown-toggle"><i class="fas fa-heartbeat me-2"></i>Blood Bank</a>

             </div>
         </div>
     </nav>
 </div>
 <!-- Sidebar End -->
