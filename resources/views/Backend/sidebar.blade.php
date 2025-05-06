<!--start sidebar-->
<aside class="sidebar-wrapper">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{ asset('Backend') }}/assets/images/logo-icon.png" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">{{ auth()->user()->name }}</h5>
      </div>
      <div class="sidebar-close ">
        <span class="material-symbols-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav" data-simplebar="true">

        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="{{ route('admin') }}">
              <div class="parent-icon"><span class="material-symbols-outlined">home</span>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Slider</div>
            </a>
            <ul>
               <li> <a href="{{ route('create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Slider</a></li>
               <li> <a href="{{ route('banner.index') }}"><span class="material-symbols-outlined">arrow_right</span> Slider List</a> </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">About Me</div>
            </a>
            <ul>
               <li> <a href="{{ route('aboutme.index') }}"><span class="material-symbols-outlined">arrow_right</span>About Me</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Resum</div>
            </a>
            <ul>
               <li> <a href="{{ route('resum.index') }}"><span class="material-symbols-outlined">arrow_right</span>Resum </a></li>
            </ul>
          </li>
          

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Setting</div>
            </a>
            <ul>
               <li> <a href="{{ route('settingcreate') }}"><span class="material-symbols-outlined">arrow_right</span>Added Setting</a></li>
               <li> <a href="{{ route('setting.index') }}"><span class="material-symbols-outlined">arrow_right</span> Setting List</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Services</div>
            </a>
            <ul>
               <li> <a href="{{ route('servicesgcreate') }}"><span class="material-symbols-outlined">arrow_right</span>Added Services</a></li>
               <li> <a href="{{ route('servicesindex') }}"><span class="material-symbols-outlined">arrow_right</span> Services List</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Why Choose Us</div>
            </a>
            <ul>
               <li> <a href="{{ route('hostingsgcreate') }}"><span class="material-symbols-outlined">arrow_right</span>Added Choose Us</a></li>
               <li> <a href="{{ route('hostingsindex') }}"><span class="material-symbols-outlined">arrow_right</span> Choose Us List</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Why Special Omsit</div>
            </a>
            <ul>
               <li> <a href="{{ route('whyspecilcreate') }}"><span class="material-symbols-outlined">arrow_right</span>Added Why Special Us</a></li>
               <li> <a href="{{ route('whyspecilidnex') }}"><span class="material-symbols-outlined">arrow_right</span> List Why Special</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
              </div>
              <div class="menu-title">Our Technology</div>
            </a>
            <ul>
               <li> <a href="{{ route('techonology.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Our Technology</a></li>
               <li> <a href="{{ route('techonology.techonologyindex') }}"><span class="material-symbols-outlined">arrow_right</span> List Why Special</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Our Team</div>
            </a>
            <ul>
               <li> <a href="{{ route('team.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Our Team</a></li>
               <li> <a href="{{ route('team.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Team</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Our Recent Project</div>
            </a>
            <ul>
               <li> <a href="{{ route('recent.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Recent Project</a></li>
               <li> <a href="{{ route('recentproject.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Recent Project</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Success Story </div>
            </a>
            <ul>
               <li> <a href="{{ route('successstorycreate.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Success Story of</a></li>
               <li> <a href="{{ route('success.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Success Story of</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Testmonail </div>
            </a>
            <ul>
               <li> <a href="{{ route('testmonailcreate.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Testmonail</a></li>
               <li> <a href="{{ route('testmonail.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Success Story of</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Blog Part </div>
            </a>
            <ul>
               <li> <a href="{{ route('blogcreate.create') }}"><span class="material-symbols-outlined">arrow_right</span>Added Blog</a></li>
               <li> <a href="{{ route('blogindex') }}"><span class="material-symbols-outlined">arrow_right</span> List Blog</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Our Client </div>
            </a>
            <ul>
               <li> <a href="{{ route('clinet.create') }}"><span class="material-symbols-outlined">arrow_right</span> Added Our Client</a></li>
               <li> <a href="{{ route('clinet.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Our Client</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">About Us</div>
            </a>
            <ul>
               <li> <a href="{{ route('about.create') }}"><span class="material-symbols-outlined">arrow_right</span> Added  About</a></li>
               <li> <a href="{{ route('about.index') }}"><span class="material-symbols-outlined">arrow_right</span> List About</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Contact Add </div>
            </a>
            <ul>
               <li> <a href="{{ route('contact.create') }}"><span class="material-symbols-outlined">arrow_right</span> Added  Contact</a></li>
               <li> <a href="{{ route('contact.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Contact</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Gallery  </div>
            </a>
            <ul>
               <li> <a href="{{ route('gallery.create') }}"><span class="material-symbols-outlined">arrow_right</span> Added  gallery</a></li>
               <li> <a href="{{ route('gallery.index') }}"><span class="material-symbols-outlined">arrow_right</span> List Gallery</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Faq</div>
            </a>
            <ul>
               <li> <a href="{{ route('faq.create') }}"><span class="material-symbols-outlined">arrow_right</span> Added  Faq</a></li>
               <li> <a href="{{route('faq.idnex')}}"><span class="material-symbols-outlined">arrow_right</span> List Faq</a> </li>
               <li> <a href="{{route('askquestion.index')}}"><span class="material-symbols-outlined">arrow_right</span> List askquestion</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title">Video Gallery</div>
            </a>
            <ul>
               <li> <a href="{{ route('videogallerycreate') }}"><span class="material-symbols-outlined">arrow_right</span> Added  Video Gallery</a></li>
               <li> <a href="{{route('videogallery.index')}}"><span class="material-symbols-outlined">arrow_right</span> List Video Gallery</a> </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><span class="material-symbols-outlined">apps</span>

              </div>
              <div class="menu-title"> Admin Profile</div>
            </a>
            <ul>
               <li> <a href="{{ route('profile.create') }}"><span class="material-symbols-outlined">arrow_right</span>  Name Or Password change</a></li>
            </ul>
          </li>
        </ul>
        <!--end navigation-->

    </div>
    <div class="sidebar-bottom dropdown dropup-center dropup">
        <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
          <div class="user-img">
             <img src="{{ asset('Backend') }}/assets/images/avatars/01.png" alt="">
          </div>
          <div class="user-info">
            <p class="mb-0 user-designation">{{ auth()->user()->name }}</p>
          </div>
        </div>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="material-symbols-outlined me-2">
            logout
            </span><span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
        </ul>
    </div>
</aside>
<!--end sidebar-->
