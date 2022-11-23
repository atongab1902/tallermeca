<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCrearCargo" tabindex="-1" role="dialog" aria-hiden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Crear Nuevo Cargo') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form method="POST" action="{{ route('cargo.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cargo.form')

                        </form>            
                </div>
            </div>
        </div>
    </div>
</form>
