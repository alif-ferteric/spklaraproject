 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
     <div class="position-sticky pt-3">
         <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                     <span data-feather="home"></span>
                     Dashboard
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard/indikator*') ? 'active' : '' }}"
                     href="/dashboard/indikator">
                     <span data-feather="columns"></span>
                     Kriteria
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard/alternatif*') ? 'active' : '' }}"
                     href="/dashboard/alternatif">
                     <span data-feather="columns"></span>
                     Alternatif
                 </a>
             </li>

             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard/penilaian*') ? 'active' : '' }}"
                     href="/dashboard/penilaian">
                     <span data-feather="life-buoy"></span>
                     Penilaian
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('dashboard/multimoora*') ? 'active' : '' }}"
                     href="/dashboard/multimoora">
                     <span data-feather="aperture"></span>
                     Perhitungan Multimoora
                 </a>
             </li>
         </ul>
         @can('admin')
             <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
                 <span>Administrator</span>
             </h6>
             <ul class="nav flex-column">
                 <li class="nav-item">
                     <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
                         <span data-feather="users"></span>
                         User
                     </a>
                 </li>
                 {{-- <li class="nav-item">
                     <a class="nav-link {{ Request::is('dashboard/hasil*') ? 'active' : '' }}" href="/dashboard/hasil">
                         <span data-feather="file-text"></span>
                         Hasil Akhir
                     </a>
                 </li> --}}
             </ul>
         @endcan
     </div>
 </nav>
