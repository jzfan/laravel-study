<script>
var simplemde = new SimpleMDE({
    autoDownloadFontAwesome: false
  });
function tagsInputWithBotton(name, maxtags=1) {
    let input = $('input[name="' + name + '"]')
    input.tagsinput({ maxTags: maxtags})
    $('#' + name + '-block > button').click( function (e) {
        maxtags === 1 && input.tagsinput('removeAll')
        input.tagsinput('add', $(e.target).text())
    })
}
tagsInputWithBotton('series')
tagsInputWithBotton('tags', 4)
</script>