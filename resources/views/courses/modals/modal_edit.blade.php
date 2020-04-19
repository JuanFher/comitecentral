
<div id="modal_edit{{$course->id}}" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{ route('courses.update', ['course' => $course->id]) }}">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Detalle del {{$course->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Nombre del curso</label>
                                <input type="text" class="form-control" name="name" value="{{ $course->name }}" id="name" required placeholder="Ingrese el nombre del curso">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="listname">Nombre del Tutor</label>
                                <input type="text" class="form-control" name="teacher_name" value="{{ $course->teacher_name }}" id="teacher_name"  placeholder="Ingrese el nombre del tutor">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="college_id" id="college_id" value="{{ $course->college_id }}" required placeholder="Ingrese el nombre del tutor">
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>