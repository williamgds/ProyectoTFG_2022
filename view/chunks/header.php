<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo $helper->url("Candidatos","index"); ?>" class="nav-link px-2 text-secondary">EasyATS</a></li>
          <li><a href="<?php echo $helper->url("Candidatos","crear_candidato"); ?>" class="nav-link px-2 text-white">Crear candidato nuevo</a></li>
          <li><a href="<?php echo $helper->url("Candidaturas","crear_candidatura"); ?>" class="nav-link px-2 text-white">Crear candidatura</a></li>
          <li><a href="<?php echo $helper->url("Candidaturas","ver_candidaturas"); ?>" class="nav-link px-2 text-white">Ver candidaturas</a></li>
          <li><a href="<?php echo $helper->url("RelacionCandidatos","index"); ?>" class="nav-link px-2 text-white">Ver posiciones</a></li>
        </ul>
        
        
        <a href="<?php echo $helper->url("Login","logout");?>" class="btn btn-outline-light">Cerrar sesión</a>
        
        
      </div>
    </div>
  </header>
