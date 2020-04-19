
<div id="modal_edit{{$user->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('users.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle del {{$user->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Nombre del Usuario</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" id="name" required placeholder="Ingrese el nombre del Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email"  required placeholder="Ingrese el email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">password</label>
                                <input type="password" class="form-control" name="password" value="" id="password"  placeholder="Ingrese el password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Rol</label>
                                <select class="form-control" name="role">

                                    @foreach ($roles as $role => $value)
                                        @if ($user->hasRole($value))
                                            <option value="{{ $value }}" selected>{{ $value }}</option>
                                        @else
                                            <option value="{{ $value }}">{{ $value }}</option>
                                        @endif
                                        
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>