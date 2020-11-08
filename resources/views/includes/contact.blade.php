<div class="modal fade" id="contact">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-error">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="form">
                    <form class="sendemail-form" method="POST" action="{{ route('contact.sendInfo') }}">
                        @csrf
                        <input type="text" name="subject" placeholder="Subject" required/>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button>Send Email</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar mensaje</button>
            </div>
        </div>
    </div>
</div>
