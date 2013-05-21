   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
          <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </a>
              <a class="brand" href="<?=base_url("/");?>">Give me a Pug</a>
              <div class="nav-collapse collapse">
                  <ul class="nav">
                      <li class="active"><a href="<?=base_url("/");?>">Home</a></li>
                      <li><a href="<?=base_url("about");?>">Sobre mim</a></li>
                      <li><a href="#contact">Fale comigo</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="#">Doar</a></li>
                              <li><a href="#">Sobre mim</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li class="nav-header">Nav header</li>
                              <li><a href="#">Separated link</a></li>
                              <li><a href="#">One more separated link</a></li>
                          </ul>
                      </li>
                  </ul>
                  <form class="navbar-form pull-right">
                      <button type="submit" class="btn btn-primary">Donate now</button>
                  </form>
              </div><!--/.nav-collapse -->
          </div>
      </div>
   </div>