function handleFileSelect (evt) {
	var files = evt.target.files; // FileList object
  // files is a FileList of File objects. List some properties.
  var output = [];
  for (var i = 0, f; f = files[i]; i++) {
    output.push('<li><strong>', f.name, '</strong> ,  - ',
               	f.size, ' bytes, last modified: ',
               	f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }
document.getElementById('file').addEventListener('change', handleFileSelect, false);	