<form method="POST" action="{{ route('empleado.update', $empleado->id) }}"  role="form" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalEditEmpleado" tabindex="-1" role="dialog" aria-hiden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Editar Horario') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('empleado.form')
                </div>
            </div>
        </div>
    </div>
</form>
