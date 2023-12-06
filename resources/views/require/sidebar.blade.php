<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
  
      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Docteurs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('docteurs.index') }}">
              <i class="bi bi-circle"></i><span>Liste Docteurs</span>
            </a>
          </li>
          <li>
            <a href="{{ route('docteurs.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter Docteurs</span>
            </a>
          </li>
  
        </ul>
      </li><!-- End Components Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Gestion Patients</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('patients.index') }}">
              <i class="bi bi-circle"></i><span>Liste patients</span>
            </a>
          </li>
          <li>
            <a href="{{route ('patients.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter patients</span>
            </a>
          </li>
  
        </ul>
      </li><!-- End Forms Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gestion specialites </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route ('specialites.index') }}">
              <i class="bi bi-circle"></i><span>Liste Specialistes</span>
            </a>
          </li>
          <li>
            <a href="{{route ('specialites.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter specialistes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route ('services.index') }}">
              <i class="bi bi-circle"></i><span>Liste services</span>
            </a>
          </li>
          <li>
            <a href="{{route ('services.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter services</span>
            </a>
          </li>
  
        </ul>
    </li><!-- End Charts Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion rendez-vous</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route ('rendezvous.index') }}">
              <i class="bi bi-circle"></i><span>Liste rendez-vous</span>
            </a>
          </li>
          <li>
            <a href="{{route ('rendezvous.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter rendez-vous</span>
            </a>
          </li>
          <li>
           
          
  </aside>