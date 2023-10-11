<div class="container-fluid">
    <span class="mt-2">CustomCSS - Editor</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="css-area" name="css-area"></textarea>
    </div>
</div>

<div class="container-fluid">
    <span class="mt-2">CustomJS - Editor</span>
    <hr class="my-1">
    <div class="p-2 mb-1">
        <textarea id="js-area" name="js-area"></textarea>
    </div>
</div>



{literal}
    <script>
        var editor_css = CodeMirror.fromTextArea(document.getElementById("css-area"), {
            extraKeys: {"Ctrl-Space": "autocomplete"},
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-gss"
        });
        var editor_js = CodeMirror.fromTextArea(document.getElementById("js-area"), {
            extraKeys: {"Ctrl-Space": "autocomplete"},
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/javascript"
        });
    </script>
{/literal}