@if(Request::get('cache') == 'flush')
	@php 
		session()->forget('quiz');
		session()->forget('checkout_quiz_id');
	@endphp
@endif
                        @if($quiz_->gender == 'man')
                          @include('frontend.forms.man_form')
                        @else
                          @include('frontend.forms.woman_form')
                        @endif


<style>
	.body{
		overflow:hidden;
	}

	@media (max-width: 767px) {
      ul.progress-steps.steps, .abc {
        display: none;
      }
    }
</style>