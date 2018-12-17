<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                 <p class="profile-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                 <div>
                   <small class="designation text-muted">
                        @foreach (Auth::user()->roles as $value)
                              {{$value->name}}
                        @endforeach
                        </small>
                   <span class="status-indicator online"></span>
                 </div>
               </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Perfil</span>
              <i class=" fa fa-id-card"></i>
            </a>
          </li>
        </ul>
      </nav>
