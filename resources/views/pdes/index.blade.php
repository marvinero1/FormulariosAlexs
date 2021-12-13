@extends('layouts.main')

@section('content')
<div class="content-wrapper pt-3">
    <h1 style="text-align: center" class="mb-4">PEDES</h1>
    <div class="content">

        @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="float-left pr-2">
            <a href="{{ route('pdes.create')}}"><button class="btn btn-primary">
                    <i class="fa fa-plus">&nbsp;&nbsp;</i>Crear PEDES</button></a>
        </div>
        <div class="float-left">
            <a href="{{ route('exportExcel')}}"><button class="btn btn-success">
                    <i class="fa fa-file-excel">&nbsp;&nbsp;</i>Crear Reporte Excel</button></a>
        </div>
    <div class="float-right">
        <form class="form-inline my-2 my-lg-0">
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscador Año"
                aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border: 1px #3097D1 solid;">
                <span class="search"></span>&nbsp;Buscar</button>
        </form>
    </div><br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th style="text-align:center;" colspan="2">Año</th>
                    <th style="text-align:center;" colspan="2">Eje</th>
                    <th style="text-align:center;"colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pdes as $pdesS)
                <tr>
                    <td style="text-align:center;" colspan="2">{{ $pdesS->anio }}</td>
                    <td style="text-align:center;" colspan="2">{{ $pdesS->eje }}</td>
                    <td style="text-align:center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalView{{ $pdesS->id }}">
                            <i class="fa fa-eye">&nbsp;&nbsp;</i>Ver
                        </button>
                        @if( Auth::user()->role == 'admin' )
                        <!-- Button trigger modal -->
                        <a class="btn btn-success " href="{{ route('pdes.edit', $pdesS->id ) }}">
                            <i class="fas fa-star"></i>  Agregar Accion Y Resultado
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$pdesS->id}}">
                          <i class="fa fa-newspaper">&nbsp;&nbsp;</i>Actualizar Acción
                        </button>
                        <form action="{{ route('pdes.destroy',$pdesS->id ) }}" method="POST"
                        accept-charset="UTF-8" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-app" title="Delete Image"
                            class="btn btn-danger btn-sm"
                            title="Delete Image" onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i class="fa fas fa-trash"
                                    aria-hidden="true"></i> Eliminar</button>
                        </form>
                        @endif
                    </td>

                    <!-- Modal Actualizar-->
                    <div class="modal fade" id="exampleModal{{$pdesS->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-left: 0px !important;">
                      <div class="modal-dialog" role="document" style="width: 750px;margin: auto;">
                        <div class="modal-content" style="width: 750px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Plan Estratégico</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <div class="modal-body">
                                <form action="{{route('pdes.update', $pdesS->id )}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->anio }}">
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Eje</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->eje }}">
                                        </div>
                                    </div>
                                    @if($pdesS->pilar1 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 1</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar1 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar2 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 2</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar2 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar3 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 3</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar3 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar4 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 4</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar4 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar5 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 5</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar5 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar6 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 6</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar6 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar7 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 7 </label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar7 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar8 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 8</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar8 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar9 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 9</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar9 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar10 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 10</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar10 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar11 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 11</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar11 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar12 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 12</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar12 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar13 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 13 </label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar13 }}">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    @if($pdesS->meta1 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 1</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta1 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta2 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 2</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta2 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta3 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 3</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta3 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta4 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 4</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta4 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta5 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 5</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta5 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta6 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 6</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta6 }}">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Resultado</label>
                                            <input type="text" class="form-control" name="resultado" placeholder="{{ $pdesS->resultado }}">
                                        </div>
                                    </div>

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Acción</label>
                                            <input type="text" class="form-control" name="accion" placeholder="{{ $pdesS->accion }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal View-->
                    <div class="modal fade" id="exampleModalView{{ $pdesS->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalView" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h5 class="modal-title " id="exampleModalView">PEDES Información</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->anio }}">
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Eje</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->eje }}">
                                        </div>
                                    </div>
                                    @if($pdesS->pilar1 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 1</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar1 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar2 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 2</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar2 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar3 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 3</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar3 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar4 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 4</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar4 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar5 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 5</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar5 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar6 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 6</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar6 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar7 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 7 </label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar7 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar8 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 8</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar8 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar9 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 9</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar9 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar10 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 10</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar10 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar11 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 11</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar11 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar12 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 12</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar12 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->pilar13 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar 13 </label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar13 }}">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    @if($pdesS->meta1 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 1</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta1 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta2 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 2</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta2 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta3 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 3</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta3 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta4 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 4</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta4 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta5 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 5</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta5 }}">
                                        </div>
                                    </div>
                                    @endif
                                    @if($pdesS->meta6 != null)
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta 6</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta6 }}">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Resultado</label>
                                            <input type="text" class="form-control" value="{{ $pdesS->resultado }}" disabled="true">
                                        </div>
                                    </div>

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Acción</label>
                                            <input type="text" class="form-control" value="{{ $pdesS->accion }}" disabled="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table><br><br>
    </div>
    <div style="text-align: center;">
        {{ $pdes->links() }}
    </div>
</div>
</div>
@endsection
