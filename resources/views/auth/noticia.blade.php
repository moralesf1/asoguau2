	   @extends('index')

@section('container')

       <h2 class="text-center">NOTICIAS ASOGUAU</h2>
	   <hr class="primary"></hr>
	   @foreach($noticias as $noticia)
                      @if ($noticia->idtiponoticia==1)
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/perdido.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded" >
                                    {{$noticia->titulo}}
                                </div>
                                <div class="project-name">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Leer mas</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                
             @endif
                  @endforeach
               
                
            </div>
        </div>
		<!--FIN DE NOTICIAS ASOGUAU-->
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{$noticia->id}}</h4>
        </div>
        <div class="modal-body">
          <p>{{$noticia->descripcion}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- end: HEAD -->
    <!-- start: COPYRIGHT -->
            <div class="copyright">
                &copy; Fundaci&oacuten Asoguau, Powered by Acto Voluntario - Todos los derechos reservados.
            </div>

     <!-- jQuery -->
    <script src="{{asset ('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset ('js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset ('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset ('js/jquery.fittext.js')}}"></script>
    <script src="{{asset ('js/wow.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset ('js/creative.js')}}"></script>

@endsection