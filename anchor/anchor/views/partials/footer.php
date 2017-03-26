
		<?php if(Auth::user()): ?>
		<footer class="wrap bottom">
			<small><?php echo __('global.powered_by_anchor', VERSION); ?></small>
			<em><?php echo __('global.make_blogging_beautiful'); ?></em>
		</footer>

		<script>
			// Confirm any deletions
			$('.delete').on('click', function() {return confirm('<?php echo __('global.confirm_delete'); ?>');});
         
         tinymce.init({ selector: '#content', plugins: [ "advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "template paste textcolor colorpicker textpattern" ], toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor emoticons | print preview", imageadvtab: true, filebrowser_callback: RoxyFileBrowser });

      
         function RoxyFileBrowser(fieldname, url, type, win) { 
            var roxyFileman = '?integration=tinymce4'; 
            if (roxyFileman.indexOf("?") < 0) {
               roxyFileman += "?type=" + type;
            } 
            else { 
               roxyFileman += "&type=" + type; 
            } 
            roxyFileman += '&input=' + fieldname + '&value=' + win.document.getElementById(fieldname).value; 
            if(tinyMCE.activeEditor.settings.language) { 
               roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language; 
            } 
            tinyMCE.activeEditor.windowManager.open({ 
               file: roxyFileman, 
               title: 'File Manager', 
               width: 850, 
               height: 650, 
               resizable: "yes", 
               plugins: "media", 
               inline: "yes", 
               closeprevious: "no"
            }, {
               window: win,
               input: field_name 
            }); 
            
            return false; 
         }

		</script>
		<?php endif; ?>
	</body>
</html>