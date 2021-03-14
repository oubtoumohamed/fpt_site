      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto ln-left">
              <div class="row align-items-center">
                <div class="col-auto">
                  Master SIM
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              {{ __('global.copyright') }} © {{ date('Y') }}
            </div>
          </div>
        </div>
      </footer>
      <script type="text/javascript">
        $(document).ready(function(){
          @if( auth()->user()->getrole() == 'PROF')
          $.ajax({
            method: "GET",
            url: "{{ route('cours_question_unread') }}",
          }).done(function( data ) {
            if(data){
              $('#notification').html(data);
              $('#hasnotification').show();
            }
          });
          $('#amke_all_as_read_notification').click(function(){
            $.ajax({
              method: "GET",
              url: "{{ route('cours_question_make_readed') }}",
            }).done(function( data ) {
              if( data){
                $('#hasnotification').hide();
              }
            });
            //
          });
          @endif
        });
      </script>