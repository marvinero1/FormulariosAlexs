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
                    <th style="text-align:center;" colspan="2">Pilar</th>

                    <th style="text-align:center;"colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pdes as $pdesS)
                <tr>
                    <td style="text-align:center;" colspan="2">{{ $pdesS->anio }}</td>
                    <td style="text-align:center;" colspan="2">{{ $pdesS->eje }}</td>
                    <td style="text-align:center;" colspan="2">{{ $pdesS->pilar }}</td>
                    
                    <td style="text-align:center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalView{{ $pdesS->id }}">
                            <i class="fa fa-eye">&nbsp;&nbsp;</i>Ver
                        </button>
                        @if( Auth::user()->role == 'admin' )
                        <!-- Button trigger modal -->
                      <!--   <a class="btn btn-success " href="{{ route('pdes.edit', $pdesS->id ) }}">
                            <i class="fas fa-star"></i>  Agregar Accion Y Resultado
                        </a> -->

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
                                            <label for="nombre">Eje</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->eje }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Pilar</label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->pilar }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Meta </label>
                                            <input type="text" class="form-control" disabled="true" value="{{ $pdesS->meta }}">
                                        </div>
                                    </div>
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
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">PET</label>
                                            <input type="text" class="form-control" value="{{ $pdesS->pet }}" disabled="true">
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
