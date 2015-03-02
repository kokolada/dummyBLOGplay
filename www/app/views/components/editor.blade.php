{{HTML::style('/Meltdown-master/css/meltdown.css')}}
{{HTML::script('/Meltdown-master/js/lib/element_resize_detection.js')}}
{{HTML::script('/Meltdown-master/js/lib/js-markdown-extra.js')}}
{{HTML::script('/Meltdown-master/js/lib/rangyinputs-jquery.min.js')}}
{{HTML::script('/Meltdown-master/js/jquery.meltdown.js')}}

<textarea id="my_textarea" name="markdownTextArticle">@if(isset($markdown)){{$markdown}}@endif</textarea>

<script>
	$(function() {
    	jQuery('#my_textarea').meltdown({
  			openPreview: true,
  			sidebyside: true,
  			autoScrollPreview: true
    	});
	});
</script>