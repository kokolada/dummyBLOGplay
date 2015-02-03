@extends('layout.master')

@section('adminContent')
{{HTML::style('/Meltdown-master/css/meltdown.css')}}
{{HTML::script('/Meltdown-master/js/lib/element_resize_detection.js')}}
{{HTML::script('/Meltdown-master/js/lib/js-markdown-extra.js')}}
{{HTML::script('/Meltdown-master/js/lib/rangyinputs-jquery.min.js')}}
{{HTML::script('/Meltdown-master/js/jquery.meltdown.js')}}
{{Form::open()}}
	<textarea id="my_textarea" name="markdownTextArticle">@if(isset($markdown)){{$markdown}}@endif</textarea>
				<input class="bezmargine six columns"  type="text" name="naslov" placeholder="naslov" style="margin:0 auto;">
				<input class="bezmargine" type="submit" style="float:left;" value="Objavi">
{{Form::close()}}
	<script>
	$(function() {
    	jQuery('#my_textarea').meltdown({
  			openPreview: true,
  			sidebyside: true,
  			autoScrollPreview: true
    	});
	});
	</script>
@stop