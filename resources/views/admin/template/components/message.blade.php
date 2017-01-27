@if (session()->has('flash_notification.message'))

      <div id="alert-message" class="{{session('flash_notification.level')}}">
          <div id="card-alert" class="card">
            <div class="card-content ">
              <p>{!! session('flash_notification.message') !!}<p>
            </div>
            <button type="button" class="closs close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
          </div>
      </div>

@endif
